<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use App\Events\StudentRegisterMailEvent;
use Auth;
use Validator;
use App\Models\Course;
use App\Models\Student;
use App\Models\Status;
use App\Models\EMGS_Status;
use App\Models\Course_requirement;
use Illuminate\Support\Facades\DB;
use App\Models\Companyprofile;
use App\Models\StudentDoc;

use ZipArchive;
use File;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

class StudentsController extends Controller
{
    //
    public function Index(){
         $cp = Companyprofile::find(1);
        return view('student.auth.login',compact('cp'));
    }

    public function login(Request $request){
        // dd($request->all());
        $check = $request->all();
        $stu = Student::where('email' ,'=', $check['email'])->first();
        
        if(!$stu){
            return back()->with('error' , 'Invalid email , please check your cardentials');
        }
        
        if($stu->active_status == 0){
            return back()->with('error' , 'Your account is deactivated , you can not login');
        }else{
            
        if(Auth::guard('student')->attempt(['email' => $check['email'] , 'password' => $check['password'] ])){
            return redirect()->route('student_dashboard');
        }else{
            return back()->with('error' , 'Invalid email or password , please check your cardentials ');
        }
        
        }
        //event(new StudentRegisterMailEvent($check));
    }

    public function regestration(){
        //die("something special");
         $cp = Companyprofile::find(1);
         return view('student.auth.registration',compact('cp'));
    }

     public function regestration_create(Request $request){
        
              //validation 
        $request->validate([
            'name' => 'required',
            'email' => 'email|unique:students',
            'country' => 'required',
            'phone' => 'required|unique:students',
            'password' => 'required|same:confirm_password|min:4',
            
        ]);

        //data insert
       $user = Student::insert([
            'name' => $request->name,
            'email' => $request->email, 
            'country' => $request->country,
            'country_code' => $request->pre,
            'phone' => $request->phone,  
            'password' => Hash::make($request->password),
            'created_at' => now(),
        ]);

        if(Auth::guard('student')->attempt(['email' =>  $request->email , 'password' => $request->password ])){
            $data = Companyprofile::find(1);
            Mail::to($request->email)->send(new WelcomeEmail($data));
            return redirect()->route('student_dashboard');
        }

        //event(new Registered($user));
        //event(new StudentRegisterMailEvent($user));
        //page return section
        return redirect()->route('student_login_form')->with('s_success','Your account created successfully, Now you can login !');
    }

    public function Dashboard(){
        $page_main = "Student";
        $page = "dashboard";    
        $cp = Companyprofile::first();

        $student = Student::find(Auth::guard('student')->user()->id);
        
        
        //This section is for only the company status section
        $sta = Status::all();


        $test[] ="";
        foreach($sta as $stu){
            $test[] = $stu->status;
        }
        $percentage_number = 100;
         if($student->status_id != null){
        $v = array_search($student->status->status, $test);
        }else{
         $v = false;
        }

        $count = $sta->count();

        if($v != false){   $state_complete = $v;  }else{    $state_complete = 0;   }
        // $due_state = $count - $state_complete;
        if($count != 0){
        $due_state = round(($state_complete/$count)*100 );
        $due_state = filter_var($due_state, FILTER_SANITIZE_NUMBER_INT);
        }else{
            $due_state = 0;
        }
        //dd($state_complete);

        //dd($cont);
       // die($userses);

        // $collection = collect([10,20,30,40,50]);
        // $collection->count();
        // die($collection);

        //ENd of the company status
        
             //This section is for EMGS status section 

        $emg_sta = EMGS_Status::all();
        $emg_test[] ="";
        foreach($emg_sta as $stu){
            $emg_test[] = $stu->status;
        }
        
        if($student->emg_status != null){
        $emg_v = array_search($student->emgs->status, $emg_test);
        }else{
          $emg_v = false;
        }
       
        $emg_count = $emg_sta->count();

        if($emg_v != false){   $emg_complete = $emg_v;  }else{    $emg_complete = 0;   }
        // $due_state = $count - $state_complete;
        if($emg_count != 0){
        $emg_state = round(($emg_complete/$emg_count)*100 );
        $emg_state = filter_var($emg_state, FILTER_SANITIZE_NUMBER_INT);
        }else{
            $emg_state = 0;
        }
        
        //End of the EMGS status section

        //this is all about the course requirments
        $require='';
        if($student->course_id != ''){
            $require = Course_requirement::where('course_id','=',$student->course_id)->get();
        }
        //this is all about documents
        $stuDoc= '';
        $stuDoc=StudentDoc::where('student_id','=',$student->id)->get();
        
        //end of the course requirements

        $topcourse = Student::whereNotNull('course_id')->select('course_id')->selectRaw('count(course_id) as qty')
                                ->groupBy('course_id')
                                ->orderBy('qty', 'DESC')
                                ->take(10)
                                ->get();

        $topuniversity = Student::whereNotNull('university_id')->select('university_id')->selectRaw('count(university_id) as qty')
                                ->groupBy('university_id')
                                ->orderBy('qty', 'DESC')
                                ->take(10)
                                ->get();
        $courses = Student::find(Auth::guard('student')->user()->id)->courses;
        

        return view('student.dashboard', compact('page_main','page','cp','topcourse','topuniversity','courses','student','due_state','emg_state','require','stuDoc'));
    }

    //Dashboard Profile updates
    public function profileupdate(Request $request){
       
        //valistion for inputs
        $request->validate([
            'passport' => 'required',
            'age' => 'required',
            
            'remarks' => 'required',
            'city' => 'required',
            'profile' => 'required|mimes:jpg,png,jpeg|max:60000',
        ]);

        $data = Student::find($request->id);

        $data->passport_no = $request->passport;
        $data->remarks = $request->remarks;
        $data->age = $request->age;
        $data->city = $request->city;


        if($request->file('profile')){
            $file = $request->file('profile');

            if($data->photo){
                if(file_exists(public_path('uploads/'.$data->photo))){
                unlink(public_path('uploads/'.$data->photo));
                }
            }

            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads'),$filename);
            $data['photo'] = $filename;
        }
        $data->save();
        return back();
    }
    //End of the dashboard profile updates

    //this section is for documents upload of student
    public function docupload(Request $request){
        $student =  Student::find($request->id);
        $doc = new StudentDoc;
        $require='';
        if(!empty($student->course_id)){
            $require = Course_requirement::where('course_id','=',$student->course_id)->get();
        }
        //validation
    
        $name=1;
        $uploaded_files = [];
        foreach($require as $da){
            if($request->file('document'.$name) != null){
            $request->validate([
            'document'.$name => 'required|mimes:jpeg,jpg,png,pdf|max:50000',
            ]);
             array_push($uploaded_files , ['name' => 'document'.$name ]);
            }
           $name++;
        }
        
        if(sizeof($uploaded_files) == 0){
            return back()->with('warning','Please select any documents');
        }
       
        //dd($require);
        $input = [];
        $name=1;
        foreach($require as $data){
            
          if($request->file('document'.$name) != null){
                
            $file = $request->file('document'.$name);
            $ex = $request->file('document'.$name)->extension();
            $filename = 'document_'.$data->input.'_'.$name.time(). '.' .$ex;
            $file->move(public_path('documents'),$filename);
            // $request->file('$data->input')->getClientOriginalName();
            // $name = time(). '.' .$pre;
            // $file->move(public_path().'/documents/', $name);
            // $doc->name = $filename;
            // $doc->type = $data->input;
            // $doc->student_id = $student->id;
            // $doc->requirement_id = $data->id;
            // $doc->save();
            //----------------------------------//
                $doc->student_id = $request->id ;
                $doc->requirement_id = $data->id;
                $doc->type = $data->input; 
                $doc->name = $filename; 
            //----------------------------------//
            // $fetchData = json_decode($student->doc);
            // if($fetchData != null){
            // foreach($fetchData as $row){
            //     array_push($input , ['title'=>$row->title, 'name' => $row->name ]);
            // }
            // }
            // array_push($input , ['title'=>$data->input, 'name' => $filename]);
            // }
           }
          $name++;
        }
        $doc->save();
        return back()->with("s_success", "Document's uploaded successfully ! ");

    }
    //end of the documents upload o student

    


     //get user info and show in profile page
     public function profile(){
        $page_main = "Student";
        $page = "Profile";
        $cp = Companyprofile::find(1);

        $id = Auth::guard('student')->user()->id;
        $adminData = Student::find($id);
        return view('student.profile', compact('adminData','cp','page_main','page'));
    }//end method

    // for showing the edite pofile page
    public function Editeprofile(){
        $page_main = "Student";
        $page = "Profile Update";
        $cp = Companyprofile::find(1);

        $id = Auth::guard('student')->user()->id;
        $student = Student::find($id);
        return view('student.profile_edite', compact('student','cp','page','page_main'));
    } //end method

    //update the profile info
    public function StoreProfile(Request $request){

        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'country' => 'required',
            'phone' => 'required',
        ]);

        $id = Auth::guard('student')->user()->id;
        $data = Student::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->country = $request->country;
        $data->age = $request->age;


        if($request->file('photo')){
            $file = $request->file('photo');

            if($data->photo){
                unlink(public_path('uploads/'.$data->photo));
            }

            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads'),$filename);
            $data['photo'] = $filename;
        }
        $data->save();

        return redirect()->route('student_profile')->with('s_success', 'Your Profile updated successfully!');

    } //end method


    public function password(){
        $page_main = "Student";
        $page = "Password Reset";
        $cp = Companyprofile::find(1);
        return view('student.passwordreset', compact('cp','page','page_main'));
    }

    public function password_change(Request $request){

        //die(Auth()->guard('student')->user()->password);
        //validation 
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        //Match the old password
        if(!Hash::check($request->old_password,Auth()->guard('student')->user()->password)){
            return back()->with("error","Old Password Dosen't match!");
        }

        //update password

        $user = Student::find(Auth()->guard('student')->user()->id);
        $user->update([
            'password' => Hash::make($request->new_password),
        ]);
        return back()->with("success","Password Changed successfully !");
    } //end method

    //this is the for download upload documents by student
    public function StudentDocDownload(Request $request , $id){
        $fileNm = StudentDoc::where('requirement_id','=',$id)->first();
        return response()->download(public_path('documents/'.$fileNm->name));
    }
//End of the section

//This section is for delete the documents
    public function StudentDocDelete(Request $request,$id){
        $fileNm = StudentDoc::where('requirement_id','=',$id)->first();

        if(file_exists(public_path('documents/'.$fileNm->name))){
            unlink(public_path('documents/'.$fileNm->name));
        }
        $fileNm->delete();
        return back()->with("s_success","File deleted successfully !");
    }
//End of the section

    public function destroy(Request $request)
    {
        Auth::guard('student')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/student/login');
    }

}

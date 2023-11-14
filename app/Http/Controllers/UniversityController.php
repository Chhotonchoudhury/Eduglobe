<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;
use App\Models\PaymentCategory;
use App\Models\Course;
use App\Models\Degree;
use App\Models\Student;
use App\Models\Category;

use App\Models\Student_Payment;
use App\Models\Payment;
use App\Models\Commission;
use App\Models\Companyprofile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UniversityController extends Controller
{
    //

        //showing the forms for add data
        public function add(Request $request, $search = ''){
            $page_main = "University";
            $page = "Add New University";
            $cp = Companyprofile::find(1);

            $query = University::orderBy('id', 'desc');

            $search = $request->input('search', '');
            // Check if a search parameter is provided
            if (!empty($search)) {
                // Perform a search based on your criteria
                $query->where('name', 'LIKE', "%$search%")
                    ->orWhere('ar_name', 'LIKE', "%$search%")
                    ->orWhere('campus_name', 'LIKE', "%$search%")
                    ->orWhere('Unumber', 'LIKE', "%$search%")
                    ->orWhere('email', 'LIKE', "%$search%")
                    ->orWhere('ex_number', 'LIKE', "%$search%")
                    ->orWhere('ex_email', 'LIKE', "%$search%")
                    ->orWhere('address', 'LIKE', "%$search%")
                    ->orWhere('remarks', 'LIKE', "%$search%");
            }
        
            $unvs = $query->get();
   
            return view('new.UniAdd', compact('cp','page','unvs','page_main')); 
        }//end method
    
        //store university data
        public function store(Request $request){

            // dd($request);
            $recordId = $request->input('editId');

            if ($recordId) {
                //update  code

                $request->validate([
                    'name' => ['required'],
                    // 'arabic_name' => ['required'],
                    'campus' => ['required'],
                    'u_number' => ['required'],
                    'email' => ['required'],
                    'ex_number' => ['required'],
                    'ex_email' => ['required'],
                    'address' => ['required'],
                    'remarks' => ['required'],

                    // 'arabic_address' => ['required'],
                    // 'arabic_remarks' => ['required'],

                    'logo' => 'nullable|mimes:jpg,png,jpeg|max:2048',
                    'photo' => 'nullable|mimes:jpg,png,jpeg|max:2048',
                ]);

                $data = University::find($recordId);

                $data->name = $request->name;
                $data->ar_name = $request->arabic_name;
                $data->campus_name = $request->campus;
                $data->email = $request->email;
                $data->Unumber = $request->u_number;
                $data->ex_number = $request->ex_number;
                $data->ex_email = $request->ex_email;
                $data->address = $request->address;
                $data->remarks = $request->remarks;

                // $data->ar_address = $request->arabic_address;
                // $data->ar_remarks = $request->arabic_remarks;


                //Logo image update 
                if($request->file('logo')){
                    $request->validate([ 'logo' => 'required|mimes:jpg,png,jpeg|max:2048',]);
                    //die(public_path('uploads/'.$data->logo));
                    $file = $request->file('logo');
                    if($data->logo){
                        if(file_exists(public_path('uploads/'.$data->logo))){
                            unlink(public_path('uploads/'.$data->logo));
                        }
                        
                    }
        
                    $filename = date('YmdHi').$file->getClientOriginalName();
                    $file->move(public_path('uploads'),$filename);
                    $data['logo'] = $filename;
                }

                //photo image update 
                if($request->file('photo')){
                    $request->validate([ 'photo' => 'required|mimes:jpg,png,jpeg|max:2048',]);

                    $file = $request->file('photo');
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
                return back()->with('s_success','University Details updated successfully !');

                   //update the end  

            }else{
                //insert hole code 
                // inputs validation validation 
                $request->validate([
                    'name' => ['required'],
                    // 'arabic_name' => ['required'],
                    'campus' => ['required'],
                    'u_number' => ['required'],
                    'email' => ['required'],
                    'ex_number' => ['required'],
                    'ex_email' => ['required'],
                    'address' => ['required'],
                    'remarks' => ['required'],

                    // 'arabic_address' => ['required'],
                    // 'arabic_remarks' => ['required'],

                    'logo' => 'required|mimes:jpg,png,jpeg|max:2048',
                    'photo' => 'required|mimes:jpg,png,jpeg|max:2048',
                ]);
            
                //logo upload 
                $Logo = time().'_'.$request->logo->getClientOriginalName().'.'.$request->logo->extension();
                $request->logo->move(public_path('uploads'),$Logo);

                //Photo validation & upload 
                if($request->photo != ''){
                $request->validate([ 'photo' => 'required|mimes:jpg,png,jpeg|max:2048',]);
                $Photo = time().'_'.$request->photo->getClientOriginalName().'.'.$request->photo->extension();
                $request->photo->move(public_path('uploads'),$Photo);
                }else{ $Photo = ''; }  


                //data insertion 
                University::create([
                    'name' => $request->name,
                    'ar_name' => $request->arabic_name,
                    'campus_name' => $request->campus,
                    'email' => $request->email,
                    'Unumber' => $request->u_number,
                    'logo' => $Logo,
                    'ex_number' => $request->ex_number,
                    'ex_email' => $request->ex_email,
                    'address' => $request->address,
                    'remarks' => $request->remarks,

                    // 'ar_address' => $request->arabic_address,
                    // 'ar_remarks' => $request->arabic_remarks,

                    'photo' => $Photo,
                ]);

                return back()->with('s_success','University added successfully !');

            }
        }//end method


        //this is for university course part
        public function Course_update(Request $request){
            $recordId = $request->input('EditeId');

            if ($recordId) {

                   //update  code
                   //validation
                    $request->validate([
                        'Course_name' => ['required'],
                        'course' => ['required'],
                        'period' => ['required'],

                        'arabic_name' => ['required'],
                        'arabic_course' => ['required'],
                        'arabic_period' => ['required'],

                        'start_date' => ['required'],
                        'start_date2' => ['required'],
                        'category' => ['required'],
                        'details' => ['required'],
                        'arabic_details' => ['required'],
                        'fees'    => ['required'],
                        'degree'    => ['required'],
                    ]);
                    $course = Course::find($recordId);

                    // die($course);
                    // update now

                    
                    //working with image
                    if($request->file('Course_photo')){
                        $request->validate([ 'Course_photo' => 'nullable|mimes:jpg,png,jpeg|max:2048',]);
                        //die(public_path('uploads/'.$course->photo));
                        $file = $request->file('Course_photo');
                        if($course->photo){
                            if(file_exists(public_path('uploads/'.$course->photo))){
                                unlink(public_path('uploads/'.$course->photo));
                            }
                            
                        }
                        $ex = $file->extension();
                        $filename = time(). '.' .$ex;
                        $file->move(public_path('uploads'),$filename);
                        $course->photo = $filename;
                    }
                    //end section

                    //working with multi images section 
                    if($request->hasfile('multi_image'))
                    {
                        //multi image validation 
                        $request->validate([
                            'multi_image.*' => 'nullable|mimes:jpeg,jpg,png,gif|max:2048',
                        ]);
                        //end
                        //previous image delete part section 
                        if($course->related_image != ''){
                        $img=json_decode($course->related_image);  
                            foreach($img as $imgs){
                                if(file_exists(public_path('uploads/'.$imgs))){
                                unlink(public_path('uploads/'.$imgs));
                                }
                                }
                        }
                        //end

                        foreach($request->file('multi_image') as $file)
                        {
                        $pre=$file->getClientOriginalName();
                        $name = time(). '.' .$pre;
                        $file->move(public_path().'/uploads/', $name); 
                        $data[] = $name;
                        }
                        $course->related_image = json_encode($data);
                    }

                    //end of the section

                    $course->course_degree = $request->degree;
                    $course->fess = $request->fees;
                    $course->name = $request->Course_name;
                    $course->course = $request->course;	
                    $course->course_period = $request->period;
                    
                    $course->ar_name = $request->arabic_name;
                    $course->ar_course = $request->arabic_course;	
                    $course->ar_course_period = $request->arabic_period;	

                    
                    $course->category_id = $request->category;
                    $course->detail = $request->details;
                    $course->ar_detail = $request->arabic_details;
                    $course->starting_date = $request->start_date;
                    $course->starting_date2 = $request->start_date2;
                    $course->entry_id = Auth::user()->id;

                    $course->save();
                    return back()->with(["s_success" => "course updated successfully", 'active_tab'=>2]);


                //end of the update code 
            }else{
                //insert code

                  //validation
                    $request->validate([
                        'Course_name' => ['required'],
                        'course' => ['required'],
                        'period' => ['required'],

                        'arabic_name' => ['required'],
                        'arabic_course' => ['required'],
                        'arabic_period' => ['required'],

                        'start_date' => ['required'],
                        'start_date2' => ['required'],
                        'category'   => ['required'],
                        'Course_photo' => 'required|mimes:jpg,png,jpeg|max:2048',
                        'multi_image' => 'required',
                        'multi_image.*' => 'mimes:jpeg,jpg,png|max:2048',
                        'details' => ['required'],
                        'arabic_details' => ['required'],
                        'fees'    => ['required'],
                        'degree'    => ['required'],
                    ]);

                    //insert the record vid model
                        $course = new Course;
                        $course->name = $request->Course_name;
                        $course->course = $request->course;	
                        $course->course_period = $request->period;
                        
                        $course->ar_name = $request->arabic_name;
                        $course->ar_course = $request->arabic_course;	
                        $course->ar_course_period = $request->arabic_period;

                        $course->university_id = $request->university;
                        $course->category_id = $request->category;
                        $course->detail = $request->details;
                        $course->ar_detail = $request->arabic_details;

                        $course->starting_date = $request->start_date;
                        $course->starting_date2 = $request->start_date2;
                        $course->fess = $request->fees;
                        $course->course_degree = $request->degree;
                        $course->entry_id = Auth::user()->id;
                        
                    //working with image
                    if($request->Course_photo){
                        $file = $request->Course_photo;
                        $ex = $request->Course_photo->extension();
                        $filename = time(). '.' .$ex;
                        $file->move(public_path('uploads'),$filename);
                        $course->photo = $filename;
                    }


                    if($request->hasfile('multi_image'))
                    {
                    foreach($request->file('multi_image') as $file)
                    {
                        $pre=$file->getClientOriginalName();
                        $name = time(). '.' .$pre;
                        $file->move(public_path().'/uploads/', $name); 
                        $data[] = $name;
                    }

                    }

                    $course->related_image = json_encode($data);
                    $course->save();
                    
                    return back()->with(["s_success" => "course added successfully", 'active_tab'=>2]);


                 //end of insert code
               }

        }

        //end of the course part

        public function Course_delete(Request $request , $id){
            $ex = Course::find($request->id);

            $stu_course = Student::where('course_id','=',$ex->id)->first();
            if(!empty($stu_course)){
                return back()->with(["info" => "You can't delete this course bcoz, it is already uses",'active_tab'=>2]);
            }

            // $path = public_path('uploads/'.$ex->photo));
            // if(File::exists($path)){
            //   File::delete($path);
            //  }
            
            if(file_exists(public_path('uploads/'.$ex->photo))){
            if($ex->photo){
                unlink(public_path('uploads/'.$ex->photo));
            }
            }

            if($ex->related_image != ''){
                $img=json_decode($ex->related_image);  
                foreach($img as $imgs){
                    if (file_exists(public_path('uploads/' . $imgs))) {
                        unlink(public_path('uploads/' . $imgs));
                    }
                }
            }

            $ex->delete();
            return back()->with(["s_success"=>"Course Record deleted successfully ",'active_tab'=>2]);
        }


        //this is the update part for uni student

        public function Student_update(Request $request){

                    $editId = $request->input('id');
                    $student = Student::find($editId);
                    // Update inputs validation
                    $request->validate([
                        'student_name' => 'required',
                        'student_email' => 'email|unique:students,email,' . $editId,
                        'dob' => 'required',
                        'country' => 'required',
                        'mobile' => 'required|unique:students,phone,' . $editId,
                        'city' => 'required',
                        'student_address' => 'required',
                    ]);
    
                    // Photo validation & upload
                    $photo = $student->photo;
                    if ($request->hasFile('photo')) {
                        $request->validate([
                            'photo' => 'mimes:jpg,png,jpeg|max:2048',
                        ]);
    
                        // Unlink old photo if it exists
                        if (!empty($photo) && file_exists(public_path('uploads/' . $photo))) {
                            unlink(public_path('uploads/' . $photo));
                        }
    
                        $photo = time() . '_' . $request->photo->getClientOriginalName() . '.' . $request->photo->extension();
                        $request->photo->move(public_path('uploads'), $photo);
                    }
    
                   
    
                    // Data update
                    $student->update([
                        'name' => $request->student_name,
                        'email' => $request->student_email,
                        'dob' => $request->dob,
                        'country' => $request->country,
                        'country_code' => $request->pre,
                        'phone' => preg_replace('~^[0\D]++|\D++~', '', $request->mobile),
                        'passport_no' => $request->passport,
                        'city' => $request->city,
                        'address' => $request->student_address,
                        'photo' => $photo,
                    ]);
    
            return back()->with(['s_success'=>'Student information updated successfully!', 'active_tab'=>3]);
        }
    


        //fetch record 
        public function fetchRecord($id){

            $record = University::find($id);

            return response()->json(['success' => true, 'data' => $record]);
        }

        //fetch course information record 
        public function fetchCourseRecord($id){
            $record = Course::find($id);
            $images = json_decode($record->related_image);
            return response()->json(['success' => true, 'data' => $record ,'related_images' => $images ]);
        }

        //this is the fetch information for the student
        public function fetchStudentRecord($id){
            $record = Student::find($id);
            return response()->json(['success' => true, 'data' => $record ]);
        }

        //end of the record 

        //this methods is for show the list of university
        // public function list(){
        //     $page_main = "University";
        //     $page = "University List";
        //     $cp = Companyprofile::find(1);

        //     $unvs = University::orderby('id','desc')->get();
        //     return view('UniList',compact('unvs','cp','page','page_main'));
        // }

        //this function is for view the university
        public function view(Request $request , $id , $course = 0) {
            $dataFromUrl = $request->query('course', 0);
            preg_match('/(\d+)/', $dataFromUrl, $matches);
            $numericValue = $matches ? $matches[0] : 0;
            $dataFromUrl = $numericValue;

            $paymentDataFromUrl = $request->query('payment', 0);
            preg_match('/(\d+)/', $paymentDataFromUrl, $matches2);
            $numericValue2 = $matches2 ? $matches2[0] : 0;
            $paymentDataFromUrl = $numericValue2;

            $page_main = "University";
            $page = "University Profile";
            $cp = Companyprofile::find(1);
            //die('Plz do something happend us there is no knowedge for us please');
             //die($id);
            // $tota_Degree = Degree::count();
            
            $unv = University::find($id);
            $paytype = PaymentCategory::all();
            $course =  Course::where("university_id", "=", $id)->get();

            $deg= Degree::where('university_id','=', $unv->id)->get();
            $deeg_total = $deg->count();

            $stu= Student::where('university_id','=', $unv->id)->get();
            $stu_total = $stu->count();


            

            $all_degree= Course::select('courses.*', DB::raw('(SELECT COUNT(*) FROM students WHERE students.course_id = courses.id) as student_count'))
            ->where('courses.university_id', $unv->id)
            ->get();
            $cor_total = $all_degree->count();
            // Course::where('university_id','=', $unv->id)->get();


            
            $phd_degrees = Course::select('courses.*', DB::raw('(SELECT COUNT(*) FROM students WHERE students.course_id = courses.id) as student_count'))
            ->where("university_id", "=", $id)
            ->where("course_degree", "=", "PHD")
            ->orderBy('id', 'desc')
            ->get();
        
            $master_degrees = Course::select('courses.*', DB::raw('(SELECT COUNT(*) FROM students WHERE students.course_id = courses.id) as student_count'))
            ->where("university_id", "=", $id)
            ->where("course_degree", "=", "MASTER")
            ->orderBy('id', 'desc')
            ->get();
        
            $bachelor_degrees = Course::select('courses.*', DB::raw('(SELECT COUNT(*) FROM students WHERE students.course_id = courses.id) as student_count'))
            ->where("university_id", "=", $id)
            ->where("course_degree", "=", "BACHELOR")
            ->orderBy('id', 'desc')
            ->get();
        
           $other_degrees = Course::select('courses.*', DB::raw('(SELECT COUNT(*) FROM students WHERE students.course_id = courses.id) as student_count'))
            ->where("university_id", "=", $id)
            ->where("course_degree", "=", "OTHER")
            ->orderBy('id', 'desc')
            ->get();
        

            if($dataFromUrl == 0 || $dataFromUrl == 1){
                $cou = $all_degree;
            }elseif($dataFromUrl == 2){
                $cou = $bachelor_degrees;
            }elseif($dataFromUrl == 3){
                $cou = $master_degrees;
            }elseif($dataFromUrl == 4){
                $cou = $phd_degrees;
            }elseif($dataFromUrl == 5){
                $cou = $other_degrees;
            }
            
             // Total payment
             $commission_total = Commission::with('course')->whereRelation('course','university_id',$request->id)->sum('amount');
             $payment_total = Payment::with('course')->whereRelation('course','university_id',$request->id)->sum('amount');
             $stupaymet_total = Student_Payment::with('course')->whereRelation('course','university_id',$request->id)->sum('amount');

            // Total commission payment

            // Total student payment
            $category = Category::all();

            //this is all commission section
            $commissions = Commission::whereHas('course', function($query) use ($id) {
                $query->where('university_id', $id);
            })->get();
            $sumCom = $commissions->sum('amount');

            //this is the all amount payment section
            $payment = Payment::whereHas('course', function($query) use ($id) {
                $query->where('university_id', $id);
            })->get();
            $sumPay = $payment->sum('amount');

            if($paymentDataFromUrl == 0 || $paymentDataFromUrl == 1){
                $unipayment = $payment;
            }elseif($paymentDataFromUrl == 2){
                $unipayment = $commissions;
            }


            return view('new.UniView',compact('unv','paytype','course','page_main','page','cp','deeg_total','stu_total','cou','cor_total','phd_degrees','master_degrees','bachelor_degrees','other_degrees','stu','commission_total','payment_total','stupaymet_total','category','dataFromUrl','sumCom','sumPay','unipayment','paymentDataFromUrl'));
        }

        //this is for return the edite page with data
        public function edite(Request $request , $id){
            $page_main = "University";
            $page = "Update University";
            $cp = Companyprofile::find(1);
            $unv = University::find($id);
            return view('UniEdite',compact('unv','cp','page_main','page'));
        }


        // this function is used for update the data
        public function update(Request $request){
            //edite validation
            $request->validate([
                'name' => ['required'],
                'email' => ['required'],
                'u_number' => ['required'],
                'ex_number' => ['required'],
                'ex_email' => ['required'],
                'address' => ['required'],
                'remarks' => ['required'],
                'campus_name' => ['required'],

                'arabic_name' => ['required'],
                'arabic_address' => ['required'],
                'arabic_remarks' => ['required'],


                // 'logo' => 'required|mimes:jpg,png,jpeg|max:2048',
                // 'photo' => 'required|mimes:jpg,png,jpeg|max:2048',
            ]);

            $data = University::find($request->id);

            $data->name = $request->name;
            $data->ar_name = $request->arabic_name;
            $data->email = $request->email;
            $data->Unumber = $request->u_number;
            $data->ex_number = $request->ex_number;
            $data->ex_email = $request->ex_email;
            $data->address = $request->address;
            $data->remarks = $request->remarks;
            $data->campus_name = $request->campus_name;

            $data->ar_address = $request->arabic_address;
            $data->ar_remarks = $request->arabic_remarks;


            //Logo image update 
            if($request->file('logo')){
                $request->validate([ 'logo' => 'required|mimes:jpg,png,jpeg|max:2048',]);
                //die(public_path('uploads/'.$data->logo));
                $file = $request->file('logo');
                if($data->logo){
                    if(file_exists(public_path('uploads/'.$data->logo))){
                        unlink(public_path('uploads/'.$data->logo));
                    }
                    
                }
    
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('uploads'),$filename);
                $data['logo'] = $filename;
            }

            //photo image update 
            if($request->file('photo')){
                $request->validate([ 'photo' => 'required|mimes:jpg,png,jpeg|max:2048',]);

                $file = $request->file('photo');
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
            return back()->with('s_success','University Details updated successfully !');
        }

        public function delete_uni(Request $request , $id){
            $data = University::find($id);

            $university = Course::where('university_id','=',$data->id)->first();
            if(!empty($university)){
                return back()->with("info", "You can't delte this University bocz it use in a course ");
            }
            //delte logo
            if(file_exists(public_path('uploads/'.$data->logo))){
                if($data->logo){
                    unlink(public_path('uploads/'.$data->logo));
                }
                }
            //delete photo
            if(file_exists(public_path('uploads/'.$data->photo))){
                if($data->photo){
                    unlink(public_path('uploads/'.$data->photo));
                }
                }

            $data->delete();
            return back()->with('s_success','University Completely deleted successfully !');
        }


}

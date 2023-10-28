<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Models\Student;
use App\Models\Course;
use App\Models\Status;
use App\Models\Student_Payment;
use App\Models\PaymentCategory;
use App\Models\Payment;
use App\Models\Commission;
use App\Models\Companyprofile;
use App\Models\EMGS_Status;
use App\Models\StudentPaymentStatus;
use App\Models\User;
use App\Models\Qualification;
use ZipArchive;
use File;

use App\Models\StudentDoc;


use App\Mail\StatusUpdateEmail;
use App\Mail\WelcomeEmail;
use App\Mail\CustomEmail; 

class StudentController extends Controller
{
    //
    public function index(Request $request){
        $page_main = "Student";
        $page = "Student List";
        $cp = Companyprofile::first();

       //This is for admin data showung section
       if(Auth::user()->hasRole('Admin')){
           //all students
           $students = Student::where('verify','=', 1)->orderby('id','desc')->whereNotIn('archive_status', [1])->get();
           //archive students
           $archive_stu = Student::where('verify','=', 1)->whereNotIn('archive_status', [0])->orderby('id','desc')->get();
       }else{
           //all students for others role
           $students = Student::where('verify','=', 1)->where('refer_to' , '=' , Auth::user()->id)->whereNotIn('archive_status', [1])->orderby('id','desc')->get();
           //all archive students for others 
           $archive_stu = Student::where('verify','=', 1)->where('refer_to' , '=' , Auth::user()->id)->whereNotIn('archive_status', [0])->orderby('id','desc')->get();
       }
        
       //Auth::user()->type define the user type and shoe the list accroding to user ;
        // if(Auth::user()->type == 0){
        //     $students = Student::orderby('id','desc')->whereNotIn('archive_status', [1])->get();
        // }else{
        //     $students = Student::where('entry_id' , '=' , Auth::user()->type)->whereNotIn('archive_status', [1])->orderby('id','desc')->get();
        // }
        //Auth::user()->type define the user type and shoe the list accroding to user ;
        // if(Auth::user()->type == 0){
        //     $archive_stu = Student::orderby('id','desc')->whereNotIn('archive_status', [0])->get();
        // }else{
        //     $archive_stu = Student::where('entry_id' , '=' , Auth::user()->type)->whereNotIn('archive_status', [0])->orderby('id','desc')->get();
        // }


        return view ('new.Student' , compact('students','archive_stu','cp','page_main','page'), ['request' => $request]);
    }

    public function store(Request $request){
        
        $data = Companyprofile::first();

         // inputs validation validation 
         $request->validate([
            'name' => 'required',
            'email' => 'email|unique:students',
            'dob' => 'required',
            'country' => 'required',
            'mobile' => 'required|unique:students,phone',
            'city' => 'required',
            'address' => 'required',
            'status' => 'required',
            // 'age' => 'required',
            'password' => 'required|same:confirm_password|min:4',
            'photo' => 'nullable|mimes:jpg,png,jpeg|max:2048',
        ]);
        //die($request);
         

        //Photo validation & upload 
        if($request->photo != ''){
         $request->validate([ 'photo' => 'required|mimes:jpg,png,jpeg|max:2048',]);
         $Photo = time().'_'.$request->photo->getClientOriginalName().'.'.$request->photo->extension();
         $request->photo->move(public_path('uploads'),$Photo);
         }else{ $Photo = ''; }  

         

        //data insertion 
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'dob' => $request->dob,
            'country' => $request->country,
            'country_code' => $request->pre,
            'phone' => preg_replace('~^[0\D]++|\D++~', '', $request->mobile),
            'passport_no' => $request->passport,
            'city' => $request->city,
            'address' => $request->address,
            'entry_id' => Auth::user()->id,
            'active_status' => $request->status,
            'photo' => $Photo,
            'password' => Hash::make($request->password),
            'pass_text' => $request->password,
        ]);

        // Mail::to($request->email)->send(new WelcomeEmail($data));

        return back()->with('s_success','Student Enquiry created successfully !');
    }

    // this function is for student edite view page return 

    public function edite(Request $request , $id){
        $page_main = "Student";
        $page = "Student Update";
        $cp = Companyprofile::find(1);
        $student = Student::find($id);
        return view('StudentEdite' , compact('student','cp','page','page_main'));
    }


    //this function is student information update section 

      public function update(Request $request){
                   //edite validation
                    $request->validate([
                        'name' => ['required'],
                        'email' => ['required'],
                        'phone' => ['required'],
                        'country' => ['required'],
                        'age' => ['required'],
                        'status' => ['required'],
                        // 'password' => 'required|same:confirm_password|min:4',
                    ]);

                    // if($request->password){
                    //     $request->validate([
                            
                    //     ]);
                    // }
        
                    $data = Student::find($request->id);

                    // if($request->password){

                    //     if (!Hash::check($request->password, $data->password)) {
                    //         return back()->with('warning','Please check the student password , you enter wrong password');
                    //     }
                    //     // $passStu =  Hash::make($request->password);
                    //     // die($passStu);
                    //     // if($passStu == $data->password){
                    //     //     return back()->with('warning','Please check the student password , you enter wrong password');
                    //     // }
                    //     //$data->password = Hash::make($request->password);
                    // }
        
                    $data->name = $request->name;
                    $data->email = $request->email;
                    $data->country_code = $request->pre;
                    $data->phone = preg_replace('~^[0\D]++|\D++~', '', $request->phone);
                    $data->country = $request->country;
                    $data->age = $request->age;
                    $data->active_status = $request->status;
        
        
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
             return redirect()->route('stu')->with('s_success','Student Details updated successfully !');
          }
    
      // THIS SECTION IS FOR DELETE THE INFORMATION 
     public function delete_student(Request $request , $id){
        $data = Student::find($id);
        if($data->course_id == ''){
              //delete photo
           if(file_exists(public_path('uploads/'.$data->photo))){
            if($data->photo){ unlink(public_path('uploads/'.$data->photo)); }
            }
            $data->delete();
            return redirect()->route('stu')->with('s_success','Student Deleted successfully !');
        }else{
            return redirect()->route('stu')->with('info','Cannot delte this student bcoz this student take one course !');
        }
      
     }
     
     
     //THis section is for normal student enquery
     
    public function enq_list(Request $request, $id = 1){
        $page_main = "Student";
        $page = "Enquiry";
        $cp = Companyprofile::first();
        $idFromUrl = $request->route('id', 1);
        // $students;
        
        if(Auth::user()->hasRole('Admin')){
            //this is for rendomly all queris for admin
            $users = User::orderBy('id','desc')->get();
            //this is other student info
            $penstudent= Student::whereNotIn('verify', [1])->orderBy('id','desc')->get();
            $verifystu = Student::whereNotNull('verified_by')->orderBy('id', 'desc')->get();
            $notverifystu = Student::whereNull('verified_by')->orderBy('id', 'desc')->get();
            $referstu = Student::whereNotNull('refer_to')->orderBy('id', 'desc')->get();
            $coursestu = Student::whereNotNull('course_id')->orderBy('id', 'desc')->get();
            $prostu = Student::whereNotIn('process_status', [0])->orderBy('id', 'desc')->get();

            if($idFromUrl == 1){
                $students = $penstudent;
            }elseif($idFromUrl == 2){
                $students = $verifystu;
            }elseif($idFromUrl == 3){
                $students = $notverifystu;
            }elseif($idFromUrl == 4){
                $students = $referstu;
            }elseif($idFromUrl == 5){
                $students = $coursestu;
            }elseif($idFromUrl == 6){
                $students = $prostu;
            }

            // die($students);


            }else{
                //this is for user generated queries that spacefiy a perticular user
             $users = "";
             $students = Student::where('entry_id' , '=' , Auth::user()->id)->whereNotIn('verify', [1])->orderBy('id','desc')->get(); 
            }

         
             
        return view ('new.EnqueryStudent' , compact('idFromUrl','students','penstudent','verifystu','notverifystu','referstu','coursestu','prostu','users','cp','page_main','page'));
         
    }
    //this is the student enquiry filter 
    public function enq_filter(Request $request){
        
               $page_main = "Student";
                $page = "Enquiry";
                $cp = Companyprofile::first();
             
                $date_filter = $request->input('date_filter');
                $verified_filter = $request->input('verified_filter');

                $start_date = $request->input('start_date');
                $end_date = $request->input('end_date');

                
                if (Auth::user()->hasRole('Admin')) {
                    //this is for randomly all queries for admin
                    $query = Student::query()->whereNotIn('verify', [1]);
                    $users = User::orderBy('id', 'DESC')->get();
                    
                      // Check if start_date and end_date are provided
                    if ($start_date && $end_date) {
                        $query->whereBetween('created_at', [$start_date, $end_date]);
                    } else {
                                if ($date_filter == 'today') {
                                    $query->whereDate('created_at', today());
                                } elseif ($date_filter == 'this_week') {
                                    $query->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()]);
                                } elseif ($date_filter == 'this_month') {
                                    $query->whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()]);
                                } 
                       }
                    //end of the checking part
                
                    if ($verified_filter == 'verified') {
                        $query->where('verified_by', '!=', null);
                    } elseif ($verified_filter == 'not_verified') {
                        $query->where('verified_by', null);
                    }
                
                } else {
                    $query = Student::query()->where('entry_id', Auth::user()->id)->whereNotIn('verify', [1]);
                    $users = "";

                    // Check if start_date and end_date are provided
                    if ($start_date && $end_date) {
                        $query->whereBetween('created_at', [$start_date, $end_date]);
                    } else {

                        if ($date_filter == 'today') {
                            $query->whereDate('created_at', today());
                        } elseif ($date_filter == 'this_week') {
                            $query->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()]);
                        } elseif ($date_filter == 'this_month') {
                            $query->whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()]);
                        }
                    } 
                    //end of the part

                    
                    if ($verified_filter == 'verified') {
                        $query->where('verified_by', '!=', null);
                    } elseif ($verified_filter == 'not_verified') {
                        $query->where('verified_by', null);
                    }
                }
                
                $students = $query->get();

            
              return view('EnqueryStudent', compact('students','users','cp','page_main','page'));
       }
       
     // THIS SECTION IS FOR delete the enquiry list
     public function enq_delete_student(Request $request , $id){
        $data = Student::find($id);
        if($data->verified_by == null ){
              //delete photo
           if(file_exists(public_path('uploads/'.$data->photo))){
            if($data->photo){ unlink(public_path('uploads/'.$data->photo)); }
            }
            $data->delete();
            return back()->with('warning','Enquiry Deleted successfully !');
        }else{
            return back()->with('info','Cannot delete this enquiry bcoz this student is varified !');
        }
      
     }
     
     //student verify function 
     public function stu_verify(Request $request , $sid, $id){
         
         $student = Student::find($sid);
         $student->verified_by = $id;
         $student->save();
         return back()->with('s_success','student verified successfully !');
     }
     //student refer function
     public function stu_refer(Request $request){
         $student = Student::find($request->student_id);
         if($student->verified_by){
           $student->refer_to = $request->users;
           $student->verify = 1;
           $student->save();
           return back()->with('s_success','student refered successfully for that user !');
         }else{
             return back()->with('warning','Please verify the student first');
         }
     }
     
     //Students enquery ends 
    
    //THIS SECTION IS RETURN THE VIEW TEMPLATES 
    public function stu_view(Request $request , $id){
        $page_main = "Student";
        $page = "Student Profile";
        $cp = Companyprofile::find(1);

        $student = Student::find($id);
        $course = Student::where("id", "=", $id)->with('courses')->get();

        $student_payments =  Payment::where('student_id','=',$id)->get();
        $payment_sum =  Payment::where('student_id','=',$id)->sum('amount');

        $student_commission = Commission::where('student_id','=',$id)->get();
        $commission_sum =  Commission::where('student_id','=',$id)->sum('amount');

        $stu_payment = Student_Payment::where('student_id','=',$id)->get();
        $student_pay_sum = Student_Payment::where('student_id','=',$id)->sum('amount');
        //die($student_payments);
        $student_doc = StudentDoc::where("student_id", "=", $id)->get();

        //qualification
        $student_qua = Qualification::where("student_id", "=", $id)->get();

        $courses_suggested = Student::find($id)->courses;
        //payment category
        $paytype = PaymentCategory::all();
        //end of the payment category

             //This section is for student status figureout in persantage
            
            // Get all available statuses
            $statuses = Status::pluck('status')->toArray();

            // Calculate completion percentage
            if ($student->status_id != null) {
                $statusIndex = array_search($student->status->status, $statuses);
                $due_state = round(($statusIndex + 1) / count($statuses) * 100);
            } else {
                $due_state = 0;
            }
            $due_state = filter_var($due_state, FILTER_SANITIZE_NUMBER_INT);

        //This section is for student emgs status figureout in persantage

           // Get all available emergency statuses
                $emgStatuses = EMGS_Status::pluck('status')->toArray();

                // Calculate emergency completion percentage
                if ($student->emg_status != null) {
                    $emgStatusIndex = array_search($student->emgs->status, $emgStatuses);
                    $emg_state = round(($emgStatusIndex + 1) / count($emgStatuses) * 100);
                } else {
                    $emg_state = 0;
                }
                // Sanitize and filter the result
                $emg_state = filter_var($emg_state, FILTER_SANITIZE_NUMBER_INT);
        
        //End of the EMGS status section
        
        //This section is for student payment status figureout in persantage

           // Get all available emergency statuses
           $paymentStatuses = StudentPaymentStatus::pluck('status')->toArray();
           // Calculate emergency completion percentage
           if ($student->payment_status != null && $student->payment != null) {
               $paymentStatusIndex = array_search($student->payment->status, $paymentStatuses);
               $payment_state = round(($paymentStatusIndex + 1) / count($paymentStatuses) * 100);
           } else {
               $payment_state = 0;
           }
           // Sanitize and filter the result
           $payment_state = filter_var($payment_state, FILTER_SANITIZE_NUMBER_INT);
   
        //End of the payment status section
        
        return view('new.StudentView' , compact('student','course','cp','student_payments','payment_sum','commission_sum','student_pay_sum','stu_payment','student_commission','page_main','page','student_doc','paytype','due_state','emg_state','payment_state','student_qua','courses_suggested'));
    }

    //this is the qualification section
    public function quaifi_store(Request $request){

        $data= new Qualification;

        $data->student_id = $request->id;
        $data->qualification = $request->qualification;
        $data->year = $request->year;
        $data->cgpa = $request->cgpa;
        $data->board = $request->board;
        $data->entry_id = Auth::user()->id;
        $data->save();
        
        return back();

    }
    //end of the section
    //delete the qualification 
    public function quaifi_delete(Request $request , $id){
        Qualification::where("id", "=", $id)->delete();
        return back();
    }

    //end of the qualification

    //THIS SECTION IS FOR STUDENT SEARCH SECTION 
    public function course_search(Request $request){
        $input = $_POST['input'];
        $filterData = Course::where('name','LIKE',"%{$input}%")->get();
        return response()->json([
            'filterData' => $filterData,
        ]);

    }

    //THIS SECTION IS FOR PROVIDE COURSE TO STUDENT
    public function course_add(Request $request){
        $s_id = $request->input('student');
        $c_id = $request->input('course');
        // Retrieve the display_id from the form

        $student = Student::find($s_id);
        $student->courses()->attach($c_id);

        // Now you can use $display_id for any further processing or return it if needed
        // ...
        return back();
    }

    public function course_remove(Request $request){
        $s_id = $request->input('student');
        $c_id = $request->input('course');
        $student = Student::find($s_id);
       
        $student->courses()->detach($c_id);
        //return redirect()->route('stu')->with('s_success','Student Couse Addedd successfully !');
        return back();
    }

    //THIS IS ANOTHER FUNCTION FOR STUDENT COURSE VIEW SECTION 
     public function course_student_view(Request $request , $id){
        $stu = Student::find($id)->courses;
        return response()->json([
            'data' => $stu,
        ]);
     }  


     //THIS IS FOE STUDENT PROCESS
     public function student_process(Request $request , $id){
            $course = Student::find($id);
          
            if(!empty($course->course_id)){
               $course->process_status = 1;
               $course->save();
               return redirect()->route('view.stu' , $id)->with('s_success','Student go for process successfully !');
             }else{
                return redirect()->route('view.stu' , $id)->with('info','Student must have select any course !');
             }
           
      }
    
    //THIS IS FOR STUDENT APPLICANT PROCESS
    public function applicant_process(){
        $page_main = "Applicant process";
        $page = "Student List";
        $cp = Companyprofile::find(1);
        if(Auth::user()->hasRole('Admin')){
        $student = Student::where("process_status", "=", 1)->orderby('id','desc')->get();
        }else{
        $student = Student::where('refer_to' , '=' , Auth::user()->id)->where("process_status", "=", 1)->orderby('id','desc')->get();    
        }
        return view('ApplicantProcess' , compact('student','cp','page','page_main'));
    }

    //THIS IS FOR APPLICAN STATUS  VIEW PARTS
    public function change_status(Request $request , $id){
        $page_main = "Applicant process";
        $page = "Status update";
        $cp = Companyprofile::first();
        $student = Student::find($id);
        $status = Status::all();
        $emg_status = EMGS_Status::all();
        $payment_status = StudentPaymentStatus::all();
        return view('ApplicantProcessView' , compact('student','status','emg_status','payment_status','cp','page','page_main'));
    }

    //THIS SECTION IS FOR UPDATE THE STATUS SECTION 

    public function update_status(Request $request){
        $student = Student::find($request->student_id);
        $student->status_id = $request->status;
        $student->save();
        
        $data = Companyprofile::first();
        
        if(!Mail::to($student->email)->send(new StatusUpdateEmail($data))){
            return back()->with('error','something wrong');
        }
        
        return redirect()->route('applicant.process')->with('s_success','Student status was changed successfully  !');
    }
    
    
    //Update the EMGS status
        public function update_emgs(Request $request){
            $student = Student::find($request->student_id);
            $student->emg_status = $request->status;
            
            $student->save();
            $data = Companyprofile::first();
            Mail::to($student->email)->send(new StatusUpdateEmail($data));
            return redirect()->back()->with('s_success','Student EMGS Status updated successfully  !');
        }
    
    // payment status update 
        public function update_payment(Request $request){
            $student = Student::find($request->student_id);
            $student->payment_status = $request->status;
            
            $student->save();
            $data = Companyprofile::first();
            // Mail::to($student->email)->send(new StatusUpdateEmail($data));
            return redirect()->back()->with('s_success','Student Payment Status updated successfully  !');
        }
    
       //Student archive function 
        public function student_archive(Request $request , $id){
            $student = Student::find($id);
            $student->archive_status = 1;
            $student->save();
            return back()->with('s_success','Student Archived successfully  !');
        }
        //student remoe from the archive list 
        public function archive_remove(Request $request , $id){
            $student = Student::find($id);
            $student->archive_status = 0;
            $student->save();
            return back()->with('info','Student remove from archive list  !');
        }
    
    
    
    //This section is for download single single documents
        public function docdelete(Request $request , $id){

            // $student =  Student::find($id); 
            $file =  StudentDoc::where('student_id','=',$id)->get(); 
            // dd($file);
            foreach($file as $data){
                if(file_exists(public_path('documents/'.$data->name))){
                unlink(public_path('documents/'.$data->name));
                }
                
             $doc =  StudentDoc::where('student_id','=',$data->student_id)->delete();
            }

            // die('Its works');
            // $student->doc = '';
            // $student->save();
            return back()->with("s_success", "Document deleted successfully ! ");

        }
    //end of the section

    //Document download single single
     public function SingleDownload(Request $request , $id){
        $fileNm = StudentDoc::where('requirement_id','=',$id)->first();
        return response()->download(public_path('documents/'.$fileNm->name));
    }

    //End of the document download single single

    //this section for download all the zip file    
    public function docdownload(Request $request , $id){
        
        /////
        $student =  Student::find($id); 
        $file =  StudentDoc::where('student_id','=',$id)->get(); 
        // $file=json_decode($student->doc);
       // dd($file);
            $imgarr=[];
            foreach($file as $data){

                $file =  public_path() . '/documents/'.$data->name;

                if(\File::exists(public_path('documents/'.$data->name))){
                $imgarr[]= public_path('documents/'.$data->name);
                }

            }

        $zip = new ZipArchive;
        $fileName = $student->name.'Documents.zip';
   
        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE)
        {
        	// Folder files to zip and download
        	// files folder must be existing to your public folder
            //$files = File::files(public_path('documents'));
   			 $files = $imgarr; 
   			// loop the files result
            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }
             
            $zip->close();
        }
    	
    	// Download the generated zip
        return response()->download(public_path($fileName));
        /////
    
    }
    //end of the the download zip file section
     //end of the the download zip file section
    public function stu_pay_slip_download(Request $request , $id){
        $fileNm = Payment::find($id);
        return response()->download(public_path('uploads/'.$fileNm->pay_slip));
    }

    //commsions slip download
    public function stu_com_pay_slip_download(Request $request , $id){
        $fileNm = Commission::find($id);
        return response()->download(public_path('uploads/'.$fileNm->pay_slip));
    }

  //student direct payment slip download
   public function stu_payment_slip_download(Request $request , $id){
    $fileNm = Student_Payment::find($id);
    return response()->download(public_path('uploads/'.$fileNm->pay_slip));
   }

 //this is the section for which we send the email to student
   public function sendEmail(Request $request){
    $data = Companyprofile::first();
    $subject = $request->input('subject');
    $message = $request->input('message');
    $recipientEmail = $request->input('recipientEmail'); // Add this input to your modal form
    
    // Use your custom email class to send the email
    Mail::to($recipientEmail)->send(new CustomEmail($subject, $message, $data));

    return response()->json(['message' => 'Email sent successfully']);
  }


}

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
use App\Models\Activity;

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

        $editId = $request->input('editId');
        $student = Student::find($editId);
        
                // Update inputs validation
                $request->validate([
                    'name' => 'required',
                    'email' => 'email|unique:students,email,' . $student->id,
                    'dob' => 'required',
                    'country' => 'required',
                    'mobile' => 'required|unique:students,phone,' . $student->id,
                    'city' => 'required',
                    'address' => 'required',
                    'status' => 'required',
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

                // Password update, only if a new password is provided
                $password = $student->password;
                if ($request->password) {
                    $request->validate([
                        'password' => 'required|same:confirm_password|min:4',
                    ]);
                    $password = Hash::make($request->password);
                } else {
                    // If no new password is provided, keep the existing password
                    $password = $student->password;
                }

                // Data update
                $student->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'dob' => $request->dob,
                    'country' => $request->country,
                    'country_code' => $request->pre,
                    'phone' => preg_replace('~^[0\D]++|\D++~', '', $request->mobile),
                    'passport_no' => $request->passport,
                    'city' => $request->city,
                    'address' => $request->address,
                    'active_status' => $request->status,
                    'photo' => $photo,
                    'password' => $password,
                    'pass_text' => $request->password ? $request->password : $student->pass_text,
                ]);

                return back()->with('s_success', 'Student information updated successfully!');

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

        //get all activities 
        $activitiies = Activity::where("student_id", "=", $id)->get();

        $status = Status::orderby('id','asc')->get(); 
        $emgsstatus = EMGS_Status::orderby('id','asc')->get(); 
        $paymentstatus = StudentPaymentStatus::orderby('id','asc')->get();
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
        
        return view('new.StudentView' , compact('student','course','cp','student_payments','payment_sum','commission_sum','student_pay_sum','stu_payment','student_commission','page_main','page','student_doc','paytype','due_state','emg_state','payment_state','student_qua','courses_suggested','status','emgsstatus','paymentstatus','activitiies'));
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
               return back()->with(['s_success'=>'Student go for process successfully !', 'active_tab' => 2]);
             }else{
                return back()->with(['info'=>'Student must have select any course !','active_tab' => 2]);
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
        
        // $data = Companyprofile::first();
        
        // if(!Mail::to($student->email)->send(new StatusUpdateEmail($data))){
        //     return back()->with('error','something wrong');
        // }
        
        return back()->with([ 's_success' => 'Student status was changed successfully  !', 'active_tab' => 2]);
    }
    
    
    //Update the EMGS status
        public function update_emgs(Request $request){
            $student = Student::find($request->student_id);
            $student->emg_status = $request->status;
            
            $student->save();
            // $data = Companyprofile::first();
            // Mail::to($student->email)->send(new StatusUpdateEmail($data));
            return back()->with([ 's_success' => 'Student EMGS status was changed successfully  !', 'active_tab' => 2]);
        }
    
    // payment status update 
        public function update_payment(Request $request){
            $student = Student::find($request->student_id);
            $student->payment_status = $request->status;
            $student->save();

            // $data = Companyprofile::first();
            // Mail::to($student->email)->send(new StatusUpdateEmail($data));
            return back()->with([ 's_success' => 'Student payment status was changed successfully  !', 'active_tab' => 2]);
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

    //this is the single doucment delete part 

    public function SingleDocDelete(Request $request, $id) {
        // Find the document by requirement_id
        $document = StudentDoc::where('requirement_id', $id)->first();
    
        if ($document) {
            // Check if the file exists
            if (file_exists(public_path('documents/' . $document->name))) {
                unlink(public_path('documents/' . $document->name));
            }
    
            // Delete the document record
            $document->delete();
    
            return back()->with(["s_success"=>"Document deleted successfully!", 'active_tab' => 4]);
        } else {
            return back()->with(["info"=>"Document not found or could not be deleted.",'active_tab' => 4]);
        }
    }
    
    //End of the document download single single

    //this is the activity add section for student 

    public function activity_add(Request $request){

       // Create a new Activity instance
        $activity = new Activity();

        // Set the fields from the request data
        $activity->type = $request->input('type');
        $activity->status = $request->input('status');
        $activity->description = $request->input('description');
        $activity->reminder = $request->input('reminder');
        $activity->reminder_date = $request->input('reminder_date');
        $activity->reminder_time = $request->input('reminder_time');
        $activity->student_id = $request->input('student_id');
         // Check if 'assign_to' exists in the request before setting it
        if ($request->has('assign_to')) {
            $activity->assign_to = $request->input('assign_to');
        }

        // Save the Activity instance to the database
        $activity->save();

        // Mail::to($request->email)->send(new WelcomeEmail($data));

        return back()->with(['s_success'=>'Activity stored successfully.', 'active_tab' => 5]);
    }

    //end of the activity section of student 

    //this section for download all the zip file    
    public function docdownload(Request $request, $id) {
        $student = Student::find($id);
        $documents = StudentDoc::where('student_id', $id)->get();
    
        if ($documents->isEmpty()) {
            return back()->with("info", "No documents found for this student.");
        }
    
        $zip = new ZipArchive;
        $zipFileName = $student->name . 'Documents.zip';
        
        if ($zip->open(public_path($zipFileName), ZipArchive::CREATE) === TRUE) {
            foreach ($documents as $document) {
                $filePath = public_path('documents/' . $document->name);
    
                if (\File::exists($filePath)) {
                    $zip->addFile($filePath, $document->name);
                }
            }
            $zip->close();
        }
    
        return response()->download(public_path($zipFileName))->deleteFileAfterSend(true);
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


     //this section is for setting notification
    public function set_notification(Request $request){
        $data = Student::find($request->id);
        $data->notify = $request->msg;
        $data->save();
        return back()->with('s_success','Notification set successfully !');
    }
    //end of the notification

    //delete notification
        public function delete_notification(Request $request , $id){
            $data = Student::find($id);
            $data->notify ='';
            $data->save();
            return back()->with('s_success','Notification deleted successfully !');
        }
    //delete notification end



    //this is the sectionfor the process students 

    public function process_stu(){
        $page_main = "Student";
        $page = "Student List";
        $cp = Companyprofile::first();

        $students = Student::where('process_status','=', 1)->orderby('id','desc')->get();

        //processing status 
        $status = Status::all();
        //EMGS status 
        $emgs_status = EMGS_Status::all();
        //Payment status
        $payment_status = StudentPaymentStatus::all();


        return view('new.ProcessedStu', compact('students','status','emgs_status','payment_status','page_main','page','cp'));
    }

    //this is the information all about the fetch processed student information 
    public function fetchstuRecord($id){

        $record = Student::find($id);
        $status = $record->status ? $record->status->id : null;
        $emgs = $record->emgs ? $record->emgs->id : null;
        $payment_status = $record->studentPaymentStatus ? $record->studentPaymentStatus->id : null;        
        return response()->json(['success' => true, 'student' => $record, 'status' => $status , 'emgs' => $emgs , 'payment_status' => $payment_status ]);
    }

    //this is function for status changes 

    public function process_status(Request $request){

        $data = Student::find($request->studentId);
        $data->status_id = $request->p_status ?? null;
        $data->emg_status = $request->emgs_status ?? null;
        $data->payment_status = $request->payment_status ?? null;

        $data->save();

        return back()->with(['s_success'=>'All status saved successfully.']);

    }


}

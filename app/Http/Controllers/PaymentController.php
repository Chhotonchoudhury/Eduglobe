<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Commission;
use App\Models\Student_Payment;
use App\Models\PaymentCategory;
use App\Models\Course;
use App\Models\Student;
use App\Models\Companyprofile;

class PaymentController extends Controller
{
    //
    public function payment(Request $request){

        // $payment = $request->validate([
        //     'type' => ['required'],
        //     'course_name' => ['required'],
        //     'student' => ['required'],
        //     'amount' => ['required'],
        //     'pay_slip' => 'required|mimes:jpg,png,jpeg|max:2048',
        // ]);

         //working with image
        //  if($request->pay_slip){
        //     $file = $request->pay_slip;
        //     $ex = $request->pay_slip->extension();
        //     $filename = time(). '.' .$ex;
        //     $file->move(public_path('uploads'),$filename);
        // }
       if($request->paymentRole != 2){
            $txn = uniqid();
            Payment::create([
                'type'   => $request->type,
                'txn_id' => $txn,
                'course_id' => $request->course,
                'student_id' =>	$request->student,
                'amount' => $request->amount,
                // 'pay_slip' => $filename,
                'entry_id'=> auth()->user()->id,
            ]);
            return back()->with('s_success','university payment done successfully !');
       }else{
            $txn = uniqid();
            Commission::create([
                'type'   => $request->type,
                'txn_id' => $txn,
                'course_id' => $request->course,
                'student_id' =>	$request->student,
                'amount' => $request->amount,
                // 'pay_slip' => $filename,
                'entry_id'=> auth()->user()->id,
            ]);
            return back()->with('s_success','Commission payment done successfully !');
       }     
        
    }

    public function paymentview(){
        $page_main = "Payment";
        $page = "Payment List";
        $cp = Companyprofile::find(1);

        $payments =  Payment::orderby('id','desc')->get();
        return view('PaymentList', compact('payments','cp','page_main','page'));
    }


    public function paymentedite(Request $request , $id){
        $page_main = "Payment";
        $page = "Payment Edite";
        $cp = Companyprofile::find(1);


        $payment = Payment::find($id);
        $paytype = PaymentCategory::all();
        $uni_id = Course::find($payment->course_id);
        $course =  Course::where("university_id", "=", $uni_id->university_id)->get();
        return view('PaymentUpdate',compact('payment','paytype','course','cp','page_main','page'));
    }

    public function paymentupdate(Request $request){

            // $request->validate([
            //     'type' => ['required'],
            //     'course' => ['required'],
            //     'student' => ['required'],
            //     'amount' => ['required'],
            // ]);

            if($request->paymentRole != 2){

                $pay = Payment::find($request->id);
                $pay->type  = $request->type;
                $pay->amount = $request->amount;
                $pay->save();
                return back()->with('s_success','University Payment Updated successfully !');

            }else{

                $pay = Commission::find($request->id);
                $pay->type  = $request->type;
                $pay->amount = $request->amount;
                $pay->save();
                return back()->with('s_success','Commission Payment Updated successfully !');

            }
            

          
            
           
          
        
    }

    public function paymentdelete(Request $request , $id){
        $pay = Payment::find($id);
        // if($pay->pay_slip){
        //     if(file_exists(public_path('uploads/'.$pay->pay_slip))){
        //      unlink(public_path('uploads/'.$pay->pay_slip));
        //     }
        //  }
        $pay->delete();
        return back()->with('s_success','Payment record deleted successfully !');
    }


    public function commission(Request $request){
        $payment = $request->validate([
            'com_type' => ['required'],
            'com_course' => ['required'],
            'com_student' => ['required'],
            'com_amount' => ['required'],
            'com_pay_slip' => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);

         //working with image
         if($request->com_pay_slip){
            $file = $request->com_pay_slip;
            $ex = $request->com_pay_slip->extension();
            $filename = time(). '.' .$ex;
            $file->move(public_path('uploads'),$filename);
        }

        $txn = uniqid();
        Commission::create([
            'type'   => $request->com_type,
            'txn_id' => $txn,
            'course_id' => $request->com_course,
            'student_id' =>	$request->com_student,
            'amount' => $request->com_amount,
            'pay_slip' => $filename,
            'entry_id'=> auth()->user()->id,
          ]);
     return back()->with('s_success','Commission Payment Done successfully !');
    }

    public function commissionview(){
        $page_main = "Commission";
        $page = "Commissions List";
        $cp = Companyprofile::find(1);

        $payments =  Commission::orderby('id','desc')->get();
        return view('CommissionList', compact('payments','cp','page_main','page'));
    }

    public function commissionedite(Request $request , $id){
        $page_main = "Commission";
        $page = "Commission Update";
        $cp = Companyprofile::find(1);

        $paytype = PaymentCategory::all();
        $payment = Commission::find($id);
        $uni_id = Course::find($payment->course_id);
        $course =  Course::where("university_id", "=", $uni_id->university_id)->get();
        return view('CommissionUpdate',compact('payment','paytype','cp','course','page_main','page'));
    }

    public function commissionupdate(Request $request){

        $request->validate([
            'type' => ['required'],
            'course' => ['required'],
            'student' => ['required'],
            'amount' => ['required'],
        ]);

        $pay = Commission::find($request->id);

        if($request->file('pay_slip')){
            $request->validate([ 'pay_slip' => 'required|mimes:jpg,png,jpeg|max:2048',]);
            //die(public_path('uploads/'.$course->photo));
            $file = $request->file('pay_slip');
            if($pay->pay_slip){
               if(file_exists(public_path('uploads/'.$pay->pay_slip))){
                unlink(public_path('uploads/'.$pay->pay_slip));
               }
            }
            $ex = $file->extension();
            $filename = time(). '.' .$ex;
            $file->move(public_path('uploads'),$filename);
            $pay->pay_slip = $filename;
          }
            $pay->type = $request->type;
            $pay->course_id = $request->course;
            $pay->student_id =	$request->stud_id;
            $pay->amount = $request->amount;

            $pay->save();

        return back()->with('s_success','Commission payment  updated successfully !');
    }

    public function commissiondelete(Request $request , $id){
        $pay = Commission::find($id);
        // if($pay->pay_slip){
        //     if(file_exists(public_path('uploads/'.$pay->pay_slip))){
        //      unlink(public_path('uploads/'.$pay->pay_slip));
        //     }
        //  }
        $pay->delete();
        return back()->with('s_success','Commission Payment deleted successfully!');
    }


    //this section is for student payment section

    public function student_pay(Request $request){
        $request->validate([
            'amount' => ['required'],
            'type' => ['required'],
            'pay_slip' => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);

        $student = Student::find($request->stu_id);
        if(empty($student->course_id)){
            return back()->with('info','Before studnt pay , student must accept a course');
        }else{

        //working with image
         if($request->pay_slip){
            $file = $request->pay_slip;
            $ex = $request->pay_slip->extension();
            $filename = time(). '.' .$ex;
            $file->move(public_path('uploads'),$filename);
          }

            $txn = uniqid();
            Student_Payment::create([
            'type'   => $request->type,
            'txn_id' => $txn,
            'course_id' => $student->course_id,
            'student_id' =>	$request->stu_id,
            'amount' => $request->amount,
            'pay_slip' => $filename,
            'entry_id'=> auth()->user()->id,
            ]);
            return back()->with('s_success','Payment Done successfully !');
        }
    }

    public function student_pay_view(){
        $page_main = "Student";
        $page = "Payments List";
        $cp = Companyprofile::find(1);

        $payments =  Student_Payment::orderby('id','desc')->get();
        return view('StuPaymentList', compact('payments','cp','page_main','page'));
    }

    public function student_pay_edite(Request $request , $id){
        $page_main = "Student";
        $page = "Payment Update";
        $cp = Companyprofile::find(1);
        $paytype = PaymentCategory::all();

        $payment = Student_Payment::find($id);
        return view('StuPaymentUpdate',compact('payment','paytype','cp','page_main','page'));
    }

    public function student_pay_update(Request $request){

        $request->validate([
            'amount' => ['required'],
            'type' => ['required'],
        ]);

        $pay = Student_Payment::find($request->id);

        if($request->file('pay_slip')){
            $request->validate([ 'pay_slip' => 'required|mimes:jpg,png,jpeg|max:2048',]);
            //die(public_path('uploads/'.$course->photo));
            $file = $request->file('pay_slip');
            if($pay->pay_slip){
               if(file_exists(public_path('uploads/'.$pay->pay_slip))){
                unlink(public_path('uploads/'.$pay->pay_slip));
               }
            }
            $ex = $file->extension();
            $filename = time(). '.' .$ex;
            $file->move(public_path('uploads'),$filename);
            $pay->pay_slip = $filename;
          }


        $pay->type =	$request->type;
        $pay->amount = $request->amount;

        $pay->save();

        return back()->with('s_success','Student payment Updated successfully !');
    }

    public function student_pay_delete(Request $request , $id){
        $pay = Student_Payment::find($id);
        if($pay->pay_slip){
            if(file_exists(public_path('uploads/'.$pay->pay_slip))){
             unlink(public_path('uploads/'.$pay->pay_slip));
            }
         }
        $pay->delete();
        return back()->with('s_success','Student Payment record deleted successfully !');
    }
    
    //ajax student payment info
    public function student_info(){
        $id = $_GET['id'];
        // $u_info = Student::where('course_id', '=', $id)->get();

        //Total student payment 
        $response['payment'] =Payment::where('student_id','=',$id)->get()->sum('amount');

        //student direct payment
        $response['stu_payment'] =Student_Payment::where('student_id','=',$id)->get()->sum('amount');

        //student commission
        $response['stu_com'] =Commission::where('student_id','=',$id)->get()->sum('amount');
        //student ifo
        $response['student'] = Student::find($id);

      return response()->json($response);
    }
    //ajax payment info end


    ///this is ajax method for get the payment info update
    public function studentUpdate_info(){
        $id = $_GET['id'];

        $type = $_GET['type'];
        // $u_info = Student::where('course_id', '=', $id)->get();

        if($type !=2 ){
            $response['data'] = Payment::find($id);
            $row = Payment::find($id);
        }else{
            $response['data'] = Commission::find($id);
            $row = Commission::find($id);
        }   
        
        //Total student payment 
        $response['payment'] =Payment::where('student_id','=',$row->student_id)->get()->sum('amount');

        //student direct payment
        $response['stu_payment'] =Student_Payment::where('student_id','=',$row->student_id)->get()->sum('amount');

        //student commission
        $response['stu_com'] =Commission::where('student_id','=',$row->student_id)->get()->sum('amount');
        //student ifo
        $response['student'] = Student::find($row->student_id);

      return response()->json($response);
    }

    

}

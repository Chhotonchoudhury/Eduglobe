<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\University;
use App\Models\Course;
use App\Models\Student;
use App\Models\Degree;

use App\Models\Payment;
use App\Models\Commission;
use App\Models\Student_Payment;
use App\Models\PaymentCategory;
use App\Models\Companyprofile;
use Carbon\Carbon;

class ReportsController extends Controller
{
    //
    public function Index(){
        $page_main = "Report";
        $page = "Reports";
        $cp = Companyprofile::find(1);
        $universites = University::all();
        return view('reports.Reports', compact('page_main','page','cp','universites'));
    }

    public function search_fun(Request $request){

        $data = [ 'id' => $request->id,'s_date' => $request->s_date,'e_date' => $request->e_date, ];
        $university = University::find($request->id);
        $courses = Course::whereBetween('created_at', [$request->s_date, $request->e_date])->where('university_id','=', $request->id)->get();
        $course_total = $courses->count();

        $student = Student::whereBetween('created_at', [$request->s_date, $request->e_date])->where('university_id','=', $request->id)->get();
        $student_total = $student->count();

        $commission_total = Commission::whereBetween('created_at', [$request->s_date, $request->e_date])->with('course')->whereRelation('course','university_id',$request->id)->sum('amount');
        $payment_total = Payment::whereBetween('created_at', [$request->s_date, $request->e_date])->with('course')->whereRelation('course','university_id',$request->id)->sum('amount');
        $studentPayment_total = Student_Payment::whereBetween('created_at', [$request->s_date, $request->e_date])->with('course')->whereRelation('course','university_id',$request->id)->sum('amount');

        $degree = Degree::where('university_id','=', $request->id)->get();
        $degree_total = $degree->count();


        return response()->json([
            'university' => $university,
            'course_total' => $course_total,
            'student_total' => $student_total,
            'commission_total' => $commission_total,
            'payment_total'  => $payment_total,
            'studentPayment_total' => $studentPayment_total,
            'degree_total' => $degree_total,
            'data' => $data
        ]);
        
    }


    public function report_result(Request $request, $id, $s_date , $e_date){
        $page_main = "Report";
        $page = "Reports";
        $cp = Companyprofile::find(1);

        $universites = University::all();
        $id = $request->id;
        $s_date = $request->s_date;
        $e_date = $request->e_date;
        return view('reports.Reports', compact('page_main','page','cp','universites','id','s_date','e_date'));
    }
    
    public function student_report(Request $request, $id, $s_date , $e_date){
        // $id = $id;
        // $s_date = $s_date;
        // $e_date = $e_date;

        $page_main = "Report";
        $page = "Students";
        $cp = Companyprofile::find(1);

        $university = University::find($id);

        $stu_report = Student::whereBetween('created_at', [$s_date, $e_date])->where('university_id','=', $id)->get();
        $stu_total = $stu_report->count();
        return view('reports.student',compact('stu_report','id','s_date','e_date','university','stu_total','cp','page','page_main'));
        //die($stu_repot);
    }


    public function course_report(Request $request, $id, $s_date , $e_date){
        $page_main = "Report";
        $page = "Courses";
        $cp = Companyprofile::find(1);
        $university = University::find($id);

        $course_report = Course::whereBetween('created_at', [$s_date, $e_date])->where('university_id','=', $id)->get();
        $course_total = $course_report->count();
        return view('reports.course',compact('course_report','id','s_date','e_date','university','course_total','cp','page','page_main'));
    }


    public function degree_report(Request $request, $id, $s_date , $e_date){
        $page_main = "Report";
        $page = "Degrees";
        $cp = Companyprofile::find(1);
        $university = University::find($id);

        $degree_report = Degree::whereBetween('created_at', [$s_date, $e_date])->where('university_id','=', $id)->get();
        $degree_total = $degree_report->count();
        return view('reports.degree',compact('degree_report','id','s_date','e_date','university','degree_total','cp','page','page_main'));
    }

    public function commission_report(Request $request, $id, $s_date , $e_date){
        $page_main = "Report";
        $page = "Commissions";
        $cp = Companyprofile::find(1);
        $university = University::find($id);

        $commission_report = Commission::whereBetween('created_at', [$request->s_date, $request->e_date])->with('course')->whereRelation('course','university_id',$request->id)->get();
        $commission_total = Commission::whereBetween('created_at', [$request->s_date, $request->e_date])->with('course')->whereRelation('course','university_id',$request->id)->sum('amount');
        return view('reports.commission',compact('commission_report','id','s_date','e_date','university','commission_total','cp','page','page_main'));
    }

    public function payment_report(Request $request, $id, $s_date , $e_date){
        $page_main = "Report";
        $page = "Payments";
        $cp = Companyprofile::find(1);
        $university = University::find($id);

        $payment_report = Payment::whereBetween('created_at', [$request->s_date, $request->e_date])->with('course')->whereRelation('course','university_id',$request->id)->get();
        $payment_total = Payment::whereBetween('created_at', [$request->s_date, $request->e_date])->with('course')->whereRelation('course','university_id',$request->id)->sum('amount');
        return view('reports.payment',compact('payment_report','id','s_date','e_date','university','payment_total','cp','page','page_main'));
    }


    public function studentPayment_report(Request $request, $id, $s_date , $e_date){
        $page_main = "Report";
        $page = "Student payment";
        $cp = Companyprofile::find(1);
        $university = University::find($id);

        $stupaymet_report = Student_Payment::whereBetween('created_at', [$request->s_date, $request->e_date])->with('course')->whereRelation('course','university_id',$request->id)->get();
        $stupaymet_total = Student_Payment::whereBetween('created_at', [$request->s_date, $request->e_date])->with('course')->whereRelation('course','university_id',$request->id)->sum('amount');
        return view('reports.StudentPayment',compact('stupaymet_report','id','s_date','e_date','university','stupaymet_total','cp','page','page_main'));
    }

 
}

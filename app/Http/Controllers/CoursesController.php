<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;
use App\Models\University;
use App\Models\File_pdf;
use PDF;
use Response;
use App\Models\Course_requirement;
use App\Models\Companyprofile;

use Auth;
class CoursesController extends Controller
{
    //
    public function index(){
        
        $page_main = "Courses";
        $page = "Courses List";
        $cp = Companyprofile::find(1);

        $courses = Course::latest()->paginate(5);
        return view('student.courses' , compact('courses','page','cp','page_main'));
    }

    public function show(Request $request , $id){
        
        $page_main = "Courses";
        $page = "Courses Detail";
        $cp = Companyprofile::find(1);

        $student = Student::find(Auth::guard('student')->user()->id);
        $course = Course::find($id);
        $course_req = Course_requirement::where('course_id','=', $id)->get();
        $pdf = File_pdf::where('course_id','=', $id)->first();

        return view('student.courseview' , compact('page_main','page','cp','course','course_req','student','pdf') );
    }

    //this section is for courses sugession section 

    public function suggetion_course(){
        $cp = Companyprofile::find(1);
        $courses =  Student::find(Auth::guard('student')->user()->id)->courses;

        //dd($courses);
        $page_main = "Courses";
        $page = "Courses Suggetion";

        return view('student.s_courses', compact('page_main','page','cp','courses'));
    }

    //pagination function
      public function pagination(Request $request){
        $courses = Course::latest()->paginate(5);
        return view('student.pagination_course' , compact('courses'))->render();
      }
    //end of the pagination function

    //courses search section for 
        public function search(Request $request){
            $page_main = "Courses";
            $page = "Courses List";

            $courses = Course::where('name','like','%'.$request->search_string.'%')
            ->orwhere('fess','like','%'.$request->search_string.'%')
            ->orderBy('id','desc')
            ->paginate(5);

            if($courses->count() >= 1){
                return view('student.pagination_course' , compact('courses'))->render();
            }else{
                return response()->json([
                    'status' => 'Nothing_Found',
                ]);
            }
        }
    //end of the section

    //this function is for courses approve function

    public function course_approve(Request $request){

        $student = Student::find(Auth::guard('student')->user()->id);
        $uni = Course::find($request->course_id);
        $student->course_id = $request->course_id;
        $student->university_id = $uni->university_id;
        $student->save();

        return back()->with('s_success','Your course taking done, now admin will confirm you !');
    }

    //this section for download pdf 
    public function courses_pdf(Request $request , $id){
        // $data = [
        //     'title' => 'Welcome to Tutsmake.com',
        //     'date' => date('m/d/Y')
        // ];
        
        $data = Course::find($id); 
        $data1 = File_pdf::where('course_id','=', $data->id)->first(); 
        //$info = compact('data');

        $info = [
            'data' => $data,
            'pdf' => $data1
        ];

        //die($data1);

        //return view('coursePDF', compact('data','data1'));
         $pdf = PDF::loadView('coursePDF' , $info );
          return $pdf->download('course.pdf');
    }

    public function courses_uploaded_pdf(Request $request , $id){
        $data = Course::find($id); 
        $data1 = File_pdf::where('course_id','=', $data->id)->first(); 
        
        $file = public_path('pdf/'.$data1->file);
        return Response::download($file);
        //return (new Response($file , 200))->header('Content-Type' , 'pdf');
    }

}

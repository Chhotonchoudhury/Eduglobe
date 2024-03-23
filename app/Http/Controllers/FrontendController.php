<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Web_header;
use App\Models\Web_about;
use App\Models\Web_work;
use App\Models\Course;
use App\Models\Course_requirement;
use App\Models\Student;
use App\Models\Category;
use App\Models\Companyprofile;
use App\Models\File_pdf;
use App\Models\University;
use App\Models\Web_navbar;
use App\Models\Web_title;
use App\Models\Feedback;

class FrontendController extends Controller
{
    //
    public function Index(){
        // return view('email.testMail');
        $header = Web_header::first();
        $about = Web_about::first();
        $work = Web_work::first();
        $navbar = Web_navbar::first();
        $title = Web_title::first();
        $newcourse = Course::orderby('id','desc')->take(5)->get();

        $popcourse = Student::whereNotNull('course_id')->select('course_id')->selectRaw('count(course_id) as qty')
        ->groupBy('course_id')
        ->orderBy('qty', 'DESC')
        ->take(6)
        ->get();

        $category = Category::orderby('id','desc')->get();

        $cp = Companyprofile::first();
       
        return view('frontend.home',compact('header','about','work','newcourse','popcourse','category','navbar','title','cp'));
    }

    public function Courses(){
        $cp = Companyprofile::first();
        // $courses = Course::orderby('id','desc')->get();
        $courses = Course::latest()->paginate(8);
        return view('frontend.courses', compact('cp','courses'));
    }


     //pagination function
     public function pagination(Request $request){
        $courses = Course::latest()->paginate(8);
        return view('frontend.pagination_course' , compact('courses'))->render();
        
        }
    //end of the pagination function

    public function Course_search(Request $request){

        $courses = Course::where('name','like','%'.$request->search_string.'%')
        ->orwhere('fess','like','%'.$request->search_string.'%')
        ->orwhere('ar_name','like','%'.$request->search_string.'%')
        ->orwhere('ar_course_period','like','%'.$request->search_string.'%')
        ->orderBy('id','desc')
        ->paginate(2);

        if($courses->count() >= 1){
            return view('frontend.pagination_course' , compact('courses'))->render();
        }else{
            return response()->json([
                'status' => 'Nothing_Found',
            ]);
        }
    }

    public function search(Request $request){

        $courses = Course::where('name','like','%'.$request->search_string.'%')
        ->orwhere('fess','like','%'.$request->search_string.'%')
        ->orwhere('ar_name','like','%'.$request->search_string.'%')
        ->orwhere('ar_course_period','like','%'.$request->search_string.'%')
        ->orderBy('id','desc');


        if($courses->count() >= 1){
            return view('frontend.course_search' , compact('courses'))->render();
        }else{
            return response()->json([
                'status' => 'Nothing_Found',
            ]);
        }
    }

    //about page section

    public function About(){
        $cp = Companyprofile::first();
        $about = Web_about::first();
        $work = Web_work::first();
        $category = Category::orderby('id','desc')->get();

        return view('frontend.about', compact('cp','about','work','category'));
    }

    //contact page section 
    public function Contact(){
        $cp = Companyprofile::first();
        return view('frontend.contact', compact('cp'));
    }

   //course preview section
   public function Preview(Request $request, $id ){
    $cp = Companyprofile::first();
    $course = Course::find($id);
    $course_req = Course_requirement::where('course_id','=', $id)->get();
    $pdf = File_pdf::where('course_id','=', $id)->first();
    return view('frontend.course_details', compact('cp','course','course_req','pdf'));
   }

   //this is all the university secton
   public function university(){
    $cp = Companyprofile::first();
    // $courses = Course::orderby('id','desc')->get();
    $university = University::latest()->paginate(3);
    $category = Category::orderby('id','desc')->get();
    $courses = Course::orderBy('id','desc')->take(4)->get();

    return view('frontend.university', compact('cp','university','category','courses'));
   }

   //This function is for showing the details of the University

   public function universty_view(Request $request, $id ){
    $cp = Companyprofile::first();
    $university = University::find($id);
    $courses = Course::where('university_id','=', $id)->latest()->paginate(8);
    return view('frontend.university_details', compact('cp','university','courses')); 

   }

   // course direct search 
    public function direct_search(Request $request, $string){
        $cp = Companyprofile::first();
        $result = $string;
        $courses = Course::where('name','like','%'.$string.'%')
        ->orwhere('fess','like','%'.$string.'%')
        ->orwhere('ar_name','like','%'.$string.'%')
        ->orwhere('ar_course_period','like','%'.$string.'%')
        ->orderBy('id','desc')
        ->get();

        return view('frontend.home_search' , compact('courses','cp','result'));
    }

    //category courses 

    public function category_course(Request $request, $category){
        $cp = Companyprofile::first();
        
        $cat = Category::find($category);
       

        $courses = Course::where('category_id','=', $category)->get();

        return view('frontend.category_search' , compact('courses','cp','cat'));
    }

    //This is the feedback comes from the users
    public function feedback(Request $request){

        $feedback = new Feedback;
        $feedback->name = $request->name;
        $feedback->email = $request->email;	
        $feedback->subject = $request->subject;
        $feedback->message = $request->message;
        $feedback->save();

        return back()->with("success", "Thank Your for messaging us , we are respond use very soon ! ");
    }




}

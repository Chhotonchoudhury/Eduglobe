<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Course;
use App\Models\Course_requirement;
use App\Models\Student;
use App\Models\University;
use App\Models\File_pdf;
use PDF;
use App\Models\Companyprofile;
use App\Models\StudentDoc;
// use File;
use Response;
class CourseController extends Controller
{
    //
    public function index(){
        $page_main = "Courses";
        $page = "Courses";
        $cp = Companyprofile::find(1);

        $courses = Course::orderby('id','desc')->get();
        $university = University::all();
        $category = Category::all();
        return view ('new.Course' , compact('courses','university','category','page_main','page','cp'));
    }


    //course category section 

    //course category section end



    // store the course 

    public function store(Request $request){

        //validation
        $request->validate([
            'name' => ['required'],
            'course' => ['required'],
            'period' => ['required'],

            'arabic_name' => ['required'],
            'arabic_course' => ['required'],
            'arabic_period' => ['required'],

            'start_date' => ['required'],
            'start_date2' => ['required'],
            'university' => ['required'],
            'category'   => ['required'],
            'photo' => 'required|mimes:jpg,png,jpeg|max:2048',
            'multi_image' => 'required',
            'multi_image.*' => 'mimes:jpeg,jpg,png|max:2048',
            'details' => ['required'],
            'arabic_details' => ['required'],
            'fees'    => ['required'],
            'degree'    => ['required'],
        ]);

        //insert the record vid model
        $course = new Course;
            $course->name = $request->name;
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
        if($request->photo){
            $file = $request->photo;
            $ex = $request->photo->extension();
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
        
        return back()->with("success", "Course Added successfully ");
    }


    //this section is for requirments entry 
    public function requre_store(Request $request){
        $course = new Course_requirement;
        $course->course_id = $request->course_id;
        $course->requirment = $request->remarks;
        $course->ar_requirment = $request->arabic_remarks;
        $course->input = $request->input;
        $course->save();
        return back()->with(["s_success" => "Course Requirments entry successfully", 'active_tab' => 3]);
    }


    //fetch requirement information

    public function fetchReq($id){

        $record = Course_requirement::find($id);

        return response()->json(['success' => true, 'data' => $record]);
    }

    //Course requirement view section
    public function c_require(Request $request , $id){
        $course = Course_requirement::find($id);
        
        return response()->json([
            'status' => 200,
            'req' => $course,
        ]);

    }

    //end of the course requirement view section

    //this function is used for update the requirement 
    public function requre_update(Request $request){
        $course = Course_requirement::find($request->id);
        $course->requirment = $request->remarks;
        $course->ar_requirment = $request->arabic_remarks;
        $course->input = $request->input;
        $course->save();
        return back()->with(["s_success" => "Course Requirments updated successfully", 'active_tab' => 3]);
    }

    // this function is for delete the requirements

    public function requre_delete(Request $request , $id){
        $course = Course_requirement::find($id);
        $doc = StudentDoc::where('requirement_id','=',$id)->first();
        if(empty($doc)){
        $course->delete();
        return back()->with(["s_success" => "Course Requirments deleted successfully", 'active_tab' => 3]);
        }else{
        return back()->with(["info" => "Course Requirments Can't be deleted student already uploaded there documents!", 'active_tab' => 3]);
        }
        
    }

    // edite form return view
    public function edite(Request $request , $id){

            $page_main = "Courses";
            $page = "Cours Update";
            $cp = Companyprofile::find(1);

            $course = Course::find($id);
            $university = University::all();
            $category = Category::all();
            return view('CourseUpdate', compact('course','university','cp','category','page_main','page'));
        }


    public function c_view(Request $request , $id){
        $page_main = "Courses";
        $page = "Cours Profile";
        $cp = Companyprofile::find(1);

        $course = Course::find($id);
        $course_req = Course_requirement::where('course_id','=', $id)->get();
        $pdf = File_pdf::where('course_id','=', $id)->first();
        $university = University::all();
        $category = Category::all();

        return view('new.CourseView', compact('course','pdf','cp','course_req','university','category','page_main','page'));
    }

    //update the course 
    public function update(Request $request){
        
           //validation
        $request->validate([
            'name' => ['required'],
            'course' => ['required'],
            'period' => ['required'],

            'arabic_name' => ['required'],
            'arabic_course' => ['required'],
            'arabic_period' => ['required'],

            'start_date' => ['required'],
            'start_date2' => ['required'],
            'university' => ['required'],
            'category' => ['required'],
            'details' => ['required'],
            'arabic_details' => ['required'],
            'fees'    => ['required'],
            'degree'    => ['required'],
        ]);
        $course = Course::find($request->id);

        // die($course);
        // update now

        
          //working with image
          if($request->file('photo')){
            $request->validate([ 'photo' => 'required|mimes:jpg,png,jpeg|max:2048',]);
            //die(public_path('uploads/'.$course->photo));
            $file = $request->file('photo');
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
            // $request->validate([ 'multi_image' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048',]);
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
          $course->name = $request->name;
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
          $course->entry_id = Auth::user()->id;

          $course->save();
          return back()->with(["s_success" => "course updated successfully", 'active_tab'=>1]);

    }


    public function delete(Request $request , $id){
        $ex = Course::find($request->id);

        $stu_course = Student::where('course_id','=',$ex->id)->first();
        if(!empty($stu_course)){
            return redirect()->route('cor')->with("info", "You can't delte this course bcoz, it is already uses ");
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
                   unlink(public_path('uploads/'.$imgs));
                   }
        }

        $cr_req=Course_requirement::where('course_id','=',$request->id);
        $cr_req->delete();
        $ex->delete();
        return redirect()->route('cor')->with("success", "Course Record deleted successfully ");
    }

    public function course_pdf_store(Request $request){

        $course = File_pdf::where('course_id', '=' , $request->course_id)->first();
        $pdf = new File_pdf;

        if(empty($course)){
            //die('This is something !');
            $pdf->course_id = $request->course_id;
            $pdf->details = $request->details;
            $pdf->save();
        }else{
            //die('This is the nothing !');
            $course->details = $request->details;
            $course->save();
        }

        return back()->with(["s_success" => "design saved successfully", 'active_tab'=>2]);

    }

    //This section is for course padf uploads
    public function course_pdf_upload(Request $request){

        $course = File_pdf::where('course_id', '=' , $request->course_id)->first();
        $pdf = new File_pdf;

        if($request->hasfile('pdf'))
        {
           if($request->file('pdf')){
            $request->validate([ 'pdf' => 'required|mimes:pdf|max:10000',]);
            //die(public_path('uploads/'.$course->photo));
            $file = $request->file('pdf');
            if(!empty($course->file)){
                unlink(public_path('pdf/'.$course->file));
            }
            $ex = $file->extension();
            $filename = time(). '.' .$ex;
            $file->move(public_path('pdf'),$filename);
            if(empty($course)){
                $pdf->file  =  $filename;  
            }else{
                $course->file = $filename; 
              }
            
          }

        }

        if(empty($course)){

            $pdf->course_id = $request->course_id;	
            $pdf->save();
        }else{

            $course->save();
        }

        return back()->with(["s_success"=>"course pdf uploaded successfully" , 'active_tab'=>2]);

    }

    //this section is for course activation 
    public function course_pdf_active(Request $request){
        $request->validate([ 'option' => 'required',]);

        $course = File_pdf::where('course_id', '=' , $request->course_id)->first();
        $pdf = new File_pdf;

        if(empty($course)){
            //die('This is something !');
            $pdf->course_id = $request->course_id;
            $pdf->process_status = $request->option;	
            $pdf->save();
        }else{
            //die('This is the nothing !');
            $course->process_status = $request->option;
            $course->save();
        }

        return back()->with(["s_success"=>"course attachment activated successfully" , 'active_tab'=>2]);
    }

    public function course_pdf(Request $request , $id){
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

    public function course_uploaded_pdf(Request $request , $id){
        $data = Course::find($id); 
        $data1 = File_pdf::where('course_id','=', $data->id)->first(); 
        
        $file = public_path('pdf/'.$data1->file);
        return Response::download($file);
        //return (new Response($file , 200))->header('Content-Type' , 'pdf');
    }


    public function uploadimage(Request $request){
        if($request->hasFile('upload')){
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extention = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.'.$extention;

            $request->file('upload')->move(public_path('media'), $fileName);
            $url = asset('media/'.$fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
    
    
    
    



}

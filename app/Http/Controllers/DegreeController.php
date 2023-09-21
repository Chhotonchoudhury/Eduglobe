<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\Degree;
use App\Models\Student;
use App\Models\University;

use App\Models\Category;
use App\Models\Course;
use App\Models\Companyprofile;

class DegreeController extends Controller
{
    //this function return the records
    // public function list(Request $request){
    //      $id = $_POST['id'];
    //     $phd_degrees = Degree::where("university_id", "=",  $id)->where("name", "=", "PHD")->orderby('id','desc')->get();
    //     $master_degrees = Degree::where("university_id", "=",  $id)->where("name", "=", "MASTER")->orderby('id','desc')->get();
    //     $bachelor_degrees = Degree::where("university_id", "=",  $id)->where("name", "=", "BACHELOR")->orderby('id','desc')->get();
    //     $other_degrees = Degree::where("university_id", "=",  $id)->where("name", "=", "OTHER")->orderby('id','desc')->get();
    //     return response()->json([
    //         'phd_degrees' => $phd_degrees,
    //         'master_degrees' => $master_degrees,
    //         'bachelor_degrees' => $bachelor_degrees,
    //         'other_degrees' => $other_degrees,
    //     ]);
    // }

    //this function is used for store the data
    public function store(Request $request){
        //validation before sotr the data

                $request->validate([
                    'name' => ['required'],
                    'course' => ['required'],
                    'period' => ['required'],

                    'arabic_name' => ['required'],
                    'arabic_course' => ['required'],
                    'arabic_period' => ['required'],

                    'start_date' => ['required'],
                    'start_date2' => ['required'],
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
                $course->ar_name = $request->arabic_name;

                $course->course = $request->course;	
                $course->course_period = $request->period;
                
                $course->ar_course = $request->arabic_course;	
                $course->ar_course_period = $request->arabic_period;

                $course->university_id = $request->un_id;
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
            // return response()->json([ 'status' => 003, ]);

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
            return back()->with("s_success", "Course Added successfully ");

    }

    // edite dgree function 

    public function coure_edite(Request $request , $id){

        $page_main = "University";
        $page = "Cours Update";
        $cp = Companyprofile::find(1);

        $course = Course::find($id);
        $university = University::all();
        $category = Category::all();
        return view('UniCourseUpdate', compact('course','university','cp','category','page_main','page'));
    }

    // update the records through ajax request

    public function course_update(Request $request){
        
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

         'category' => ['required'],
         'details' => ['required'],
         'arabic_details' => ['required'],
         'fees'    => ['required'],
         'degree'    => ['required'],
     ]);
     $course = Course::find($request->id);
     // update now

     
       //working with image
       if($request->file('photo')){
         $request->validate([ 'photo' => 'required|mimes:jpg,png,jpeg|max:2048',]);
         //die(public_path('uploads/'.$course->photo));
         $file = $request->file('photo');
         if($course->photo){
             unlink(public_path('uploads/'.$course->photo));
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
                 unlink(public_path('uploads/'.$imgs));
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


       $course->category_id = $request->category;
       $course->detail = $request->details;
       $course->ar_detail = $request->arabic_details;
       $course->starting_date = $request->start_date;
       $course->starting_date2 = $request->start_date2;

       $course->entry_id = Auth::user()->id;

       $course->save();
       return redirect()->route('view.uni',$course->university_id)->with("s_success", "Course Updated successfully ");
    }

    
  // this is the delete function for us

        public function course_delete(Request $request , $id){
            $ex = Course::find($request->id);

            $stu_course = Student::where('course_id','=',$ex->id)->first();
            if(!empty($stu_course)){
                return redirect()->route('view.uni',$ex->university_id)->with("info", "You can't delte this course bcoz, it is already uses ");
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

            $ex->delete();
            return redirect()->route('view.uni',$ex->university_id)->with("s_success", "Course Record deleted successfully ");
        }
    

    // this is for showing the data
    public function show(Request $request , $id){
        $degree = Course::find($id);
        $img = asset('uploads/'.$degree->photo);
        $user = $degree->user->name;
        if($degree){
            return response()->json([
                'status' => 200,
                'degree' => $degree,
                'img' => $img,
                'details' => $degree->detail,
                'ar_details' => $degree->ar_detail,
                'user' => $user,
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'Degree Not found',
            ]);
        }
    }


}

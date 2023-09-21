<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\Companyprofile;
class CategoryController extends Controller
{
    //
    public function index(){

        $page_main = "Caourse";
        $page = "Category";
        $cp = Companyprofile::find(1);

        $category = Category::orderby('id','desc')->get();
        // $courses = Course::orderby('id','desc')->get();
        // $university = University::all();
        return view ('category', compact('page','cp','page_main','category'));
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|unique:categories',
            'name_arabic' => 'required',
            'photo' => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);

        
        //insert the record vid model
           $course = new Category;
           $course->name = $request->name;
           $course->name_arabic = $request->name_arabic;
        //working with image
        if($request->photo){
            $file = $request->photo;
            $ex = $request->photo->extension();
            $filename = time(). '.' .$ex;
            $file->move(public_path('uploads'),$filename);
            $course->photo = $filename;
        }

        $course->save();
        return back()->with("success", "Course category added successfully ! ");

    }

    public function edite(Request $request , $id){
        $page_main = "Category";
        $page = "Edite";
        $cp = Companyprofile::find(1);

        $cat= Category::find($id);
        return view('CategoryEdite', compact('page_main','cp','page','cat'));
    }

    public function update(Request $request){

        $request->validate([
            'name' => 'required|unique:categories,name,'.$request->id,
            'name_arabic' => 'required',
        ]);
        $course = Category::find($request->id);


        //working with image
        if($request->file('photo')){
        $request->validate([ 'photo' => 'required|mimes:jpg,png,jpeg|max:2048',]);
        //die(public_path('uploads/'.$course->photo));
        $file = $request->file('photo');
        if($course->photo){
            if(\file_exists(public_path('uploads/'.$course->photo))){
            unlink(public_path('uploads/'.$course->photo));
            }
        }
        $ex = $file->extension();
        $filename = time(). '.' .$ex;
        $file->move(public_path('uploads'),$filename);
        $course->photo = $filename;
        }
        //end section
        $course->name =  $request->name;
        $course->name_arabic =  $request->name_arabic;
        $course->save();
        return redirect()->route('category')->with("success", "category Updated successfully ");

    }

    public function delete(Request $request , $id){
        $result = Course::where('category_id','=', $id)->first();
        $ex = Category::find($id);
        if(empty($result)){

            if(file_exists(public_path('uploads/'.$ex->photo))){
                if($ex->photo){
                    unlink(public_path('uploads/'.$ex->photo));
                }
            }
            $ex->delete();
            return redirect()->route('category')->with("success", "Category deleted successfuly !  ");

        }else{
            return back()->with("info", "This category alredy used in a course , so that can't delete this category");
        }
    }

}

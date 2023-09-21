<?php

namespace App\Http\Controllers;
use App\Models\Companyprofile;
use Illuminate\Http\Request;
use App\Models\Web_header;
use App\Models\Web_about;
use App\Models\Web_work;
use App\Models\Web_navbar;
use App\Models\Web_title;

class WebsiteController extends Controller
{
    //
    public function header(){
        $page_main = "Wesite";
        $page = "Header";
        $cp = Companyprofile::find(1);
        $data = Web_header::orderby('id','desc')->get();
        //die($data);
        return view('website.header', compact('page_main','page','cp','data'));
    }

    public function header_store(Request $request){

        //form validation
        $request->validate([
            'en_title1' => ['required'],
            'ar_title1' => ['required'],
            'en_title2' => ['required'],
            'ar_title2' => ['required'],
            'banner' => 'required|mimes:jpg,png,jpeg|max:2048',
            // 'password' => 'required|same:confirm_password|min:4',
        ]);

        //upload banner 
        $banner = time().'_'.$request->banner->getClientOriginalName().'.'.$request->banner->extension();
        $request->banner->move(public_path('website_uploads'),$banner);
        
        //storing the data
        Web_header::create([
            'en_f_title' => $request->en_title1,
            'en_l_title' => $request->en_title2,
            'ar_f_title' => $request->ar_title1,
            'ar_l_title' => $request->ar_title2,
            'banner' => $banner,
        ]);

        return back()->with('s_success','Data stored successfully !');
    }


    //This is edite the data returning the edite from page
    public function header_edite(Request $request , $id){
        $page_main = "Website";
        $page = "header Edite";
        $cp = Companyprofile::find(1);
        $data = Web_header::find($id);
        return view('website.header_edite' , compact('data','cp','page','page_main'));
    }

    //This is for update section for use to
    public function header_update(Request $request){
        
           //form validation
           $request->validate([
            'en_title1' => ['required'],
            'ar_title1' => ['required'],
            'en_title2' => ['required'],
            'ar_title2' => ['required'],
            // 'banner' => 'required|mimes:jpg,png,jpeg|max:2048',
            // 'password' => 'required|same:confirm_password|min:4',
           ]);

           $data = Web_header::find($request->id);

           $data->en_f_title = $request->en_title1;
           $data->en_l_title = $request->en_title2;
           $data->ar_f_title = $request->ar_title1;
           $data->ar_l_title = $request->ar_title2;

           if($request->file('banner')){
            $request->validate([ 'banner' => 'required|mimes:jpg,png,jpeg|max:2048',]);
            $file = $request->file('banner');
            if($data->banner){
                if(file_exists(public_path('website_uploads/'.$data->banner))){
                unlink(public_path('website_uploads/'.$data->banner));
                }
            }
            $filename = time().'_'.$request->banner->getClientOriginalName().'.'.$request->banner->extension();
            $file->move(public_path('website_uploads'),$filename);
            $data['banner'] = $filename;
          }

        $data->save();
        return redirect()->route('website.header')->with('s_success', 'Your header updated successfully!');

    }

    //This is the header delete section 
    public function header_delete(Request $request,$id){

        $fileNm = Web_header::find($id);
        if(file_exists(public_path('website_uploads/'.$fileNm->banner))){
            unlink(public_path('website_uploads/'.$fileNm->banner));
        }
        $fileNm->delete();
        return redirect()->route('website.header')->with("s_success","Header data deleted successfully !");
    }

    //This is the about section 
    public function about(){
        $page_main = "Wesite";
        $page = "About";
        $cp = Companyprofile::find(1);
        $data = Web_about::orderby('id','desc')->get();
        //die($data);
        return view('website.about', compact('page_main','page','cp','data'));
    }
    //This is the about store section
        public function about_store(Request $request){
                //form validation
                $request->validate([
                    'en_title' => ['required'],
                    'ar_title' => ['required'],
                    'en_about' => ['required'],
                    'ar_about' => ['required'],
                    'banner' => 'required|mimes:jpg,png,jpeg|max:2048',
                    // 'password' => 'required|same:confirm_password|min:4',
                ]);
        
                //upload banner 
                $banner = time().'_'.$request->banner->getClientOriginalName().'.'.$request->banner->extension();
                $request->banner->move(public_path('website_uploads'),$banner);
                
                //storing the data
                Web_about::create([

                    'en_title' => $request->en_title,
                    'ar_title' => $request->ar_title,

                    'en_about' => $request->en_about,
                    'ar_about' => $request->ar_about,
                    'banner' => $banner,
                ]);
        
                return back()->with('s_success','Data stored successfully !');
        }

    //This is the about edite section 
        public function about_edite(Request $request , $id){
            $page_main = "Website";
            $page = "About edite";
            $cp = Companyprofile::find(1);
            $data = Web_about::find($id);
            return view('website.about_edite' , compact('data','cp','page','page_main'));
        }

    //this is the about update section 
    public function about_update(Request $request){

          //form validation
          $request->validate([
            'en_title' => ['required'],
            'ar_title' => ['required'],
            'en_about' => ['required'],
            'ar_about' => ['required'],
            // 'banner' => 'required|mimes:jpg,png,jpeg|max:2048',
            // 'password' => 'required|same:confirm_password|min:4',
           ]);

           $data = Web_about::find($request->id);

           $data->en_title = $request->en_title;
           $data->ar_title = $request->ar_title;
           $data->en_about = $request->en_about;
           $data->ar_about = $request->ar_about;

           if($request->file('banner')){
            $request->validate([ 'banner' => 'required|mimes:jpg,png,jpeg|max:2048',]);
            $file = $request->file('banner');
            if($data->banner){
                if(file_exists(public_path('website_uploads/'.$data->banner))){
                unlink(public_path('website_uploads/'.$data->banner));
                }
            }
            $filename = time().'_'.$request->banner->getClientOriginalName().'.'.$request->banner->extension();
            $file->move(public_path('website_uploads'),$filename);
            $data['banner'] = $filename;
          }

        $data->save();
        return redirect()->route('website.about')->with('s_success', 'Your about section updated successfully!');


     }
     //This is about delete section 
     public function about_delete(Request $request,$id){

        $fileNm = Web_about::find($id);

        if(file_exists(public_path('website_uploads/'.$fileNm->banner))){
            unlink(public_path('website_uploads/'.$fileNm->banner));
        }
        $fileNm->delete();
        return redirect()->route('website.about')->with("s_success","about data deleted successfully !");
     }
    
    //This section is for how it works section 
    public function work(){
        $page_main = "Wesite";
        $page = "Work";
        $cp = Companyprofile::find(1);
        $data = Web_work::orderby('id','desc')->get();
        //die($data);
        return view('website.work', compact('page_main','page','cp','data'));
    }
    //This section is for store the work section
    public function work_store(Request $request){
        //form validation
        $request->validate([
            'en_title' => ['required'],
            'ar_title' => ['required'],
            'en_title1' => ['required'],
            'ar_title1' => ['required'],
            'banner' => 'required|mimes:jpg,png,jpeg|max:2048',
            // 'password' => 'required|same:confirm_password|min:4',
        ]);

        //upload banner 
        $banner = time().'_'.$request->banner->getClientOriginalName().'.'.$request->banner->extension();
        $request->banner->move(public_path('website_uploads'),$banner);
        
        //storing the data
        Web_work::create([
            'en_description' => $request->en_title,
            'ar_description' => $request->ar_title,

            'en_title1' => $request->en_title1,
            'ar_title1' => $request->ar_title1,

            'en_title2' => $request->en_title2,
            'ar_title2' => $request->ar_title2,

            'en_title3' => $request->en_title3,
            'ar_title3' => $request->ar_title3,

            'en_title4' => $request->en_title4,
            'ar_title4' => $request->ar_title4,

            'en_title5' => $request->en_title5,
            'ar_title5' => $request->ar_title5,

            'banner' => $banner,
        ]);

        return back()->with('s_success','Data stored successfully !');
    }
    //this section is for edite the work page
    public function work_edite(Request $request , $id){
        $page_main = "Website";
        $page = "Work edite";
        $cp = Companyprofile::find(1);
        $data = Web_work::find($id);
        return view('website.work_edite' , compact('data','cp','page','page_main'));
    }
    //this section is for update the work of the website
    public function work_update(Request $request){
        //form validation
        $request->validate([
            'en_title' => ['required'],
            'ar_title' => ['required'],
            'en_title1' => ['required'],
            'ar_title1' => ['required'],
          // 'banner' => 'required|mimes:jpg,png,jpeg|max:2048',
          // 'password' => 'required|same:confirm_password|min:4',
         ]);

         $data = Web_work::find($request->id);

         $data->en_description = $request->en_title;
         $data->ar_description = $request->ar_title;

         $data->en_title1 = $request->en_title1;
         $data->ar_title1 = $request->ar_title1;

         $data->en_title2 = $request->en_title2;
         $data->ar_title2 = $request->ar_title2;

         $data->en_title3 = $request->en_title3;
         $data->ar_title3 = $request->ar_title3;

         $data->en_title4 = $request->en_title4;
         $data->ar_title4 = $request->ar_title4;

         $data->en_title5 = $request->en_title5;
         $data->ar_title5 = $request->ar_title5;

         if($request->file('banner')){
          $request->validate([ 'banner' => 'required|mimes:jpg,png,jpeg|max:2048',]);
          $file = $request->file('banner');
          if($data->banner){
              if(file_exists(public_path('website_uploads/'.$data->banner))){
              unlink(public_path('website_uploads/'.$data->banner));
              }
          }
          $filename = time().'_'.$request->banner->getClientOriginalName().'.'.$request->banner->extension();
          $file->move(public_path('website_uploads'),$filename);
          $data['banner'] = $filename;
        }

      $data->save();
      return redirect()->route('website.work')->with('s_success', 'Your about section updated successfully!');
    }
    //this function is for delete the work section record
    public function work_delete(Request $request,$id){

        $fileNm = Web_work::find($id);

        if(file_exists(public_path('website_uploads/'.$fileNm->banner))){
            unlink(public_path('website_uploads/'.$fileNm->banner));
        }
        $fileNm->delete();
        return redirect()->route('website.work')->with("s_success","work data deleted successfully !");
    }
    
      //website navbar 
    public function navbar(){
        $page_main = "Wesite";
        $page = "Navbar";
        $cp = Companyprofile::find(1);
        $data = Web_navbar::first();
        //die($data);
        return view('website.navbars', compact('page_main','page','cp','data'));
    }

    //website nav store 
    public function nav_store(Request $request){

        $data = Web_navbar::find($request->id);
        $data->ar_link1 = $request->title1;
        $data->ar_link2 = $request->title2;
        $data->ar_link3 = $request->title3;
        $data->ar_link4 = $request->title4;
        $data->ar_link5 = $request->title5;
        $data->ar_link6 = $request->title6;
        $data->save();
        return redirect()->back()->with('s_success', 'Navbar links save!');
    }
    //website titles section

    public function title(){
        $page_main = "Wesite";
        $page = "Titles";
        $cp = Companyprofile::find(1);
        $data = Web_title::first();
        //die($data);
        return view('website.titles', compact('page_main','page','cp','data'));
    }
    //this is the store of the titles

    public function title_store(Request $request){
        $data = Web_title::find($request->id);
        $data->ar_title1 = $request->title1;
        $data->ar_title2 = $request->title2;
        $data->ar_title3 = $request->title3;
        $data->ar_title4 = $request->title4;
        $data->ar_title5 = $request->title5;
        $data->ar_title6 = $request->title6;

        $data->ar_title7 = $request->title7;
        $data->ar_title8 = $request->title8;
        $data->ar_title9 = $request->title9;
        $data->ar_title10 = $request->title10;
        $data->ar_title11 = $request->title11;
        $data->ar_title12 = $request->title12;
        $data->ar_title13 = $request->title13;
        $data->ar_title14 = $request->title14;
        $data->ar_title15 = $request->title15;
        $data->ar_title16 = $request->title16;
        $data->ar_title17 = $request->title17;
        $data->ar_title18 = $request->title18;
        
        $data->save();
        return redirect()->back()->with('s_success', 'Titles are saved successfully!');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companyprofile;

class CompanyController extends Controller
{
    //
    public function index(){
        $page_main = "Company";
        $page = "Profile";
        $cp = Companyprofile::find(1);
        
        $company = Companyprofile::find(1);

        return view('company', compact('page','page_main','company','cp'));
    }

    public function store(Request $request){
        $company = Companyprofile::find($request->id);

          //working with image
          if($request->file('logo')){
            $request->validate([ 'logo' => 'required|mimes:jpg,png,jpeg|max:2048',]);
            //die(public_path('uploads/'.$course->photo));
            $file = $request->file('logo');
            if($company->logo){
                unlink(public_path('uploads/'.$company->logo));
            }
            $ex = $file->extension();
            $filename = time(). '.' .$ex;
            $file->move(public_path('uploads'),$filename);
            $company->logo = $filename;
          }
          //end section

        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->address = $request->address;
        $company->description = $request->description;
        $company->website = $request->web;
        $company->twitter = $request->twi;
        $company->facebook = $request->fac;
        $company->instagram = $request->ins;

        $company->save();
        return back()->with('success','Information updated successfully..!');
    }


}

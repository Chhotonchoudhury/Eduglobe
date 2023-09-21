<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;
use App\Models\PaymentCategory;
use App\Models\Course;
use App\Models\Degree;
use App\Models\Student;
use App\Models\Category;

use App\Models\Student_Payment;
use App\Models\Payment;
use App\Models\Commission;
use App\Models\Companyprofile;

class UniversityController extends Controller
{
    //

        //showing the forms for add data
        public function add(){
            $page_main = "University";
            $page = "Add New University";
            $cp = Companyprofile::find(1);
            $unvs = University::orderby('id','desc')->get();
            return view('UniAdd', compact('cp','page','unvs','page_main')); 
        }//end method
    
        //store university data
        public function store(Request $request){
            
            // inputs validation validation 
            $request->validate([
                'name' => ['required'],
                'email' => ['required'],
                'u_number' => ['required'],
                'ex_number' => ['required'],
                'ex_email' => ['required'],
                'address' => ['required'],
                'remarks' => ['required'],

                'arabic_name' => ['required'],
                'arabic_address' => ['required'],
                'arabic_remarks' => ['required'],


                'logo' => 'required|mimes:jpg,png,jpeg|max:2048',
                'photo' => 'required|mimes:jpg,png,jpeg|max:2048',
            ]);
            //die($request);

            //logo upload 
             $Logo = time().'_'.$request->logo->getClientOriginalName().'.'.$request->logo->extension();
             $request->logo->move(public_path('uploads'),$Logo);
             
             

            //Photo validation & upload 
            if($request->photo != ''){
             $request->validate([ 'photo' => 'required|mimes:jpg,png,jpeg|max:2048',]);
             $Photo = time().'_'.$request->photo->getClientOriginalName().'.'.$request->photo->extension();
             $request->photo->move(public_path('uploads'),$Photo);
             }else{ $Photo = ''; }  

             

            //data insertion 
            University::create([
                'name' => $request->name,
                'ar_name' => $request->arabic_name,
                'email' => $request->email,
                'Unumber' => $request->u_number,
                'logo' => $Logo,
                'ex_number' => $request->ex_number,
                'ex_email' => $request->ex_email,
                'address' => $request->address,
                'remarks' => $request->remarks,

                'ar_address' => $request->arabic_address,
                'ar_remarks' => $request->arabic_remarks,

                'photo' => $Photo,
            ]);

            return back()->with('s_success','University added successfully !');
        }//end method

        //this methods is for show the list of university
        // public function list(){
        //     $page_main = "University";
        //     $page = "University List";
        //     $cp = Companyprofile::find(1);

        //     $unvs = University::orderby('id','desc')->get();
        //     return view('UniList',compact('unvs','cp','page','page_main'));
        // }

        //this function is for view the university
        public function view(Request $request , $id){
            $page_main = "University";
            $page = "University Profile";
            $cp = Companyprofile::find(1);
            //die('Plz do something happend us there is no knowedge for us please');
             //die($id);
            // $tota_Degree = Degree::count();

            $unv = University::find($id);
            $paytype = PaymentCategory::all();
            $course =  Course::where("university_id", "=", $id)->get();

            $deg= Degree::where('university_id','=', $unv->id)->get();
            $deeg_total = $deg->count();

            $stu= Student::where('university_id','=', $unv->id)->get();
            $stu_total = $stu->count();

            $cou= Course::where('university_id','=', $unv->id)->get();
            $cou_total = $cou->count();

            //all of the PDH degree list section 
            $phd_degrees = Course::where("university_id", "=",  $id)->where("course_degree", "=", "PHD")->orderby('id','desc')->get();
            //all of the master degree section
            $master_degrees = Course::where("university_id", "=",  $id)->where("course_degree", "=", "MASTER")->orderby('id','desc')->get();     
            //all of the bacheler degree section 
            $bachelor_degrees = Course::where("university_id", "=",  $id)->where("course_degree", "=", "BACHELOR")->orderby('id','desc')->get();         
            //all of the other degree section
            $other_degrees = Course::where("university_id", "=",  $id)->where("course_degree", "=", "OTHER")->orderby('id','desc')->get();
            
             // Total payment
             $commission_total = Commission::with('course')->whereRelation('course','university_id',$request->id)->sum('amount');
             $payment_total = Payment::with('course')->whereRelation('course','university_id',$request->id)->sum('amount');
             $stupaymet_total = Student_Payment::with('course')->whereRelation('course','university_id',$request->id)->sum('amount');

            // Total commission payment

            // Total student payment
            $category = Category::all();

            

            return view('UniView',compact('unv','paytype','course','page_main','page','cp','deeg_total','stu_total','cou_total','phd_degrees','master_degrees','bachelor_degrees','other_degrees','stu','commission_total','payment_total','stupaymet_total','category'));
        }

        //this is for return the edite page with data
        public function edite(Request $request , $id){
            $page_main = "University";
            $page = "Update University";
            $cp = Companyprofile::find(1);
            $unv = University::find($id);
            return view('UniEdite',compact('unv','cp','page_main','page'));
        }


        // this function is used for update the data
        public function update(Request $request){
            //edite validation
            $request->validate([
                'name' => ['required'],
                'email' => ['required'],
                'u_number' => ['required'],
                'ex_number' => ['required'],
                'ex_email' => ['required'],
                'address' => ['required'],
                'remarks' => ['required'],

                'arabic_name' => ['required'],
                'arabic_address' => ['required'],
                'arabic_remarks' => ['required'],


                // 'logo' => 'required|mimes:jpg,png,jpeg|max:2048',
                // 'photo' => 'required|mimes:jpg,png,jpeg|max:2048',
            ]);

            $data = University::find($request->id);

            $data->name = $request->name;
            $data->ar_name = $request->arabic_name;
            $data->email = $request->email;
            $data->Unumber = $request->u_number;
            $data->ex_number = $request->ex_number;
            $data->ex_email = $request->ex_email;
            $data->address = $request->address;
            $data->remarks = $request->remarks;

            $data->ar_address = $request->arabic_address;
            $data->ar_remarks = $request->arabic_remarks;


            //Logo image update 
            if($request->file('logo')){
                $request->validate([ 'logo' => 'required|mimes:jpg,png,jpeg|max:2048',]);
                //die(public_path('uploads/'.$data->logo));
                $file = $request->file('logo');
                if($data->logo){
                    if(file_exists(public_path('uploads/'.$data->logo))){
                        unlink(public_path('uploads/'.$data->logo));
                    }
                    
                }
    
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('uploads'),$filename);
                $data['logo'] = $filename;
            }

            //photo image update 
            if($request->file('photo')){
                $request->validate([ 'photo' => 'required|mimes:jpg,png,jpeg|max:2048',]);

                $file = $request->file('photo');
                if($data->photo){
                    if(file_exists(public_path('uploads/'.$data->photo))){
                        unlink(public_path('uploads/'.$data->photo));
                    }
                }
    
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('uploads'),$filename);
                $data['photo'] = $filename;
            }

            $data->save();
            return back()->with('s_success','University Details updated successfully !');
        }

        public function delete_uni(Request $request , $id){
            $data = University::find($id);

            $university = Course::where('university_id','=',$data->id)->first();
            if(!empty($university)){
                return back()->with("info", "You can't delte this University bocz it use in a course ");
            }
            //delte logo
            if(file_exists(public_path('uploads/'.$data->logo))){
                if($data->logo){
                    unlink(public_path('uploads/'.$data->logo));
                }
                }
            //delete photo
            if(file_exists(public_path('uploads/'.$data->photo))){
                if($data->photo){
                    unlink(public_path('uploads/'.$data->photo));
                }
                }

            $data->delete();
            return back()->with('s_success','University Completely deleted successfully !');
        }


}

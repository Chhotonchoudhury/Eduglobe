<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\PaymentCategory;
use App\Models\Student;
use App\Models\Course;
use App\Models\Companyprofile;

class PaymenttypeController extends Controller
{
    //
    public function index(){
        $page_main = "Payment Type";
        $page = "University payment types";
        $cp = Companyprofile::find(1);

        $types = PaymentCategory::orderby('id','desc')->get();
        return view('PaymentType', compact('types','cp','page_main','page'));
    }

     //this function store the information 
     public function store(Request $request){
        // inputs validation validation 
        $request->validate([ 'types' => ['required'],]);
       //die($request);

       //data insertion 
       PaymentCategory::create([
           'type' => $request->types,
           'entry_id' => Auth::user()->id,
       ]);

       return redirect()->route('pay')->with('s_success','Payment Type created successfully !');
    }


        //this function is return for edite page
        public function edite(Request $request , $id){
            $page_main = "Payment Type";
            $page = "Payment type update";
            $cp = Companyprofile::find(1);
            $types = PaymentCategory::find($id);
            //die($status);
            return view('PaymenttypeEdite' , compact('types','cp','page_main','page'));
        }
    
        //this function is for update the status section 
    
        public function update(Request $request){
            // inputs validation validation 
            $request->validate([ 'types' => ['required'],]);
            $data = PaymentCategory::find($request->id);
    
            $data->update([
               'type' => $request->types,
             ]);
    
           return redirect()->route('pay')->with('s_success','Payment type Updated successfully !');
        }
    
        //THIS FUNCTION IS FOR DELETE THE STATUS 
    
        public function delete_type(Request $request , $id){
            $data = PaymentCategory::find($id);
            $data->delete();
            return redirect()->route('pay')->with('s_success','Payment Type Deleted successfully !');
         }

        //THIS SECTION IS RETURN FOR SLECT THE STUDENT 

        
    public function student(){

        $id = $_GET['id'];
        $u_info = Student::where('course_id', '=', $id)->get();
    
      $response['data'] = $u_info;
      return response()->json($response);

    }
    


}

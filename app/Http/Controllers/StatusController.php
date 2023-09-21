<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Status;
use App\Models\EMGS_Status;
use App\Models\StudentPaymentStatus;
use App\Models\Companyprofile;
class StatusController extends Controller
{
    //this function is for return view
    public function index(){

        $page_main = "Application Process";
        $page = "Application Status";
        $cp = Companyprofile::find(1);

        $status = Status::orderby('id','desc')->get();
        return view('Status', compact('status','cp','page','page_main'));
    }

    //this function store the information 
    public function store(Request $request){
        // inputs validation validation 
        $request->validate([ 'status' => ['required'],]);
       //die($request);

       //data insertion 
       Status::create([
           'status' => $request->status,
           'entry_id' => Auth::user()->id,
       ]);

       return redirect()->route('status')->with('s_success','Status created successfully !');
    }

    //this function is return for edite page
    public function edite(Request $request , $id){
        $page_main = "Application Process";
        $page = "Application Status";
        $cp = Companyprofile::find(1);
        $status = Status::find($id);
        //die($status);
        return view('StatusEdite' , compact('status','cp','page','page_main'));
    }

    //this function is for update the status section 

    public function update(Request $request){
        // inputs validation validation 
        $request->validate([ 'status' => ['required'],]);
        $data = Status::find($request->id);

        $data->update([
           'status' => $request->status,
         ]);

       return redirect()->route('status')->with('s_success','Status Updated successfully !');
    }

    //THIS FUNCTION IS FOR DELETE THE STATUS 

    public function delete_status(Request $request , $id){
        $data = Status::find($id);
        $data->delete();
        return redirect()->route('status')->with('s_success','Status Deleted successfully !');
     }
     
     //This function is used for EMGS section
    public function EMG_index(){
        $page_main = "EMGS Process";
        $page = "EMGS Status";
        $cp = Companyprofile::first();

        $status = EMGS_Status::orderby('id','desc')->get();
        return view('Emgs_Status', compact('status','cp','page','page_main'));
    }

    //this function store the information 
    public function EMG_store(Request $request){
        // inputs validation validation 
        $request->validate([ 'status' => ['required'],]);
       //die($request);

       //data insertion 
       EMGS_Status::create([
           'status' => $request->status,
           'entry_id' => Auth::user()->id,
       ]);

       return redirect()->route('emgs.status')->with('s_success','EMGS Status created successfully !');
    }

    //this function is return for edite page
    public function EMG_edite(Request $request , $id){
        $page_main = "EMGS Process";
        $page = "EMGS Status";
        $cp = Companyprofile::first();
        $status = EMGS_Status::find($id);
        //die($status);
        return view('Emgs_StatusEdite' , compact('status','cp','page','page_main'));
    }

    //this function is for update the status section 

    public function EMG_update(Request $request){
        // inputs validation validation 
        $request->validate([ 'status' => ['required'],]);
        $data = EMGS_Status::find($request->id);

        $data->update([
           'status' => $request->status,
         ]);

       return redirect()->route('emgs.status')->with('s_success','EMGS Status Updated successfully !');
    }

    //THIS FUNCTION IS FOR DELETE THE STATUS 

    public function EMG_delete_status(Request $request , $id){
        $data = EMGS_Status::find($id);
        $data->delete();
        return redirect()->route('emgs.status')->with('s_success','EMGS Status Deleted successfully !');
    }
    
     //This function is used for payment section
    public function payment_index(){
        $page_main = "Payment Process";
        $page = "Payment Status";
        $cp = Companyprofile::first();

        $status = StudentPaymentStatus::orderby('id','desc')->get();
        return view('Payment_status', compact('status','cp','page','page_main'));
    }

    //this function store the information 
    public function payment_store(Request $request){
        // inputs validation validation 
        $request->validate([ 'status' => ['required'],]);
       //die($request);

       //data insertion 
       StudentPaymentStatus::create([
           'status' => $request->status,
           'entry_id' => Auth::user()->id,
       ]);

       return redirect()->route('payment.status')->with('s_success','Payment Status created successfully !');
    }

    //this function is return for edite page
    public function payment_edite(Request $request , $id){
        $page_main = "Payment Process";
        $page = "Payment Status";
        $cp = Companyprofile::first();
        $status = StudentPaymentStatus::find($id);
        //die($status);
        return view('Payment_StatusEdite' , compact('status','cp','page','page_main'));
    }

    //this function is for update the status section 

    public function payment_update(Request $request){
        // inputs validation validation 
        $request->validate([ 'status' => ['required'],]);
        $data = StudentPaymentStatus::find($request->id);

        $data->update([
           'status' => $request->status,
         ]);

       return redirect()->route('payment.status')->with('s_success','Payment Status Updated successfully !');
    }

    //THIS FUNCTION IS FOR DELETE THE STATUS 

    public function payment_delete_status(Request $request , $id){
        $data = StudentPaymentStatus::find($id);
        $data->delete();
        return redirect()->route('payment.status')->with('s_success','Payment Status Deleted successfully !');
    }




}

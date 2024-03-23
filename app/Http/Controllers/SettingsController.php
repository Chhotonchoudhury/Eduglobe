<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Course;
use App\Models\PaymentCategory;
use App\Models\Companyprofile;
use Illuminate\Http\Request;
use App\Models\Status;
use App\Models\EMGS_Status;
use App\Models\StudentPaymentStatus;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use App\Models\Payment;
use App\Models\Commission;
use App\Models\Student_Payment;
use App\Models\ENQ_Status;

class SettingsController extends Controller
{
 //
 public function index()
 {
    $page_main = "Caourse";
    $page = "Category";
    $cp = Companyprofile::first();
    $category = Category::orderby('id','desc')->get();
    $Paymenttypes = PaymentCategory::orderby('id','desc')->get();

    $status = Status::orderby('id','asc')->get();
    $emgs_status = EMGS_Status::orderby('id','asc')->get();
    $payment_status = StudentPaymentStatus::orderby('id','asc')->get();
    $enquiry_status = ENQ_Status::orderby('id','asc')->get();

    $users = User::where('id', '!=', Auth::user()->id)->orderBy('id', 'DESC')->get();
    $roles=Role::get();

    $permission = Permission::get();
    $role_permissions = Role::with('permissions')->get();

    // dd($permission);
    
    
    //this is for roles & permission add

    // $uni_permission = Permission::where('name','like','university%')->get();
    // $course_permission = Permission::where('name','like','course%')->get();
    // $student_permission = Permission::where('name','like','student%')->get();
    // $type_permission = Permission::where('name','like','payment-types%')->get();
    // $applicant_permission = Permission::where('name','like','applicants%')->get();
    // $report_permission = Permission::where('name','like','reports%')->get();
    // $company_permission = Permission::where('name','like','company%')->orWhere('name','like','payment-types%')->get();

    //end of the roles & permission 

    // $courses = Course::orderby('id','desc')->get();
    // $university = University::all();
    return view('new.Settings', compact('page','cp','page_main','category','Paymenttypes','status','emgs_status','payment_status','enquiry_status','users','roles','permission','role_permissions'));
 }

 public function category_store(Request $request)
 {

    $recordId = $request->input('editId');
    if($recordId) {
        //update  code

        $request->validate([
        'category_name'        => 'required|unique:categories,name,'.$recordId,
        'category_name_arabic' => 'required',
        ]);

        $data = Category::find($recordId);

        $data->name = $request->category_name;
        $data->name_arabic = $request->category_name_arabic;

        if($request->file('category_photo')){
            $request->validate([ 'category_photo' => 'required|mimes:jpg,png,jpeg|max:2048',]);

            $file = $request->file('category_photo');
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
        return back()->with(['s_success' => 'Course category updated successfully !','active_tab' => 2]);


    }else{

        //insert record 

          //insert hole code 
                // inputs validation validation 
                $request->validate([
                    'category_name'        => 'required|unique:categories,name',
                    'category_name_arabic' => 'required',
                    'category_photo'       => 'required|mimes:jpg,png,jpeg|max:2048',
                    ]);
            

                //Photo validation & upload 
                if($request->category_photo != ''){
                $request->validate([ 'category_photo' => 'required|mimes:jpg,png,jpeg|max:2048',]);
                $Photo = time().'_'.$request->category_photo->getClientOriginalName().'.'.$request->category_photo->extension();
                $request->category_photo->move(public_path('uploads'),$Photo);
                }else{ $Photo = ''; }  


                //data insertion 
                Category::create([
                    'name' => $request->category_name,
                    'name_arabic' => $request->category_name_arabic,
                 

                    // 'ar_address' => $request->arabic_address,
                    // 'ar_remarks' => $request->arabic_remarks,

                    'photo' => $Photo,
                ]);

                return back()->with(['s_success' => 'Category added successfully !','active_tab' => 2]);

            
    }

 }

 public function fetchcatRecord($id){
    $record = Category::find($id);
    return response()->json(['success' => true, 'data' => $record]);
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
        return back()->with(['s_success' => 'Category deleted successfuly !' , 'active_tab' => 2]);

    }else{
        return back()->with(["s_success" => "This category alredy used in a course , so that can't delete this category", 'active_tab' => 2]);
    }
}

public function org_store(Request $request){

    $request->validate([
    'org_name' => 'required',
    'org_email' => 'required',
    'org_phone' => 'required',
    'org_address' => 'required',
    'org_description' => 'required',
    ]);

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

    $company->name = $request->org_name;
    $company->email = $request->org_email;
    $company->phone = $request->org_phone;
    $company->address = $request->org_address;
    $company->description = $request->org_description;

    $company->save();
    return back()->with('s_success','Orginisation Information updated successfully..!');

}

public function payType_store(Request $request){
      // inputs validation validation 
      $request->validate([ 'types' => ['required'],]);
      //die($request);

      //data insertion 
      PaymentCategory::create([
          'type' => $request->types,
          'entry_id' => Auth::user()->id,
      ]);

    return back()->with(['s_success'=>'Payment Type created successfully !','active_tab' => 3]);
}

public function delete_Paymenttype(Request $request , $id){

    if (
        Payment::where('type', $id)->exists() ||
        Student_Payment::where('type', $id)->exists() ||
        Commission::where('type', $id)->exists()
    ) {
        return back()->with(['s_success'=>'Payment Status cannot be deleted because it is associated with one or more students.', 'active_tab' => 3]);
    }

    $data = PaymentCategory::find($id);
    $data->delete();
    return back()->with(['s_success' => 'Payment Type Deleted successfully !','active_tab' => 3]);
}


//status settings controller 
public function application_store(Request $request){
     // inputs validation validation 
     $request->validate([ 'status' => ['required'],]);
     //die($request);

     //data insertion 
     Status::create([
         'status' => $request->status,
         'entry_id' => Auth::user()->id,
     ]);

     return back()->with(['s_success'=>'Status created successfully !','active_tab' => 4]);
}


public function delete_status(Request $request , $id){
    if (Student::where('status_id', $id)->exists()) {
        return back()->with(['s_success'=>'This Status cannot be deleted because it is associated with one or more students.', 'active_tab' => 4]);
    }

    $data = Status::find($id);
    $data->delete();
    return back()->with(['s_success'=>'Status Deleted successfully !','active_tab' => 4]);
}



public function EMG_store(Request $request){
    // inputs validation validation 
    $request->validate([ 'status' => ['required'],]);
   //die($request);

   //data insertion 
   EMGS_Status::create([
       'status' => $request->status,
       'entry_id' => Auth::user()->id,
   ]);

   return back()->with(['s_success'=>'EMGS Status created successfully !','active_tab' => 4]);
}


public function EMG_delete_status(Request $request , $id){
    if (Student::where('emg_status', $id)->exists()) {
        return back()->with(['s_success'=>'EMGS Status cannot be deleted because it is associated with one or more students.', 'active_tab' => 4]);
    }

    $data = EMGS_Status::find($id);
    $data->delete();
    return back()->with(['s_success'=>'EMGS Status Deleted successfully !','active_tab' => 4]);
}

public function payment_store(Request $request){
    // inputs validation validation 
    $request->validate([ 'status' => ['required'],]);
   //die($request);

   //data insertion 
   StudentPaymentStatus::create([
       'status' => $request->status,
       'entry_id' => Auth::user()->id,
   ]);

   return back()->with(['s_success'=>'Payment Status created successfully !','active_tab' => 4]);
}


public function payment_delete_status(Request $request , $id){

    if (Student::where('payment_status', $id)->exists()) {
        return back()->with(['s_success'=>'Payment Status cannot be deleted because it is associated with one or more students.', 'active_tab' => 4]);
    }
    $data = StudentPaymentStatus::find($id);
    $data->delete();
    return back()->with(['s_success'=>'Payment Status Deleted successfully !','active_tab' => 4]);
}

//enquiry status 
public function enquiry_status_store(Request $request){
    // inputs validation validation 
    $request->validate([ 'status' => ['required'],]);
   //die($request);

   //data insertion 
   ENQ_Status::create([
       'status' => $request->status,
       'entry_id' => Auth::user()->id,
   ]);

   return back()->with(['s_success'=>'Enquiry Status created successfully !','active_tab' => 4]);
}

public function enquiry_delete_status(Request $request , $id){

    if (Student::where('enq_status', $id)->exists()) {
        return back()->with(['s_success'=>'Enquiry Status cannot be deleted because it is associated with one or more students.', 'active_tab' => 4]);
    }
    $data = ENQ_Status::find($id);
    $data->delete();
    return back()->with(['s_success'=>'Enquiry Status Deleted successfully !','active_tab' => 4]);
}

//end of the all status methods

public function user_store(Request $request){
    // dd($request->all());

    $recordId = $request->input('editId');
    //dd($recordId);
    if($recordId) {

         //update code
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $recordId],
                'phone' => ['required'],
                'password' => ['nullable', 'confirmed', 'min:4'], // Mark password as nullable
                'photo' => ['nullable', 'mimes:jpg,png,jpeg', 'max:2048'],
                'role' => ['required'],
            ]);
            
            $user = User::find($recordId);
            // Password Handling
            $pass = $request->password ? Hash::make($request->password) : $user->password;
            
            // Photo Handling
            if ($request->photo) {
                if ($user->profile) {
                    $path = public_path('uploads/' . $user->profile);
                    unlink($path);
                }
            
                $photoName = time() . '_' . $request->photo->getClientOriginalName() . '.' . $request->photo->extension();
                $request->photo->move(public_path('uploads'), $photoName);
            } else {
                $photoName = $user->profile;
            }
            
            // Update User
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'number' => $request->phone,
                'password' => $pass, // Update password if provided
                'profile' => $photoName,
            ]);
            
            $user->syncRoles([$request->role]);
            
            return back()->with(['s_success' => 'User Data updated successfully!', 'active_tab' => 5]);
        
    

    }else{

           // Insert code
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'phone' => ['required'],
                'password' => ['required', 'confirmed', 'min:4'],
                'photo' => ['nullable', 'mimes:jpg,png,jpeg', 'max:2048'], // Mark the 'photo' field as nullable
                'role' => ['required'],
            ]);

            // Handle photo upload if provided
            if ($request->hasFile('photo')) {
                $Photo = time() . '_' . $request->photo->getClientOriginalName() . '.' . $request->photo->extension();
                $request->photo->move(public_path('uploads'), $Photo);
            } else {
                $Photo = null; // If no photo is provided, set it to null or any default value you prefer
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'number' => $request->phone,
                'password' => Hash::make($request->password),
                'email_verified_at' => now(),
                'profile' => $Photo,
            ]);

            $user->assignRole($request->role);

            return back()->with(['s_success' => 'User Account created Successfully !' ,'active_tab' => 5]);

    }
}


public function fetchcatUserRecord($id){
    $record = User::find($id);
    
    return response()->json(['success' => true, 'data' => $record , 'role' => $record->roles->first()->id ]);
}


//this is the roles and permission entry part

public function role_permission(Request $request){
    $role = Role::create(['name' => $request->role]);
    $role->syncPermissions($request->input('permissions'));
    return back()->with(['s_success' => 'Permissions assigned to role !' , 'active_tab' => 6]);
}

//fetch role and permission record 
public function role_user_permission($role_id){
  
    // die($uni_permission);
    $role_permission = Role::find($role_id)->permissions()->get();
    $role = Role::find($role_id);

    return response()->json(['success' => true, 'role' => $role_permission , 'role_name' => $role ]);
}


public function role_permission_update(Request $request){
    $role = Role::findOrFail($request->id);
    $role->name = $request->role;
    $role->save();
    $role->syncPermissions($request->input('permissions'));
    
    return back()->with(['s_success' => 'Role and permissions updated!', 'active_tab' => 6]);
}

public function role_permission_delete(Request $request , $id){

    $role = Role::findOrFail($id);

    // Check if the role is assigned to any user
    $usersWithRole = User::whereHas('roles', function ($query) use ($role) {
        $query->where('name', $role->name);
    })->get();

    if ($usersWithRole->isEmpty()) {
        // No users are assigned this role, so it can be safely deleted
        $role->delete();
        return back()->with(['s_success' => 'Role deleted successfully','active_tab' => 6]);
    } else {
        return back()->with(['s_success' => 'Role is assigned to one or more users. Cannot delete.','active_tab' => 6]);
    }
}




}

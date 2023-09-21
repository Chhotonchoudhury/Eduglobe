<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\Models\Companyprofile;
use Illuminate\Support\Facades\Session;

class UsersManageController extends Controller
{
    //
    public function index(){
        $page_main = "User";
        $page = "User List";
        $cp = Companyprofile::first();

        $users = User::orderBy('id','DESC')->get();
        $user =  User::find(Auth::user()->id);
        return view('user_list',compact('users','user','cp','page','page_main'));      
    }

    public function store(Request $request){

        //die($request->phone);
        //dd($request->all());

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'type' => ['required'],
            'phone' => ['required'],
            'password' => ['required', 'confirmed', 'min:4'],
            'photo' => ['required','mimes:jpg,png,jpeg', 'max:2048'],
            'role' => ['required'],
        ]);

        // die($request->all());
        // die($request->phone);
        $Photo = time().'_'.$request->photo->getClientOriginalName().'.'.$request->photo->extension();
        $request->photo->move(public_path('uploads'),$Photo);

        // dd($request->type);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'number' => $request->phone,
            'password' => Hash::make($request->password),
            'email_verified_at' => now(),
            'profile' => $Photo,
        ]);
        $user->assignRole($request->role);
        return redirect()->back()->with('s_success' , "User Acccount created Successfully !");
    }

    public function edite(Request $request, $user_id){
        $page_main = "User";
        $page = "User Edite";
        $cp = Companyprofile::find(1);

        $user = User::find($user_id);
        $roles=Role::get();
        return view('user_edite',compact('roles','user','cp','page','page_main'));
    }

    public function edite_data(Request $request){
        // dd($request->user_type);
        /*validation

        //then insert all the records
        with there own data
        
        */
        //validation 
        $user = User::find($request->id);
        if($request->photo && $request->password){
            //validation1
           
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id.','],
                'type' => ['required'],
                'phone' => ['required' ],
                'password' => ['required', 'confirmed', 'min:4'],
                'photo' => ['required','mimes:jpg,png,jpeg', 'max:2048'],
                'role' => ['required'],
            ]);

         }elseif($request->password){
             //validation2
             
             $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id.','],
                'type' => ['required'],
                'phone' => ['required' ],
                'password' => ['required', 'confirmed', 'min:4'],
                'role' => ['required'],
            ]);

         }elseif($request->photo){
               //validation3
               
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id.','],
                'type' => ['required'],
                'phone' => ['required'],
                'photo' => ['required','mimes:jpg,png,jpeg', 'max:2048'],
                'role' => ['required'],
            ]);

         }else{

            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id.','],
                'type' => ['required'],
                'phone' => ['required'],
                'role' => ['required'],
            ]);
          }
         //validation complete
         
         //now storing information about the image and password
          if($request->password){
             $pass = Hash::make($request->password);
          }else{
            $pass = $user->password;
          }

        if($request->photo != ''){
           if($user->profile){
            $path = public_path('uploads/'.$user->profile);
            unlink($path);
           }
        $Photo = time().'_'.$request->photo->getClientOriginalName().'.'.$request->photo->extension();
        $request->photo->move(public_path('uploads'),$Photo);
        }else{  $Photo = $user->profile ;   }
         
        //simple update the records
        // die($request->type);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'number' => $request->phone,
            'password' => $pass,
            'profile' => $Photo,
        ]);
        $user->syncRoles([$request->role]);

        return redirect()->route('userList')->with("s_success","User Data updated successfully !");
        
    }


    public function user_role(){
        $page_main = "Roles";
        $page = "Role List";
        $cp = Companyprofile::find(1);

        $permission = Permission::get();
        $role_permissions = Role::with('permissions')->get();
        //die($role_permissions->permissions->pluck('name'));
        return view('roles_list',compact('role_permissions','permission','cp','page','page_main'));
    }

    public function user_permission(Request $request, $role_id){
        $page_main = "Roles";
        $page = "Permissions assign";
        $cp = Companyprofile::find(1);
        $role = Role::find($role_id);

        $uni_permission = Permission::where('name','like','university%')->get();
        $course_permission = Permission::where('name','like','course%')->get();
        $student_permission = Permission::where('name','like','student%')->get();
        $type_permission = Permission::where('name','like','payment-types%')->get();
        $applicant_permission = Permission::where('name','like','applicants%')->get();
        $report_permission = Permission::where('name','like','reports%')->get();
        $company_permission = Permission::where('name','like','company%')->orWhere('name','like','payment-types%')->get();
        $permission = Permission::get();
        // die($uni_permission);
        $role_permission = Role::find($role_id)->permissions()->get();
        return view('roles_permission',compact('cp','role','permission','uni_permission','course_permission','student_permission','type_permission','applicant_permission','report_permission','company_permission','role_permission','page_main','page'));
    }

    public function permission_assign(Request $request){
        $role = Role::find($request->role);
        //dd($request->role);
        $role->syncPermissions($request->input('permissions'));
       return redirect()->route('userRoles')->with("s_success","Permissions assigned to role !");
    }

    //add new roles & permissions

    public function store_role(Request $request){
        //validation 
        $request->validate([
            'role' => 'required|unique:roles,name',
        ]);

        //store role 
        $role = Role::create(['name' => $request->role]);

        return back()->with("s_success","Role Created Successfully..!");
    }
    
  //THis is for admin login into the user dashboard as user 

    public function loginAsUser(Request $request, $id){
        $user = User::find($id);
        // Store the ID of the current user in the session
        Session::put('admin_user_id', Auth::id());
        Auth::login($user);
        // Redirect the user back to the previous page
        return redirect('/dashboard');
   }

   //The admin login back to his dashoard as admin 
   public function backToAdminDashboard(){
        // Get the ID of the admin user from the session
        $adminUserId = Session::get('admin_user_id');
        session()->forget('admin_user_id');
        Auth::loginUsingId($adminUserId);
        // Redirect the user to the admin dashboard
        return redirect('/dashboard');
    }
    
}

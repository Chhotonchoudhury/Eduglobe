<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\University;
use App\Models\Course;
use App\Models\Student;
use App\Models\Degree;

use App\Models\Payment;
use App\Models\Commission;
use App\Models\Student_Payment;
use App\Models\PaymentCategory;

use Spatie\Permission\Models\Role;
use App\Models\Companyprofile;
use Spatie\Permission\Models\Permission;
Use Spatie\Permission\Traits\HasRoles;
use App\Models\Status;


class Admincontroller extends Controller
{
    //shoing dashboard
    public function dashboard(){
        $page_main = "Dashboard";
        $page = "Dashboard";
        
        //this is  students number for users acept admin(For User) 
        $user_students = Student::where('verify','=', 1)->where('refer_to' , '=' , Auth::user()->id)->get();
        $total_user_students = $user_students->count();
        
        //total enquery list for user accept  (For user)
        $total_enq = Student::where('entry_id' , '=' , Auth::user()->id)->where('refer_to', '=', null)->get(); 
        $total_user_enq_list = $total_enq->count();
        
        //total confirm queries for user accept admin(For user)
        $user_con_enq = Student::where('entry_id' , '=' , Auth::user()->id)->where('verified_by', '!=', null)->whereNotIn('verify', [1])->get(); 
        $total_user_con_enq = $user_con_enq->count();
        
        //total processing student for user except the admin(For User)
        $user_process =  Student::where('refer_to' , '=' , Auth::user()->id)->where('process_status','=', 1)->get(); 
        $total_user_process = $user_process->count();
        
        //latest queries list(For User)
        $user_latest_enq_list = Student::where('entry_id' , '=' , Auth::user()->id)->whereNotIn('verify', [1])->orderBy('id', 'DESC')->take(5)->get(); 
        
        //latest processing list (For User)
        $user_latest_process_list =  Student::where('refer_to' , '=' , Auth::user()->id)->where('process_status','=', 1)->orderBy('id', 'DESC')->take(5)->get(); 
        
        //this is section for admin part
        
        //total enquery list for user accept  (For admin)
        $user_enq = Student::where('refer_to', '=', null)->get(); 
        $total_user_enq = $user_enq->count();
        
        // //total agent use/
        // $agentrole = Role::where('name', 'agent')->first();
        // // Get all users with the desired role
        // $agentCount = User::whereHas('roles', function($query) use ($agentrole) {
        //                     $query->where('role_id', $agentrole->id);
        //                 })->count();
                        
        // //total stuff use/
        // $stuffrole = Role::where('name', 'stuff')->first();
        // // Get all users with the desired role
        // $stuffCount = User::whereHas('roles', function($query) use ($stuffrole) {
        //                     $query->where('role_id', $stuffrole->id);
        //                 })->count();
        
        //This is the student registration chart
        
        $currentYear = date('Y'); 
        $studentChart = DB::table('students')
        ->select(DB::raw('MONTH(created_at) as month'),
                 DB::raw('YEAR(created_at) as year'),
                 DB::raw('SUM(IF(entry_id IS NULL, 1, 0)) as online_count'),
                 DB::raw('SUM(IF(entry_id IS NOT NULL, 1, 0)) as employee_count'))
        ->groupBy('year', 'month')
        ->orderBy('year', 'asc')
        ->orderBy('month', 'asc')
        ->get();
        
        //end of the chart data
        
        $cp = Companyprofile::first();

        $uni =  University::all();
        $uni_total = $uni->count();

        $cor =  Course::all();
        $cor_total = $cor->count();

        $stu =  Student::all();
        $stu_total = $stu->count();


        $pay = Payment::all()->sum('amount');
        $commission = Commission::all()->sum('amount');
        $stu_payment = Student_Payment::all()->sum('amount');

        $s =  Student::where('process_status','=', 1)->get();
        $s_total = $s->count();

        $topcourse = Student::whereNotNull('course_id')->select('course_id')->selectRaw('count(course_id) as qty')
        ->groupBy('course_id')
        ->orderBy('qty', 'DESC')
        ->take(10)
        ->get();

        $topuniversity = Student::whereNotNull('university_id')->select('university_id')->selectRaw('count(university_id) as qty')
        ->groupBy('university_id')
        ->orderBy('qty', 'DESC')
        ->take(10)
        ->get();
        
        //latest enquries
        
        $enquiryList = Student::orderBy('id', 'DESC')->take(10)->get();

        //student payment list 
        $stupaylist = Student_Payment::orderBy('id', 'DESC')->take(10)->get();

        //student by status
        // Retrieve all statuses with their associated student counts
        $statuses = Status::withCount('students')->get();

        // Prepare the data for the chart
        $chartStatus = $statuses->map(function ($status) {
            return [
                'name' => $status->status, // Assuming 'name' is the field representing the status name
                'value' => $status->students_count,
            ];
        }); 


        //student registration charts
        // Get the current year
        $nowYear = date('Y');

        // Create an array to hold the data for all months of the year
        $stuChartData = [];

        // Loop through each month of the year and fetch student data for that month
        for ($month = 1; $month <= 12; $month++) {
            $monthName = date('M', mktime(0, 0, 0, $month, 1, $nowYear));

            // Fetch student data for the current month
            $studentCount = Student::whereYear('created_at', $nowYear)
                ->whereMonth('created_at', $month)
                ->count();

            // Add data for the current month to the stuChartData array
            $stuChartData[] = [
                'country' => $monthName,
                'visits' => $studentCount,
            ];
        }


        $piechart = DB::select(DB::raw("select count(*) as total_city, country from students group by country"));
        $piechartdata = "";
        foreach($piechart as $list){
            $piechartdata.="['".$list->country."', ".$list->total_city."],";
        }
        $piearr = rtrim($piechartdata, ",");
        
      

        return view('new.dashboard', compact('page_main','page','cp','uni_total','cor_total','stu_total','pay','commission','stu_payment','s_total','total_user_enq','studentChart','enquiryList','stupaylist','topcourse','topuniversity','piearr','total_user_students','total_user_enq_list','total_user_con_enq','total_user_process','user_latest_enq_list','user_latest_process_list','chartStatus','stuChartData')); 
    }//end method
    
    //student cahrt filter 
    
     public function getStudentsData($filter){

            $currentYear = date('Y');
            $studentChart = DB::table('students')
                ->select(DB::raw('MONTH(created_at) as month'),
                        DB::raw('YEAR(created_at) as year'),
                        DB::raw('SUM(IF(entry_id IS NULL, 1, 0)) as online_count'),
                        DB::raw('SUM(IF(entry_id IS NOT NULL, 1, 0)) as employee_count'))
                ->groupBy('year', 'month')
                ->orderBy('year', 'asc')
                ->orderBy('month', 'asc');

            if ($filter == 'month') {
                $studentChart->whereMonth('created_at', '=', date('m'))
                            ->whereYear('created_at', '=', $currentYear);
            } elseif ($filter == 'year') {
                $studentChart->whereYear('created_at', '=', $currentYear);
            } elseif ($filter == 'all') {
                // do not filter by year or month
            }

            $chartData = $studentChart->get();
            return response()->json($chartData);
    }
    
    //end of the student chart filter 

    //direct search section 
    public function direct_search(Request $request){
        $cp = Companyprofile::find(1);
        $page_main = "Dashboard";
        $page = "Search";
        $key = $request->search_string;

        $course_data = Course::where('name','like','%'.$request->search_string.'%')
        ->orwhere('course_degree','like','%'.$request->search_string.'%')
        ->orderBy('id','desc')->get();

        $university_data = University::where('name','like','%'.$request->search_string.'%')
        ->orwhere('Unumber','like','%'.$request->search_string.'%')
        ->orderBy('id','desc')->get();

        $student_data = Student::where('name','like','%'.$request->search_string.'%')
        ->orwhere('phone','like','%'.$request->search_string.'%')
        ->orwhere('email','like','%'.$request->search_string.'%')
        ->orwhere('country','like','%'.$request->search_string.'%')
        ->orderBy('id','desc')->get();

        return view('search_result', compact('page_main','page','cp','course_data','university_data','student_data','key'));
    }
    //end of the direct search section

    //this section is for setting notification
    public function set_notification(Request $request){
        $data = Student::find($request->id);
        $data->notify = $request->msg;
        $data->save();
        return back()->with('s_success','Notification set successfully !');
    }
    //end of the notification

    //delete notification
        public function delete_notification(Request $request , $id){
            $data = Student::find($id);
            $data->notify ='';
            $data->save();
            return back()->with('s_success','Notification deleted successfully !');
        }
    //delete notification end

    //get user info and show in profile page
    public function profile(){
        $page_main = "User";
        $page = "Profile";
        $cp = Companyprofile::find(1);

        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('profile', compact('adminData','cp','page_main','page'));
    }//end method

    // for showing the edite pofile page
    public function Editeprofile(){
        $page_main = "User";
        $page = "Profile Update";
        $cp = Companyprofile::find(1);

        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('profile_edite', compact('adminData','cp','page','page_main'));
    } //end method

    //update the profile info
    public function StoreProfile(Request $request){
        //validation 
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);


        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->number = $request->phone;

        if($request->file('profile')){
            $file = $request->file('profile');

            if($data->profile){
                unlink(public_path('uploads/'.$data->profile));
            }

            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads'),$filename);
            $data['profile'] = $filename;
        }
        $data->save();

        return redirect()->route('admin.profile');

    } //end method


    public function password(){
        $page_main = "User";
        $page = "Password Reset";
        $cp = Companyprofile::find(1);

        return view('passwordreset', compact('page','cp','page_main'));
    }

    public function password_change(Request $request){
        //validation 
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        //Match the old password
        if(!Hash::check($request->old_password,Auth()->user()->password)){
            return back()->with("error","Old Password Dosen't match!");
        }

        //update password

        $user = User::find(Auth()->user()->id);
        $user->update([
            'password' => Hash::make($request->new_password),
            'password_word' => $request->new_password,
        ]);
        return back()->with("success","Password Changed successfully !");
    }
}

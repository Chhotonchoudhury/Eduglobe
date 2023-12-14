<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymenttypeController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\UsersManageController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\WebsiteRequestController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
//** this is the language route for language **/
Route::controller(LocalizationController::class)->group(function () {
 Route::get('lang/english', 'lang_en')->name('Langen');
 Route::get('lang/arabic', 'lang_ar')->name('Langar');
});
//** End of the language controller */

//************ This is the frontend section ***** * */

Route::controller(FrontendController::class)->group(function () {
 Route::get('/home', 'Index')->name('home');
 Route::get('/all-courses', 'Courses')->name('browse.course');
 Route::get('/courses-seacrh', 'Course_search')->name('search.courses');

 //direct search
 Route::get('/find-course/{string}', 'direct_search')->name('search.direct');
 //category courses
 Route::get('/category-courses/{category}', 'category_course')->name('search.category');
 //course pagination
 Route::get('/courses-pagination', 'pagination');
 //course pagination end
 Route::get('/courses-seacrhes', 'search')->name('searches.courses');
 //about page
 Route::get('/about', 'About')->name('about');
 //contact page
 Route::get('/contact', 'Contact')->name('contact');
 //course details page
 Route::get('/course-preview/{id}', 'Preview')->name('preview');

 //this is all about the list of the university
 Route::get('/all-university', 'university')->name('browse.university');
 //university pagination
 Route::get('/university-pagination', 'uni_pagination');
 //university search
 Route::get('/university-seacrh', 'university_search')->name('search.university');

 //university preview page
 Route::get('/university-preview/{id}', 'universty_view')->name('university.preview');
 //Feedback sections
 Route::post('/feedback', 'feedback')->name('feedback');

});

Route::get('/', function () {return view('app_website.home');})->name('app.home');
Route::get('/App-about', function () {return view('app_website.about');})->name('app.about');
Route::get('/App-contact', function () {return view('app_website.contact');})->name('app.contact');
Route::get('/App-demos', function () {return view('app_website.demos');})->name('app.demos');
Route::get('/App-services', function () {return view('app_website.services');})->name('app.services');
Route::post('/App-demo-request', [ WebsiteRequestController::class, 'demo_request' ])->name('demo.request');
Route::post('/New-App-request', [ WebsiteRequestController::class, 'new_request' ])->name('Newapp.request');
Route::post('/App-contact-request', [ WebsiteRequestController::class, 'contact_request' ])->name('AppContact.request');
Route::post('/App-suscribe', [ WebsiteRequestController::class, 'sub' ])->name('sub.request');
//********End of the frontend route sections******/

/**************************Students route*********************************/
Route::prefix('student')->controller(StudentsController::class)->group(function () {
 Route::get('/login', 'Index')->name('student_login_form');
 Route::post('/login/owner', 'login')->name('student_login');
 Route::get('/registration', 'regestration')->name('student_registration_form');
 Route::post('/registration-create', 'regestration_create')->name('student_registration');

});

Route::prefix('student')->middleware([ 'student' ])->controller(StudentsController::class)->group(function () {

//this section is for send notification mail to user
// Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])->name('student.verification.notice');
// Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])->middleware(['signed', 'throttle:6,1'])->name('student.verification.verify');
// Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('student.verification.send');
//End of the notification section

 Route::get('/dashboard', 'Dashboard')->name('student_dashboard');
 Route::get('/profile', 'profile')->name('student_profile');
 Route::get('/edite/profile', 'Editeprofile')->name('student_edite_profile');
 Route::post('/store/profile', 'StoreProfile')->name('student_store_profile');

// this routes for change the password
 Route::get('/password-change', 'password')->name('student_password.form');
 Route::post('/password-update', 'password_change')->name('student_pass.reset');

// This is th student profile update
 Route::post('/profile-update', 'profileupdate')->name('profile.update');

//student document upload section for use to
 Route::post('/doc-upload', 'docupload')->name('doc.upload');

//upload documents upload section
 Route::get('/student-single-download/{id}', 'StudentDocDownload')->name('student.doc.download');

//upload documents upload section
 Route::get('/student-single-delete/{id}', 'StudentDocDelete')->name('student.doc.delete');

});

Route::prefix('student')->middleware([ 'student' ])->controller(CoursesController::class)->group(function () {

 Route::get('/courses', 'index')->name('student_courses');
 Route::get('/course-view/{id}', 'show')->name('s_course_view');
 //this route is student approve the course
 Route::post('/course-approve', 'course_approve')->name('s_course_approve');
 //end of the route section
 Route::get('/suggetions-courses', 'suggetion_course')->name('student_suggetion');

 //course pagination
 Route::get('/course-pagination', 'pagination');
 //course pagination end

 //course search section for use it
 Route::get('/course-seacrh', 'search')->name('search.course');
 //course search section end

 //This is for download the pdfs
 Route::get('/courses-pdf/{id}', 'courses_pdf')->name('courses.pdf');
 Route::get('/courses-uploaded-pdf/{id}', 'courses_uploaded_pdf')->name('courses_uploaded.pdf');

});

/************************end dtudent  route********************************/

Route::middleware([ 'auth', 'verified' ])->controller(Admincontroller::class)->group(function () {
 Route::get('/dashboard', 'dashboard')->name('dashboard');
 Route::get('/admin/profile', 'profile')->name('admin.profile');
 Route::get('/edite/profile', 'Editeprofile')->name('edite.profile');
 Route::post('/store/profile', 'StoreProfile')->name('store.profile');

 // this routes for change the password
 Route::get('/password-change', 'password')->name('password.form');
 Route::post('/password-update', 'password_change')->name('pass.reset');

 //this is for topnav search functionality
 Route::get('/direct-search', 'direct_search')->name('direct.search');
 //end of the dashboard search functionality

 //student notification end
 Route::get('/students/{filter}', 'getStudentsData')->name('studentChartFilter');

});

Route::middleware([ 'auth' ])->controller(CompanyController::class)->group(function () {
 Route::get('/company', 'index')->name('company');
 
 // Route::get('/admin/profile', 'profile')->name('admin.profile');
 // Route::get('/edite/profile', 'Editeprofile')->name('edite.profile');
 // Route::post('/store/profile', 'StoreProfile')->name('store.profile');

 // this routes for change the password
 // Route::get('/password-change', 'password')->name('password.form');
 // Route::post('/password-update', 'password_change')->name('pass.reset');

});

Route::middleware([ 'auth' ])->controller(DegreeController::class)->group(function () {
 //add university add
 Route::post('/degree-add', 'store')->name('store.degree');
 // Route::post('/degree-list', 'list')->name('list.degree');
 Route::get('/university-view/edite-degree/{id}', 'edite');
 Route::post('/university-view/degree-update/{id}', 'update');
 Route::delete('/university-view/degree-delete/{id}', 'delete');
 Route::get('/university-view/degree-show/{id}', 'show');

 Route::get('/university-course-edite/{id}', 'coure_edite')->name('coure.edite');
 Route::post('/university-course-update', 'course_update')->name('course.update');
 Route::get('/university-course-delete/{id}', 'course_delete')->name('course.delete');
 // Route::post('/university-store', 'store')->name('store.uni');
 // Route::get('/university-list', 'list')->name('list.uni');
 // Route::get('/university-view/{id}','view')->name('view.uni');
 // Route::get('/university-edite/{id}','edite')->name('edite.uni');
 // Route::post('/university-update', 'update')->name('update.uni');
 // Route::get('/university-delete/{id}', 'delete_uni')->name('delete.uni');
});

Route::middleware([ 'auth' ])->controller(UniversityController::class)->group(function () {
 //add university add
 Route::get('/university-add/{data?}', 'add')->name('uni.add');
 Route::post('/university-store', 'store')->name('store.uni');
 Route::get('/university-list', 'list')->name('list.uni');

 Route::get('/university-view/{id}', 'view')->name('view.uni');
 // Route::get('/university-edite/{id}','edite')->name('edite.uni');
 Route::post('/university-update', 'update')->name('update.uni');
 Route::get('/university-delete/{id}', 'delete_uni')->name('delete.uni');

 Route::post('/uni-course-update', 'Course_update')->name('cor.update.uni');


 Route::post('/uni-student-update', 'Student_update')->name('stu.update.uni');

 //university course delete
 Route::get('/uni-course-delete/{id}', 'Course_delete')->name('uni.delete.cor');

 //feth uni record for get the data
 Route::get('/uni-record/{id}', 'fetchRecord')->name('fetch.uni.record');

 //this is for get information of the courses related to university 
 Route::get('/uni-course-record/{id}', 'fetchCourseRecord')->name('uni.course.record');

 //this is for get information of the student related to university 
 Route::get('/uni-student-record/{id}', 'fetchStudentRecord')->name('uni.student.record');

});

// this all routes for course controller section
Route::middleware([ 'auth' ])->controller(CourseController::class)->group(function () {

 //this is the course category section

 //end of the course category section

 //add university add
 Route::get('/courses', 'index')->name('cor');
 Route::post('/course-store', 'store')->name('store.cor');


 Route::post('/course-requre', 'requre_store')->name('req_store.cor');
  //feth uni record for get the data
 Route::get('/req-fetch/{id}', 'fetchReq')->name('req.fetch');
 Route::post('/course-requre-update', 'requre_update')->name('req_update.cor');
 Route::get('/course-requre-delete/{id}', 'requre_delete')->name('req_delete.cor');

 Route::get('/course-view/course-requirement/{id}', 'c_require')->name('cor.require');

 Route::get('/course-view/{id}', 'c_view')->name('view.cor');
 Route::get('/course-edite/{id}', 'edite')->name('edite.cor');
 Route::post('/course-update', 'update')->name('update.cor');
 Route::get('/course-delete/{id}', 'delete')->name('delete.cor');

 //PDF GENERATION FOR USE CASE
 Route::post('/course-pdf-store', 'course_pdf_store')->name('course.pdf.design');

 //pdf upload
 Route::post('/course-pdf-upload', 'course_pdf_upload')->name('course.pdf.upload');

 //activation of doc
 Route::post('/course-pdf-activation', 'course_pdf_active')->name('course.pdf.active');


 Route::post('/upload', 'uploadimage')->name('ckeditor.upload');

});

Route::controller(CourseController::class)->group(function () {

 //This is the course category section
 //End of the course category section
 //Add university add

 Route::get('/course-pdf/{id}', 'course_pdf')->name('course.pdf');
 Route::get('/course-uploaded-pdf/{id}', 'course_uploaded_pdf')->name('course_uploaded.pdf');
});

//***** This is settings controller ***//
Route::middleware([ 'auth' ])->controller(SettingsController::class)->group(function () {

 Route::get('/settings', 'index')->name('settings');
 Route::post('/settings-category-store', 'category_store')->name('settings.category.add');
 Route::get('/category-delete/{id}', 'delete')->name('category.delete');

 Route::post('/company-store', 'org_store')->name('company.profile');
 Route::post('/payment-type-store', 'payType_store')->name('store.pay');
 Route::get('/payment-type-delete/{id}', 'delete_Paymenttype')->name('delete.pay');


 //this section is for status section 
 Route::post('/status-store', 'application_store')->name('store.status');
 Route::get('/status-delete/{id}', 'delete_status')->name('delete.status');

 Route::post('/EMGS-status-store', 'EMG_store')->name('emgs.store.status');
 Route::get('/EMGS-status-delete/{id}', 'EMG_delete_status')->name('emgs.delete.status');

 Route::post('/payment-status-store', 'payment_store')->name('payment.store.status');
 Route::get('/payment-status-delete/{id}', 'payment_delete_status')->name('payment.delete.status');

 Route::post('/user-created', 'user_store')->name('userStore');

 //this is the roles and permission entry
 Route::post('/role-permission-entry', 'role_permission')->name('role.permission');
 Route::post('/role-permission-update', 'role_permission_update')->name('role.permission.edite');
 Route::get('/role-permission-delete/{id}', 'role_permission_delete')->name('role.permission.delete');

 //fetch roles and permissions for update 
 Route::get('/role-user-permissions/{role_id}', 'role_user_permission')->name('role.userPermission');

 //feth course category record for update
 Route::get('/category-record/{id}', 'fetchcatRecord')->name('fetch.category.record');
 //fetching user data for update 
 Route::get('/user-record/{id}', 'fetchcatUserRecord')->name('fetch.user.record');

});

//**** End of the settings controller *****/

//this is all the section about course category section
Route::middleware([ 'auth' ])->controller(CategoryController::class)->group(function () {
 //all the payment controller
 Route::get('/course-category', 'index')->name('category');
 Route::post('/category-store', 'store')->name('category.add');
 Route::get('/category-edite/{id}', 'edite')->name('category.edite');
 Route::post('/category-update', 'update')->name('category.update');
 
 // Route::get("/payment-student",  'student');
});
//end of the section of course category section

//this is the mail controller route sections
Route::middleware([ 'auth' ])->controller(MailController::class)->group(function () {
    //this porson start of the mailparts 
    Route::get('/mail-templates', 'mails')->name('mail.list');
    Route::get('/mail-templates-create', 'mailcreate')->name('mail.create');
    Route::post('/mail-tempate-store', 'mailstore')->name('mail.store'); 
    
    Route::get('/mail-template-edite/{id}', 'edite_mail')->name('mail.edite');
    Route::post('/mail-tempate-update', 'mailupdate')->name('mail.update');

    Route::get('/mail-template-show/{id}', 'ShowMailTemplate');
    //endof the mail parts

    

    //mail 

    Route::get('/mail-settings', 'mailsettings')->name('mail.settings');
    Route::patch('/mail-setting-update', 'mailsettingsUpdate')->name('mail.settings.update');
});

//end of the sections 

//this is the student controller section
Route::middleware([ 'auth' ])->controller(StudentController::class)->group(function () {

 //this section is for going to the normal list for any sudent registration
 Route::get('/enquiry-student/{id?}', 'enq_list')->name('enq.stu');
 //this is for student verify update
 Route::get('/student-verify/{sid}/{id}', 'stu_verify')->name('verify.stu.enq');
 //this is for student enquery refer link
 Route::post('/student-refer', 'stu_refer')->name('verify.stu');
 Route::get('/enquery-filter', 'enq_filter')->name('enq.filter');

 //enquiry delete section
 Route::get('/enq-delete/{id}', 'enq_delete_student')->name('enq.delete');

 //End of the section

 //processed student routes 
 Route::get('/processed-students', 'process_stu')->name('process.stu');
 Route::get('/processed-stu-record/{id}', 'fetchstuRecord');
 Route::post('/processed-status-update', 'process_status')->name('process.status');
 //end of the routes 

 Route::get('/student', 'index')->name('stu');
 Route::post('/student-store', 'store')->name('store.stu');

 Route::get('/student-edite/{id}', 'edite')->name('edite.stu');
 Route::post('/student-update', 'update')->name('update.stu');
 Route::get('/student-delete/{id}', 'delete_student')->name('delete.stu');

 Route::get('/student-view/{id}', 'stu_view')->name('view.stu');

 //student qualification route
 Route::post('/student-qualification-store', 'quaifi_store')->name('qualification.stu');
 Route::get('/student-qualification-delete/{id}', 'quaifi_delete')->name('qualification.delete');
 //end of the route

  //student Notification
  Route::post('/set-notification', 'set_notification')->name('notify.set');
  Route::get('/notification-delete/{id}', 'delete_notification')->name('notify.delete');
  //student notification end

 Route::post('/student-add-course', 'course_add')->name('add_course.stu');
 Route::post('/student-remove-course', 'course_remove')->name('remove_course.stu');
 Route::get('/student-view/stu-cor-view/{id}', 'course_student_view');
 Route::post('/course-search', 'course_search')->name('course.search');

 //this all route is for process
 Route::get('/student-process/{id}', 'student_process')->name('process.student');

 //ths is all the applicent process
 Route::get('/applicant-process', 'applicant_process')->name('applicant.process');
 Route::get('/applicant-status-change/{id}', 'change_status')->name('applicant.status');
 Route::post('/applicant-update-status', 'update_status')->name('applicant.status.change');

 //update EMGS status
 Route::post('/EMGS-update-status', 'update_emgs')->name('emgs.status.change');

 //update Payment status
 Route::post('/payment-update-status', 'update_payment')->name('payment.status.change');

 //Archive student change
 Route::get('/student-archive/{id}', 'student_archive')->name('archive.student');
 //Remove from the archive student list
 Route::get('/student-remoce-archive/{id}', 'archive_remove')->name('archive.remove');

 //student document upload section for use to
 Route::get('/doc-download/{id}', 'docdownload')->name('doc.download');
 //student document delete for reupload
 Route::get('/doc-delete/{id}', 'docdelete')->name('doc.delete');

 //single doc delete 
 Route::get('/single-doc-delete/{id}', 'SingleDocDelete')->name('single.doc.delete');

 //single document download
 Route::get('/single-download/{id}', 'SingleDownload')->name('single.doc.download');

 //this is student activity routes 
 Route::post('/student-activity-add', 'activity_add')->name('stu.activity.add');

 //student payment slip download
 Route::get('/student-pay-slip-download/{id}', 'stu_pay_slip_download')->name('stu.pay.slip.download');

 //student commisiion slip download
 Route::get('/student-commission-slip-download/{id}', 'stu_com_pay_slip_download')->name('stu.com.pay.slip.download');

 //student direct paymnet slip download
 Route::get('/student-payment-slip-download/{id}', 'stu_payment_slip_download')->name('stu.payment.slip.download');
 //custom email send
 Route::post('/customsend-email', 'sendEmail')->name('customsend.email');
});

Route::middleware([ 'auth' ])->controller(StatusController::class)->group(function () {
 //all the status controller
 Route::get('/statuses', 'index')->name('status');

 Route::get('/status-edite/{id}', 'edite')->name('edite.status');
 Route::post('/status-update', 'update')->name('update.status');
 

 //all the status controller are for ENGS Controller
 Route::get('/EMGS-statuses', 'EMG_index')->name('emgs.status');

 Route::get('/EMGS-status-edite/{id}', 'EMG_edite')->name('emgs.edite.status');
 Route::post('/EMGS-status-update', 'EMG_update')->name('emgs.update.status');


 //all the status controller are for payment
 Route::get('/payment-statuses', 'payment_index')->name('payment.status');
 
 Route::get('/payment-status-edite/{id}', 'payment_edite')->name('payment.edite.status');
 Route::post('/payment-status-update', 'payment_update')->name('payment.update.status');
 

});

Route::middleware([ 'auth' ])->controller(PaymenttypeController::class)->group(function () {
 //all the payment controller
 Route::get('/payment-type', 'index')->name('pay');
 
 Route::get('/payment-type-edite/{id}', 'edite')->name('edite.pay');
 Route::post('/payment-type-update', 'update')->name('update.pay');

 Route::get("/payment-student", 'student');
});

Route::middleware([ 'auth' ])->controller(ReportsController::class)->group(function () {
 //all the payment controller
 Route::get('/reports-view', 'Index')->name('Reports.view');
 //Route::post('/reports-search', 'search')->name('Reports.search');
 Route::post('/report-search-result', 'search_fun')->name('search_res');
 Route::get('/reports-report/{id}/{s_date}/{e_date}', 'report_result')->name('reports.result');

 Route::get('/report-student/{id}/{s_date}/{e_date}', 'student_report')->name('reports.student');
 Route::get('/report-course/{id}/{s_date}/{e_date}', 'course_report')->name('reports.course');
 Route::get('/report-degree/{id}/{s_date}/{e_date}', 'degree_report')->name('reports.degree');

 Route::get('/report-commission/{id}/{s_date}/{e_date}', 'commission_report')->name('reports.commission');
 Route::get('/report-payment/{id}/{s_date}/{e_date}', 'payment_report')->name('reports.payment');
 Route::get('/report-student-payment/{id}/{s_date}/{e_date}', 'studentPayment_report')->name('reports.student_payment');
});

Route::middleware([ 'auth' ])->controller(PaymentController::class)->group(function () {
 //all the payment controller
 Route::post('/payment-for-student', 'payment')->name('payment.student');
 Route::get('/payments-list', 'paymentview')->name('payment.view');
 Route::get('/payment-edite/{id}', 'paymentedite')->name('edite.payment');
 Route::post('/payment-update', 'paymentupdate')->name('update.payment');
 Route::get('/payment-delete/{id}', 'paymentdelete')->name('delete.payment');

 Route::post('/commission-for-student', 'commission')->name('commission.student');
 Route::get('/commissions-list', 'commissionview')->name('commission.view');
 Route::get('/commission-edite/{id}', 'commissionedite')->name('edite.commission');
 Route::post('/commission-update', 'commissionupdate')->name('update.commission');
 Route::get('/commission-delete/{id}', 'commissiondelete')->name('delete.commission');

 Route::post('/student-payment', 'student_pay')->name('student.pay');
 Route::get('/student-payment-list', 'student_pay_view')->name('student.payment.view');
 Route::get('/student-payment-edite/{id}', 'student_pay_edite')->name('edite.student_payment');
 Route::post('/student-payment-update', 'student_pay_update')->name('update.student_payment');
 Route::get('/student-payment-delete/{id}', 'student_pay_delete')->name('delete.student_payment');

 //this is the payment infromation section
 Route::get("/payment-info", 'student_info');

 Route::get("/update-payment-info", 'studentUpdate_info');


    //     Route::post('/payment-type-store', 'store')->name('store.pay');
    //     Route::get('/payment-type-edite/{id}','edite')->name('edite.pay');
    //     Route::post('/payment-type-update', 'update')->name('update.pay');
    //     Route::get('/payment-type-delete/{id}', 'delete_type')->name('delete.pay');
    //     Route::get("/payment-student",  'student');
});

//this is the expense routes sections 

Route::middleware([ 'auth' ])->controller(ExpenseController::class)->group(function () {
    Route::get('/expenses', 'Index')->name('expenses');
    Route::post('/expense-store', 'store')->name('store.expense');
    Route::get('/expense-record/{id}', 'fetchRecord')->name('fetch.expense.record');
});

//end of the routes section

// this is all routes for only admin section
Route::middleware([ 'auth', 'role:Admin', 'verified' ])->group(function () {

 Route::get("/users", [ UsersManageController::class, "index" ])->name('userList');
   //  Route::post("/user-created", [ UsersManageController::class, "store" ])->name('userStore');

 Route::get("/user-edite/{user_id}", [ UsersManageController::class, "edite" ])->name('userEdite');
 Route::post("/user-edited", [ UsersManageController::class, "edite_data" ])->name('userUpdate');

 Route::get("/user-roles", [ UsersManageController::class, "user_role" ])->name('userRoles');
    // Route::get("/user-permissions/{role_id}", [ UsersManageController::class, "user_permission" ])->name('userPermission');
   // Route::post("/assign-user-permission", [ UsersManageController::class, "permission_assign" ])->name('givePermission');
  // Route::post("/role-entry", [ UsersManageController::class, "store_role" ])->name('role.entry');

 //Admin login as user
 Route::get('/login-as-user/{id}', [ UsersManageController::class, 'loginAsUser' ])->name('loginAsUser');

});
//Admin come back from the user dashboard and sutomaticaly login
Route::get('/back-to-admin-dashboard', [ UsersManageController::class, 'backToAdminDashboard' ])->middleware([ 'auth' ])->name('AdminbackAsAdmin');
//end of the routes section for access

//This routes for dynamic website section to use identify
Route::middleware([ 'auth' ])->controller(WebsiteController::class)->group(function () {
 //website header backend section
 Route::get('/website-header', 'header')->name('website.header');
 Route::post('/website-header-store', 'header_store')->name('website.header.store');
 Route::get('/website-header-edite/{id}', 'header_edite')->name('website.header.edite');
 Route::post('/website-header-update', 'header_update')->name('website.header.update');
 Route::get('/website-header-delete/{id}', 'header_delete')->name('website.header.delete');
 //website about backend section
 Route::get('/website-about', 'about')->name('website.about');
 Route::post('/website-about-store', 'about_store')->name('website.about.store');
 Route::get('/website-about-edite/{id}', 'about_edite')->name('website.about.edite');
 Route::post('/website-about-update', 'about_update')->name('website.about.update');
 Route::get('/website-about-delete/{id}', 'about_delete')->name('website.about.delete');
 //website work backend section
 Route::get('/website-work', 'work')->name('website.work');
 Route::post('/website-work-store', 'work_store')->name('website.work.store');
 Route::get('/website-work-edite/{id}', 'work_edite')->name('website.work.edite');
 Route::post('/website-work-update', 'work_update')->name('website.work.update');
 Route::get('/website-work-delete/{id}', 'work_delete')->name('website.work.delete');
 //website navbar section backend
 Route::get('/website-navbars', 'navbar')->name('website.navbar');
 Route::post('/website-navbar-store', 'nav_store')->name('website.nav.store');
 //webbsite titles section backend
 Route::get('/website-titles', 'title')->name('website.title');
 Route::post('/website-title-store', 'title_store')->name('website.title.store');
});

//This section use for only the website front-end section

Route::get('/logout', [ AuthenticatedSessionController::class, 'destroy' ])->name('logout');

Route::get('/student/logout', [ StudentsController::class, 'destroy' ])->name('student.logout');

Route::get('/test-mail', function(){

    // $mailConfig = config('mail');
    // dd($mailConfig); // Output the current mail configuration
    $msg = 'This is a testing mail';

    \Mail::raw('Hi, welcome', function($msg){
       $msg->to('cont2chhoton@gmail.com')
       ->subject('testing mail');
    });
    dd('sent');
    // dd(config('custom_mail_config.password'));
});

require __DIR__ . '/auth.php';

require __DIR__ . '/Studentauth.php';

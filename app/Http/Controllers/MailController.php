<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MailSetting;
use App\Models\MailTemplate;
use App\Models\Companyprofile;
use App\Models\Student;
use App\Mail\StudentComposeEmail;
use App\Models\StudentComposeMail;
use App\Models\UniversityComposeMail;
use App\Models\University;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function mails(){
        $page_main = "Emails";
        $page = "Emails Templates";
        $cp = Companyprofile::first();
        $templates = MailTemplate::all();

        return view('new.EmailTemplate',compact('templates','page','page_main','cp'));
    }

    public function mailcreate(Request $request){
        $page_main = "Emails";
        $page = "Emails Templates";
        $cp = Companyprofile::first();

        return view('new.EmailTemplateCreate',compact('page','page_main','cp'));
    }

    public function mailstore(Request $request){

        MailTemplate::create([
            'name' => $request->name,
            'subject' => $request->subject,
            'body' => $request->details,
            'entry_id' => Auth::user()->id,
        ]);
        return redirect()->route('mail.list')->with('s_success', 'Email template created successfully!');
    }

    public function edite_mail(Request $request , $id){

        $page_main = "Emails";
        $page = "Emails Templates";

        $cp = Companyprofile::first();
        $template = MailTemplate::find($id);

        return view('new.EmailTemplateEdite',compact('template','page','page_main','cp'));
    }

    public function mailupdate(Request $request){

        $data= MailTemplate::find($request->editid);

        $data->name = $request->name;
        $data->subject = $request->subject;
        $data->body = $request->details;
        $data->save();
        return redirect()->route('mail.list')->with('s_success', 'Email template updated successfully!');
    }

    public function ShowMailTemplate($id){

        $record = MailTemplate::find($id);
       
        return response()->json(['success' => true, 'template' => $record ]);
    }
    
    public function mailsettings(){
        $mailSetting = MailSetting::first();
        return view('new.Mailsettings', compact('mailSetting'));
    }

    public function mailsettingsUpdate(Request $request){
        $mailSetting = MailSetting::first();
        $mailSetting->update($request->all());
        return back()->with('s_success', 'Mail settings set successfully!');
    }


    //this is section for student mailing part

    public function EmailForStudent(Request $request){

        $student = Student::find($request->StudentId);
        $cp = Companyprofile::first();

        // Validate and store the uploaded files
        $attachments = [];
        if($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $attachment) {
                // Validate the file
                $validatedData = $request->validate([
                    'attachments.*' => 'file|mimes:pdf,doc,docx|max:10240', // Example validation rules
                ]);

                // Customize the filename and move to 'custom_attachments' folder
                $filename = time() . '_' . $attachment->getClientOriginalName(); // Use original file name
                $attachment->storeAs('custom_attachments', $filename, 'public');

                // Save the path to the attachments array
                $attachments[] = storage_path('app/public/custom_attachments/' . $filename);
            }
        }

        $data = [
            'subject' => $request->input('subject'),
            'mail' => $request->input('body'),
            'CompayName' => $cp->name,
            'CompayPhone' => $cp->phone,
            'CompanyLogo' => $cp->logo,
            'CompanyEmail' => $cp->email,
            'CompanyAdress' => $cp->address,
            'cc' => $request->input('cc'), // Add CC recipients if available
            'attachments' => $attachments,
        ];

        try {

        // Send email
        Mail::to($student->email)
            ->send(new StudentComposeEmail($data));

        //mail info saved 
        $emailLog = new StudentComposeMail();
        $emailLog->student_id = $student->id; // Replace with the actual student ID
        $emailLog->recipient_email = $student->email;
        $emailLog->cc = $request->input('cc');
        $emailLog->subject = $request->input('subject');
        $emailLog->body = $request->input('body');
        $emailLog->attachments = json_encode($attachments); // Save attachments as JSON
        $emailLog->attachments = json_encode($attachments);
        $emailLog->entry_id = Auth::user()->id;
        $emailLog->save();
        return back()->with(['s_success'=>'Email sended successfully!','active_tab' => 6]);    
        } catch (\Exception $e) {
            // Handle the exception
            return back()->with('info', 'Email Not sended, please try again !');
        }
   
    }


    //email compose for university part 
    public function EmailForUniversity(Request $request){

        $student = University::find($request->UniversityId);
        $cp = Companyprofile::first();

        // Validate and store the uploaded files
        $attachments = [];
        if($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $attachment) {
                // Validate the file
                $validatedData = $request->validate([
                    'attachments.*' => 'file|mimes:pdf,doc,docx|max:10240', // Example validation rules
                ]);

                // Customize the filename and move to 'custom_attachments' folder
                $filename = time() . '_' . $attachment->getClientOriginalName(); // Use original file name
                $attachment->storeAs('custom_attachments', $filename, 'public');

                // Save the path to the attachments array
                $attachments[] = storage_path('app/public/custom_attachments/' . $filename);
            }
        }

        $data = [
            'subject' => $request->input('subject'),
            'mail' => $request->input('body'),
            'CompayName' => $cp->name,
            'CompayPhone' => $cp->phone,
            'CompanyLogo' => $cp->logo,
            'CompanyEmail' => $cp->email,
            'CompanyAdress' => $cp->address,
            'cc' => $request->input('cc'), // Add CC recipients if available
            'attachments' => $attachments,
        ];

        try {

        // Send email
        Mail::to($student->email)
            ->send(new StudentComposeEmail($data));

        //mail info saved 
        $emailLog = new UniversityComposeMail();
        $emailLog->university_id = $student->id; // Replace with the actual student ID
        $emailLog->recipient_email = $student->email;
        $emailLog->cc = $request->input('cc');
        $emailLog->subject = $request->input('subject');
        $emailLog->body = $request->input('body');
        $emailLog->attachments = json_encode($attachments); // Save attachments as JSON
        $emailLog->attachments = json_encode($attachments);
        $emailLog->entry_id = Auth::user()->id;
        $emailLog->save();
        return back()->with(['s_success'=>'Email sended successfully!','active_tab' => 5]);    
        } catch (\Exception $e) {
            // Handle the exception
            return back()->with('info', 'Email Not sended, please try again !');
        }
   
    }



    //this is function for mail compose for student
    public function ShowStudentMails($id){

        $record = StudentComposeMail::find($id);
        return response()->json(['success' => true, 'data' => $record ,'student' => $record->student->name ]);
    }

    //this is function for mail show 
    public function ShowUniversityMails($id){
        $record = UniversityComposeMail::find($id);
        return response()->json(['success' => true, 'data' => $record,'university' => $record->university->name ]);   
    }


}

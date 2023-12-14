<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MailSetting;
use App\Models\MailTemplate;
use App\Models\Companyprofile;
use Illuminate\Support\Facades\Auth;

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


}

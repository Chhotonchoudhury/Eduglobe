<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebsiteRequestController extends Controller
{
    public function demo_request(Request $request)
    {
        $validatedData = $request->validate([
            'Company_Name' => 'required',
            'Company_Size' => 'required',
            'Company_Phone' => 'required',
            'Budget' => 'required',
            'Country' => 'required',
            'Company_Email' => 'required|email',
        ]);

        $data = [
            'name'  => $request->Company_Name,
            'phone' => $request->Company_Phone,
            'size'  => $request->Company_Size,
            'email' => $request->Company_Email,
            'budget' => $request->Budget,
            'country' => $request->Country, 
        ];

        Mail::send('email.DemoRequestEmail', $data, function ($message) {
            $message->to('callslink@gmail.com', 'One new app demo request come please check and responsone')
                ->subject('New App Demo requet submission for EduDeve');
        });

        return redirect()->back()->with('success', 'Your request accepted successully , our team contact with you shortly!');
    }
    
    public function new_request(Request $request)
    {
        $validatedData = $request->validate([
            'Name' => 'required',
            'Email' => 'required|email',
            'WorkEmail' => 'required|email',
            'Budget' => 'required',
            'Country' => 'required',
            'Description' => 'required',
        ]);

        $data = [
            'name'  => $request->Name,
            'email'  => $request->Email,
            'website' => $request->Website,
            'work_email'  => $request->WorkEmail,
            'budget' => $request->Budget,
            'country'  => $request->Country,
            'description' => $request->Description,
        ];

        Mail::send('email.NewAppRequestEmail', $data, function ($message) {
            $message->to('callslink@gmail.com', 'One new app demo request come please check and responsone')
                ->subject('New App Creation request come form EduDeve');
        });

        return redirect()->back()->with('success', 'Your request accepted successully , our team contact with you shortly!');
    }
    public function contact_request(Request $request)
    {
        $validatedData = $request->validate([
            'Name' => 'required',
            'Email' => 'required|email',
            'Phone' => 'required',
            'Budget' => 'required',
            'Country' => 'required',
            'Description' => 'required',
        ]);

        $data = [
            'name'  => $request->Name,
            'lastName' => $request->LastName,
            'email'  => $request->Email,
            'phone' => $request->Phone,
            'msg'  => $request->Description,
            'budget' => $request->Budget,
            'country' => $request->Country, 
        ];

        Mail::send('email.ContactRequestEmail', $data, function ($message) {
            $message->to('callslink@gmail.com', 'One new app demo request come please check and responsone')
                ->subject('New Person try to contact from EduDeve');
        });

        return redirect()->back()->with('success', 'Your request accepted successully , our team contact with you shortly!');
    }
    
     public function sub(Request $request)
    {
        $validatedData = $request->validate([
            'Email' => 'required|email',
        ]);

        $data = [
            'email'  => $request->Email,
        ];

        Mail::send('email.SubsRequestEmail', $data, function ($message) {
            $message->to('callslink@gmail.com', 'One new app demo request come please check and responsone')
                ->subject('New Person Subscribe Edudeve');
        });

        return redirect()->back()->with('success', 'Congratulation Now You subscribed..!');
    }
}

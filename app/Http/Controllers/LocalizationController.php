<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LocalizationController extends Controller
{
    //

    public function lang_en(Request $request)
    {
        App::setLocale('en');
        session()->put('locale', 'en');
        return redirect()->back();
    }

    public function lang_ar(Request $request)
    {
        App::setLocale('ar');
        session()->put('locale', 'ar');
        return redirect()->back();
    }



}

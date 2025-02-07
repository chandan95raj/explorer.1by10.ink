<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //index
    public function indexView()
    {
        return view('web.index');
    }

    //privacy-policy
    public function privacyPolicyView()
    {
        return view('web.privacy-policy');
    }

    //terms-conditions
    public function termsConditionsView()
    {
        return view('web.terms-conditions');
    }

    //about-us
    public function aboutView()
    {
        return view('web.about-us');
    }

    //api
    public function apiView()
    {
        return view('web.api');
    }

    //etf
    public function etfView()
    {
        return view('web.etf');
    }

    //architecture
    public function architectureView()
    {
        return view('web.architecture');
    }
}

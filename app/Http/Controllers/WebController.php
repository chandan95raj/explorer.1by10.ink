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
}

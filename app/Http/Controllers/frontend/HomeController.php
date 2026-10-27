<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function dashboard()
    {
        return view('frontend.dashboard');
    }
    
    public function AboutUsIndex()
    {
        return view('frontend.about-us');
    }
}

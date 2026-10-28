<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        return view('frontend.notifications.index');
    }

    public function show(){
        return view('frontend.notifications.show');
    }
}

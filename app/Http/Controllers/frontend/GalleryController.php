<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('frontend.galleries.index');
    }

    public function show()
    {
        return view('frontend.galleries.show');
    }
}

<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ELibraryController extends Controller
{
    public function indexClassWise()
    {
        return view('frontend.e-library.indexClassWise');
    }

    public function index()
    {
        return view('frontend.e-library.index');
    }

    public function show()
    {
        return view('frontend.e-library.show');
    }
}

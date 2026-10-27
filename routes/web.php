<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\StudentAttendanceController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'dashboard'])->name('frontend.dashboard');
Route::get('about-us',[HomeController::class,'AboutUsIndex'])->name('frontend.about-us');

Route::get('student-attendance',[StudentAttendanceController::class,'index'])->name('frontend.student-attendance');
<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\NotificationController;
use App\Http\Controllers\frontend\StudentAttendanceController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'dashboard'])->name('frontend.dashboard');
Route::get('about-us',[HomeController::class,'AboutUsIndex'])->name('frontend.about-us');

Route::get('student-attendance',[StudentAttendanceController::class,'index'])->name('frontend.student-attendance');

Route::get('notifications',[NotificationController::class,'index'])->name('frontend.notification.index');
Route::get('notification/show',[NotificationController::class,'show'])->name('frontend.notification.show');
<?php

use App\Http\Controllers\frontend\ELibraryController;
use App\Http\Controllers\frontend\GalleryController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\NotificationController;
use App\Http\Controllers\frontend\StudentAttendanceController;
use App\Http\Controllers\frontend\TopperController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'dashboard'])->name('frontend.dashboard');
Route::get('about-us', [HomeController::class, 'AboutUsIndex'])->name('frontend.about-us');

Route::get('student-attendance', [StudentAttendanceController::class, 'index'])->name('frontend.student-attendance');

Route::get('notifications', [NotificationController::class, 'index'])->name('frontend.notification.index');
Route::get('notification/show', [NotificationController::class, 'show'])->name('frontend.notification.show');

// E Library Routes

Route::get('e-library', [ELibraryController::class, 'indexClassWise'])->name('frontend.e-library');
Route::get('e-library/index', [ELibraryController::class, 'index'])->name('frontend.e-library.index');
Route::get('e-library/show', [ELibraryController::class, 'show'])->name('frontend.e-library.show');

// gallery routes
Route::get('galleries', [GalleryController::class, 'index'])->name('frontend.galleries');
Route::get('gallery/show', [GalleryController::class, 'show'])->name('frontend.gallery.show');

// top 10 students
Route::get('toppers', [TopperController::class, 'index'])->name('frontend.topper.index');

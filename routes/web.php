<?php

use App\Http\Controllers\admin\activity\ActivityController;
use App\Http\Controllers\admin\auth\AuthController;
use App\Http\Controllers\admin\dashboard\DashboardController;
use App\Http\Controllers\admin\event\EventController;
use App\Http\Controllers\admin\gallery\GalleryController;
use App\Http\Controllers\user\IndexController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index'])->name('user.home');
Route::get('/about-us', [IndexController::class, 'aboutUs'])->name('user.about-us');
Route::get('/events-list', [IndexController::class, 'events'])->name('user.events');
Route::get('/events-details/{slug}', [IndexController::class, 'eventsDetails'])->name('user.events-details');
Route::get('/activity-details/{slug}', [IndexController::class, 'activityDetails'])->name('user.activity-details');
Route::get('/gallery', [IndexController::class, 'gallery'])->name('user.gallery');
Route::get('/contact-us', [IndexController::class, 'contactUs'])->name('user.contactUs');
Route::post('/contact-us-mail', [IndexController::class, 'contactUsMail'])->name('user.contactUsMail');

Route::get('admin/login', [AuthController::class, 'showLogin'])->name('admin.showlogin');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');
// 
Route::group(['prefix'=>'admin', 'middleware'=>'admin'],function(){
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
Route::resource('/gallery-management', GalleryController::class);
Route::resource('/events', EventController::class);
Route::resource('/activities', ActivityController::class);

// Route::post('/delete/image', [ProjectController::class, 'deleteImage'])->name('admin.deleteImage');


Route::get('log-out', [AuthController::class, 'adminLogout'])->name('admin.logout');

});


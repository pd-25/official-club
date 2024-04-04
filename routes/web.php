<?php

use App\Http\Controllers\user\IndexController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index']);
Route::get('/about-us', [IndexController::class, 'aboutUs'])->name('user.about-us');
Route::get('/events', [IndexController::class, 'events'])->name('user.events');
Route::get('/events-details/{slug}', [IndexController::class, 'eventsDetails'])->name('user.events-details');
Route::get('/gallery', [IndexController::class, 'gallery'])->name('user.gallery');
Route::get('/contact-us', [IndexController::class, 'contactUs'])->name('user.contactUs');


<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('user.index');
    }

    public function aboutUs() {
        return view('user.aboutUs');
    }

    public function events() {
        return view('user.events');
    }

    public function eventsDetails($slug) {
        return view('user.eventDetails');
    }

    public function gallery() {
        return view('user.gallery');
    }

    public function contactUs() {
        return view('user.contactUs');
    }
    
    
    
}

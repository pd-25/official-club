<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Gallery;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $data['galleries'] = Gallery::get();
        $data['events'] = Event::orderBy('id', 'DESC')->get();
        return view('user.index', $data);
    }

    public function aboutUs() {
        return view('user.aboutUs');
    }

    public function events() {
        $data['events'] = Event::orderBy('id', 'DESC')->get();
        return view('user.events',$data);
    }

    public function eventsDetails($id) {
        $data['event'] = Event::where('id', $id)->first();
        return view('user.eventDetails', $data);
    }

    public function gallery() {
        $data['galleries'] = Gallery::get();
        return view('user.gallery', $data);
    }

    public function contactUs() {
        return view('user.contactUs');
    }
    
    
    
}

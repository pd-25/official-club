<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsMail;
use App\Models\Activity;
use App\Models\Event;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index(){
        $data['galleries'] = Gallery::get();
        $data['events'] = Event::orderBy('id', 'DESC')->get();
        $data['activities'] = Activity::get();
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

    public function activityDetails($id) {
        $data['activity'] = Activity::whereId($id)->first();
        return view('user.activityDetails', $data);
    }

    

    public function gallery() {
        $data['galleries'] = Gallery::get();
        return view('user.gallery', $data);
    }

    public function contactUs() {
        return view('user.contactUs');
    }

    public function contactUsMail(Request $request) {
        $request->validate([
            'form_name' => 'required|string',
            'form_lastname' => 'required|string',
            'form_email' => 'required|email',
            'form_phone' => 'required|string',
            'form_message' => 'required|string|max:500',
        ]);
        $data = $request->only('form_name','form_lastname', 'form_email', 'form_phone', 'form_message');
        try {
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactUsMail($data));
            return back()->with('msg', 'Thanks for your time..');
        } catch (\Throwable $th) {
            Log::debug('mailerror', [$th->getMessage()]);
            return back()->with('msg', 'Some error occur! Please try again');
        }
    }
    
    
    
}

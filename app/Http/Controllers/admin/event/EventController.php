<?php

namespace App\Http\Controllers\admin\event;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['events'] = Event::orderBy('id', 'DESC')->get();
        return view('admin.event.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'short_desc' => 'required|string',
            'long_desc' => 'required|string',
            'event_date_from' => 'required',
            'event_date_to' => 'required',
            'image' => 'required',
        ]);
        $data = $request->only('title','short_desc','long_desc','event_date_from','event_date_to');
        if ($request->has("image")) {

            $image = $request->file("image");

            $blog_image =
                time() .
                rand(0000, 9999) .
                "." .
                $image->getClientOriginalExtension();

            $image->storeAs("public/EventImage", $blog_image);

            $data["image"] = $blog_image;
        }

        Event::create($data);
        return redirect()->route('events.index')->with('msg', 'New Event Added Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['event'] = Event::find($id);
        return view('admin.event.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string',
            'short_desc' => 'required|string',
            'long_desc' => 'required|string',
            'event_date_from' => 'required|string',
            'event_date_to' => 'required|string',
        ]);
        $data = $request->only('title','short_desc','long_desc','event_date_from','event_date_to');
        if ($request->has("image")) {
            $img = Event::where("id", $id)->select('image')->first();
            File::delete("storage/EventImage/" . $img->image);
            $image = $request->file("image");

            $blog_image =
                time() .
                rand(0000, 9999) .
                "." .
                $image->getClientOriginalExtension();

            $image->storeAs("public/EventImage", $blog_image);

            $data["image"] = $blog_image;
        }
        Event::where('id', $id)->update($data);
        return redirect()->route('events.index')->with('msg', 'Event updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete_gal = Event::where('id',$id)->first();
        $delete_gal->delete();
        return redirect()->back()->with('msg','Event Deleted Successfully');
    }
}

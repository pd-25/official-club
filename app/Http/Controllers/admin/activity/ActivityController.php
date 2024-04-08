<?php

namespace App\Http\Controllers\admin\activity;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['activities'] = Activity::orderByDesc('id')->get();
        return view('admin.activity.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.activity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'desc' => 'required|string',
            'image' => 'required',
        ]);
        $data = $request->only('title', 'desc');
        if ($request->has('image')) {
            $image = $request->file('image');

            $blog_image = time() . rand(0000, 9999) . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/ActivityImage', $blog_image);

            $data['image'] = $blog_image;
        }
        Activity::create($data);
        return redirect()->route('activities.index')->with('msg', 'New Activity Added Successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['activity'] = Activity::whereId($id)->first();
        return view('admin.activity.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string',
            'desc' => 'required|string',
        ]);
        $data = $request->only('title', 'desc');
        if ($request->has('image')) {
            $img = Activity::where('id', $id)->select('image')->first();
            File::delete('storage/ActivityImage/' . $img->image);
            $image = $request->file('image');

            $blog_image = time() . rand(0000, 9999) . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/ActivityImage', $blog_image);

            $data['image'] = $blog_image;
        }
        Activity::where('id', $id)->update($data);
        return redirect()->route('activities.index')->with('msg', 'Activity Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete_gal = Activity::where('id',$id)->first();
        $delete_gal->delete();
        return redirect()->back()->with('msg','Activity Deleted Successfully');
    }
}

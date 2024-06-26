<?php

namespace App\Http\Controllers\admin\gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['galleries'] = Gallery::get();
        return view('admin.gallery.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string',
            'image' => 'required',
        ]);
        $data = $request->only('category_name', 'image');
        if ($request->has("image")) {

            $image = $request->file("image");

            $blog_image =
                time() .
                rand(0000, 9999) .
                "." .
                $image->getClientOriginalExtension();

            $image->storeAs("public/GalleryImage", $blog_image);

            $data["image"] = $blog_image;
        }
        Gallery::create($data);
        return redirect()->route('gallery-management.index')->with('msg', 'New image added successfully.');
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
        $data['gallery'] = Gallery::find($id);
        return view('admin.gallery.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_name' => 'required|string',
        ]);
        $data = $request->only('category_name');
        if ($request->has("image")) {
            $img = Gallery::where("id", $id)->select('image')->first();
            File::delete("storage/GalleryImage/" . $img->image);
            $image = $request->file("image");

            $blog_image =
                time() .
                rand(0000, 9999) .
                "." .
                $image->getClientOriginalExtension();

            $image->storeAs("public/GalleryImage", $blog_image);

            $data["image"] = $blog_image;
        }
        Gallery::where('id', $id)->update($data);
        return back()->with('msg', 'Gallery Updated Successfully.'); //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete_gal = Gallery::where('id',$id)->first();
        $delete_gal->delete();
        return redirect()->back()->with('msg','Image Deleted Successfully');
    }
}

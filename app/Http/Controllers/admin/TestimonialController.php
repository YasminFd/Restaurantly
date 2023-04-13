<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the testimonials.
     *
     */
    public function index()
    {
        $data = testimonial::all();
        return view('admin.testimonials.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new testimonial.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created testimonial in storage.
     */
    public function store(Request $req)
    {
        // store the image in the public/images/testimonials directory
        $path = 'images\testimonials';
        $file = $req->image->getClientOriginalName();
        $req->image->move(public_path($path), $file);

        // Create a new testimonial and save its data
        $item = new testimonial();
        $item->name = $req->name;
        $item->job = $req->job;
        $item->testimony = $req->testimony;
        $item->image = "/images/testimonials/" . $req->image->getClientOriginalName();
        $item->save();
        return redirect(route('admin-testimonials.index'))->with('success', 'testimonial created successfully');
    }

    /**
     * Show the form for editing the specified testimonial.
     */
    public function edit(string $id)
    {
        $data = testimonial::findOrFail($id);
        return view('admin.testimonials.edit', ['data' => $data]);
    }

    /**
     * Update the specified testimonial in storage.
     */
    public function update(Request $req, string $id)
    {
        $testimonial = testimonial::find($id);

        // If i updated the image
        if ($req->hasFile('image')) {
            $path = public_path($testimonial->image);
            if (File::exists($path)) {
                File::delete($path);
            }
            $path = 'images\testimonials';
            $file = $req->image->getClientOriginalName();
            $req->image->move(public_path($path), $file);
            $testimonial->image = "/images/testimonials/" . $req->image->getClientOriginalName();
        }

        // Update testimonial and save
        $testimonial->name = $req->name;
        $testimonial->job = $req->job;
        $testimonial->testimony = $req->testimony;
        $testimonial->save();
        return redirect(route('admin-testimonials.index'))->with('success', 'testimonial updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Remove image and testimonial
        $testimonial = testimonial::findOrFail($id);
        $path = public_path($testimonial->image);
        if (File::exists($path)) {
            File::delete($path);
        }
        $testimonial->delete();
        return redirect(route('admin-testimonials.index'))->with('danger', 'testimonial deleted successfully');
    }
}

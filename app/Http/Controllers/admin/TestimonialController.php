<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\testimonial;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */

    public function index()
    {
        $data = testimonial::all();
        return view('admin.testimonials.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        //
        $path = 'images\testimonials'; // the path to the directory you want to store the file in
        $file = $req->image->getClientOriginalName();
        $req->image->move(public_path($path),$file); // get the original file name
        
        // store the file in the public/images directory
                
                $item=new testimonial();
                $item->name=$req->name;
                $item->job=$req->job;
                $item->testimony=$req->testimony;
                $item->image="/images/testimonials/".$req->image->getClientOriginalName();
                $item->save();
                return redirect(route('admin-testimonials.index'))->with('success','testimonial created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = testimonial::findOrFail($id);
        return view('admin.testimonials.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        //
        $testimonial=testimonial::find($id);
        if($req->hasFile('image'))
        {
            $path= public_path($testimonial->image);
            if(File::exists($path)){
                File::delete($path);
            }
            $path = 'images\testimonials'; // the path to the directory you want to store the file in
            $file = $req->image->getClientOriginalName();
            $req->image->move(public_path($path),$file);
            $testimonial->image="/images/testimonials/".$req->image->getClientOriginalName();
        }
        $testimonial->name=$req->name;
        $testimonial->job=$req->job;
        $testimonial->testimony=$req->testimony;
        $testimonial->save();
        return redirect(route('admin-testimonials.index'))->with('success','testimonial updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $testimonial = testimonial::findOrFail($id);
        $path= public_path($testimonial->image);
        if(File::exists($path)){
            File::delete($path);
        }
        $testimonial->delete();
        return redirect(route('admin-testimonials.index'))->with('danger', 'testimonial deleted successfully');
    }
}

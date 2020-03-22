<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;
use Image;
use Session;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery=Gallery::all();
        return view('admin.gallery.index')->withGallery($gallery);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $gallery=new Gallery;
        $variable=$request->toArray();
        foreach ($variable as $key => $value) {
           if($key!='_token' & $key!='image_name')
            $gallery->$key=$value;
        }

        $image=$request->file('image_name');
        //if($request->hasFile('image_name')){
        //dd($image);
        $filename='gallery'.'-'.rand().time().'.'.$image->getClientOriginalExtension();//part of image intervention library
        $location=public_path('/images/gallery/'.$filename);

        // use $location='images/'.$filename; on a server

        Image::make($image)->resize(800,600)->save($location);
        $gallery->image=$filename;
        $gallery->save();        

        session::flash('success', 'The Gallery Image Has Been Added Successfully!');
        return redirect()->route('gallery.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        #dd($id);
        $image=Gallery::find($id);
        return view('admin.gallery.show')->withImage($image);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                //dd($id);
        $gallery=Gallery::find($id);
        //dd($banner);
        return view("admin.gallery.edit")->withGallery($gallery);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
    }

    public function delete($id,Request $request)
    {   
        $gallery=Gallery::find($id);
        $gallery->delete();
        $request->session()->flash('success', 'The Gallery Item has been deleted.');
        return redirect('/admin/gallery');
        
        // dd($request); 
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Doctor;
use App\Course;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd("admin");
        $contacts=Contact::count();
        $doctors=Doctor::count();
        $course=Course::select('name')->groupBy('name')->get();

        // dd(count($course));


        $var['doctor']=$doctors;
        $var['contact']=$contacts;
        $var['course']=count($course);
        return view('admin.home')->withVar($var);
    }
}

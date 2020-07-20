<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Doctor;


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

        $var['doctor']=$doctors;
        $var['contact']=$contacts;
        
        return view('admin.home')->withVar($var);
    }
}

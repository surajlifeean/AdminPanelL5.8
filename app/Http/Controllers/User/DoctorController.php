<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Doctor;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor=Doctor::where('status','A')->get();
             
        return view('doctorsChamber')->withDoctors($doctor);
   
    }

  
}

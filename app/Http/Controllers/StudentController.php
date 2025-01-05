<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function dashboard(){
        //return view('student.dashboard');
        return "This is student dashboard";
    }
    public function about($name){
        //return view('student.about');
        return "This is student $name dashboard";
    }
    public function profile(){
        //return view('student.profile');
        return "This is student Profile";
    }
}

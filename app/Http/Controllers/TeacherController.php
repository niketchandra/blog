<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function tdashboard(){
        //return view('Teacher.dashboard');
        return "This is Teacher dashboard";
    }
    public function tabout($name){
        //return view('Teacher.about');
        return "This is about Teacher --> $name dashboard" ;
    }
    public function tprofile(){
        //return view('Teacher.profile');
        return "This is Teacher Profile";
    }

}

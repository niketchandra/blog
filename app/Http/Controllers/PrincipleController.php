<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipleController extends Controller
{
    public function dashboard(){

              return "<br>This is Principle dashboard";
    }
    // public function about($name){
    //     //return view('student.about');
    //     return "This is Principle $name dashboard";
    // }
    public function profile(){
        return "</br>This is Principle Profile";
    }
}

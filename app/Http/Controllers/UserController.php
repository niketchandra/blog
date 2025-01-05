<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\view; ##This is used to check if view exists or not

class UserController extends Controller
{
    //
    function getUser(){
        $name = "Rahul";
        $users = ["James", "Rahul", "Rohit", "Niket"];
        return view('user', ['name' => $name, 'users' => $users]);
       // return view('user', ['name' => $name]);
     //   return "Niket - Learning Laravel";
    }
    function aboutUser($name){
        return "Hello from Dynamic user from Controller --> ".$name;
    }
    function aboutPage(){
        return view('about')."<h2>From Controller calling dynamically<h2>";
    }
    function adminLogin(){
        return view('admin.login');  ##Folder name and file name eg. folder.file
    }

    ##Check if view exists or not

    function support(){
        if (View::exists('support')) {
            return view('support');
        }
        else{
            return "No view or support page available";
        }
    }
}

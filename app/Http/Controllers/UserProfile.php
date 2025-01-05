<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfile extends Controller
{
    function BasicUserProfile(){

        //return redirect()->to('userprofile');
        //Alternamte way to redirect to route using Name Route
        return to_route('basic');
    }

    function DynamicUserProfile(){
        return to_route('pro', ["name"=>'Niket']);
    }

}

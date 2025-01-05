<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserForm extends Controller
{
    //
    public function userForm(Request $userdetails)
    {
        //return "Thank you for the details";
        //return request()->all();
        
        echo $userdetails->name;
        echo "<br>";
        echo $userdetails->email;
        echo "<br>";
        echo $userdetails->city;
        echo "<br>";
        print_r($userdetails->skill);
        
        
        $userdetails->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'city' => 'required|uppercase',
            'skill' => 'required',
            'passowrd' => 'required|min:1',
            'password_confirmation' => 'required|same:password'
        ],[
        'name.required' => 'Name is required',
        'name.min' => 'Name should be minimum 4 characters',
        'name.max'=> 'Name should be maximum 10 characters',
        'skill.required' => 'Skill is required',
        'city.uppercase' => 'City should be in uppercase letters eg. DELHI'

        ]);

    
    }
}

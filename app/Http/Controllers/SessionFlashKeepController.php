<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionFlashKeepController extends Controller
{
    public function flashdata(Request $request){

        $username=$request->input('name');

        $request=session()->flash('message', "You data is stored in session Name is: ".$username);
 
          return redirect('SessionFlashKeep');
      }
      
}

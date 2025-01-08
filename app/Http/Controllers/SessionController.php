<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function SessionViewData(Request $request){
        return $request->input('name');
    }

    public function SessionLogin(Request $request){

      $request=session()->put('user', $request->input('name'));
        return redirect('SessionProfileView');
    }
    
    public function SessionLogout(){
        session()->pull('user');
        return redirect('SessionProfileView');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasicDbController extends Controller
{
    public function userdata(){
        return DB::select('select * from users');
    }
    public function userlist(){
        $details = DB::select('select * from users');
        return view('userlist', ['userinfo'=>$details]);
    }
}

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
        // $result = DB::table('users')->get();  ##Alternate way for doing same thing as below
        //  $result = DB::table('users')->where('id', 1)->get(); ## with where condition
        //  $result = DB::table('users')->first(); ## whihc show only first record
        $result = DB::select('select * from users');
        return view('userlist', ['userinfo'=>$details]);
    }
}

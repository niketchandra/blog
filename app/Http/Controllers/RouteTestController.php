<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteTestController extends Controller
{
    // we'll crate a seperate fucntion for get/post/put/patch/delete
    public function get(){
        return "Get Method";
    }
    public function post(){
        return "Post Method";
    }
    public function put(){
        return "Put Method";
    }
    public function patch(){
        return "Patch Method";
    }
    public function delete(){
        return "Delete Method";
    }

}

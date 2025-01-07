<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpRequestController extends Controller
{
    public function response(Request $request){
        //return $request->input();
        echo "<br>";
        print_r($request->input()); //give output as object array
        echo "<br>";
        echo "Request Method is: ". $request->method();
        echo "<br>";
        echo "Request URL is: ". $request->url();
        echo "<br>";
        echo "Request path is: ". $request->path();
        echo "<br>";
        echo "value pass from form: ". $request->name, " / ". $request->password;
        echo "<br>";
        print_r($request->collect());
        echo "<br>";
        echo "<br>";
        echo "Source IP :" . $request->ip();
        echo "<br>";
        echo "<P> Below are the Output from some Condition </p>";
        echo "<br>";
        if($request->isMethod('post')){
            echo "<br>";
            echo "<p style='color:red'>Request is post</p>";
        }else{
            echo "<br>";
            echo "<p style='color:red'>Request is not post or some other</p>";
        }

        if($request->is('HttpRequestPost')){
            echo "<br>";
            echo "<p style='color:red'>Request is HttpRequestPost</p>";
        }
        else{
            echo "<br>";
            echo "<p style='color:red'>Request is other</p>";
        }

    }
}

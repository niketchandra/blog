<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpClientController extends Controller
{

    ## API Used in this example --> https://jsonplaceholder.typicode.com/users/1
    public function getAPIdata()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        //return $response;
        //return $response->body();
        // return $response->headers();
        //return $response->status();

        return view('HttpClientShow',['data'=>json_decode($response)]);
    }
}

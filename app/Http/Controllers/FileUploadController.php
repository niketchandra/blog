<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function upload(Request $request)
    {
        //Auto genrated file name
        $path=$request->file('file')->store('public'); //saved in storage/app/public
        $fileNameArray=explode('/',$path);
        $fileName=$fileNameArray[1];
     //   return $path;
        return view('FileView', ['path'=>$fileName]);
        
    }
}

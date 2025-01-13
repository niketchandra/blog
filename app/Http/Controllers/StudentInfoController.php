<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentInfoController extends Controller
{
    public function studentdetails() {
       return \App\Models\Student::all();
    }

    public function studentinfo1() {
        $info = \App\Models\Student::all();
        return view('studentinfo',['studentslist'=>$info]);
     }

     public function list(){
      
     }

}

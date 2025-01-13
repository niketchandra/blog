<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class AddStudentController extends Controller
{
    public function addStudent(Request $request){
       // return $request->input();
       $student= new Student();
       $student->name=$request->name;
       $student->email=$request->email;
       $student->phone=$request->phone;
       $student->save();
       if($student){
           return "Data has been saved";
       }
       else{
           return "Data has not been saved";
       }
    }
}

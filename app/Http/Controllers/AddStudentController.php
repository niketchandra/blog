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
        //    /return "Data has been saved";
           return redirect('student/studentDetails');
       }
       else{
           return "Data has not been saved";
       }
    }

    public function list(){
       // return "student list";
        $studentData=Student::all();
        return view('studentdetails', ['students'=>$studentData]);
       }

    public function delete($id){
       //  echo $isDeleted=Student::destroy($id); //if echo is 1 that means its delted
            $isDeleted=Student::destroy($id);
            if ($isDeleted){ 
                return redirect('student/studentDetails');
            }
        }

    public function edit($id){
        $student=Student::find($id);
         //   return $student;
         return view('StudentEdit', ['data'=>$student]);

        }
    
    public function editStudent(Request $request, $id) {
       // return $request->input();
        $student=Student::find($id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->batch=$request->batch;
        if($student->save()){
            return redirect('student/studentDetails');
        }
        else{
            return "error while updateing data";
        }
    }
}

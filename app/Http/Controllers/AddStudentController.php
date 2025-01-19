<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentFileUpload;

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
      //  $studentData=Student::all(); --> THis will show all the data
         $studentData=Student::paginate(3); // to use pagination and inside bracket limit of data want to show in si
        return view('studentdetails', ['students'=>$studentData]);
        
        // Introducing Accessors --> which is use to modify data only on UI, without change in database
        


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
        // $student=Student::find($id);
        // $student->name=$request->name;
        // $student->email=$request->email;
        // $student->phone=$request->phone;
        // $student->batch=$request->batch;
        $student = Student::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'batch' => $request->batch,
        ]);
      //  if($student->save()){
        if($student){
            return redirect('student/studentDetails');
        }
        else{
            return "error while updateing data";
        }
    }

    public function search(Request $request){
      //  return $request->search;
      $searchstudent=Student::where('name','like',"%$request->search%")->get();
    //  return $searchstudent;
      return view('studentdetails', ['students'=>$searchstudent, 'search'=>$request->search]);
    }

    public function deleteMultiple(Request $request){
       // return $request->ids;
        $isDeleteResult=Student::destroy($request->ids);
        if ($isDeleteResult){
            echo "Student Deleted";
            return redirect('student/studentDetails');
        }
        else{
            "Student not deleted";
        }
        
    }

    public function studentfileupload(Request $request){
        $path=$request->file('file')->store('public');
        $fileName=explode('/',$path);
       // return $fileName[1];

        $fileupload= new StudentFileUpload();
        $fileupload->file_name=$fileName[1];
        $fileupload->save();

        if($fileupload){
        return redirect('student/student-FileUpload');
        }
        else{
            "error while File Uploading";
        }
    }
    
    public function viewfile(){
        
    }
}

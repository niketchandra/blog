<div>
    <h2>Student list from Database  using Model</h2>
 Full Data --> <!--  {{ print_r($students); }} --> </br>
 
 </br>
     <table border="1px">
         <tr>
             <th>Name</th>
             <th>Email</th>
             <th>Phone</th>
             <th>Batch</th>
             <th></th>
         </tr>
         @foreach($students as $student)
         <tr>
             <td>{{$student->name}}</td>
             <td>{{$student->email}}</td>
             <td>{{$student->phone}}</td>
             <td>{{$student->batch}}</td>
             <td> <a href="{{'delete/'.$student->id}}">Delete</a>
         </tr>
         @endforeach
 
 </div>
 
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
         </tr>
         @foreach($students as $student)
         <tr>
             <td>{{$student->name}}</td>
             <td>{{$student->email}}</td>
             <td>{{$student->phone}}</td>
             <td>{{$student->batch}}</td>
         </tr>
         @endforeach
 
 </div>
 
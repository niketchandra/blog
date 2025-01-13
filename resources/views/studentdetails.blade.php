<div>
    <h2>Student list from Database  using Model</h2>
 Full Data --> <!--  {{ print_r($students); }} --> </br>
 
 <form action="/student/search" method="get">
    Search Student from list --> <input type="text" placeholder="Search Student with Name"  name="search" value="{{@$search}}" />
    <button>Search</button>
 </form>
 </br>
     <table border="1px">
         <tr>
             <th>Name</th>
             <th>Email</th>
             <th>Phone</th>
             <th>Batch</th>
             <th></th>
             <th></th>
         </tr>
         @foreach($students as $student)
         <tr>
             <td>{{$student->name}}</td>
             <td>{{$student->email}}</td>
             <td>{{$student->phone}}</td>
             <td>{{$student->batch}}</td>
             <td> <a href="{{'edit/'.$student->id}}">Edit</a>
             <td> <a href="{{'delete/'.$student->id}}">Delete</a>
         </tr>
         @endforeach
        </table>
        {{$students->links()}}
 </div>
<style>
.w-5.h-5{
    width:20px;
}
</style>
 
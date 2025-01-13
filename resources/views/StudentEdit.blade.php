<h2> Edit Student Info </h2>
<div>
    <form action="" method="post">
       @csrf
       <input type="text" name="name" value="{{$data->name}}" placeholder="Enter Student Name">
       <br>
       <input type="text" name="email" value="{{$data->email}}" placeholder="Enter Student Email">
       <br>
       <input type="text" name="phone" value="{{$data->phone}}" placeholder="Enter Student Phone">
       <br>
       <input type="text" name="batch" value="{{$data->batch}}" placeholder="Enter Student Batch">
       <br>
       <button type="submit">Edit Student</button>
 </div>
 
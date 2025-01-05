<div>
   <h2>Student list from Database  using Model</h2>
   {{ print_r($studentslist); }} </br>

</br>
    <table border="1px">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Batch</th>
        </tr>
        @foreach($studentslist as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->batch}}</td>
        </tr>
        @endforeach

</div>

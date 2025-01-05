<div>
   <h2>User list from Database using controller</h2>
   {{ print_r($userinfo); }} </br>

</br>
    <table style="border:1px solid black">
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        @foreach($userinfo as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
        </tr>
        @endforeach

</div>

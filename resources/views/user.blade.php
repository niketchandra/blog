<x-message-banner msg="UserPage Login Successfully" class="success"/>
<x-message-banner msg="UserPage Login Failed" class="error"/>
<x-message-banner msg="warning" class="warning"/>
<style>
    .success{

        background-color: lightgreen;
        color: green;
    }
    .error{
background-color: red;
color: yellow;
}
.warning{

background-color: blue;
color: orange;
}
   </style> 
@include('common.header')
@include('common.inner', ['data' => 'This is a data from User data page'])
@includeif('common.footer', ['data' => 'This is a data from User data page'])  <!--this will include the footer file if it exists, but doesn't give error -->
<p> main user  {{$name}}</p> 
{{rand()}}
<p> user mention in array --> {{$users[3]}} </p>  <!--this will print the second user from the array-->

@if($name=='Niket')
    <p> hello Admin --> {{$name}}</p>
@elseif($name!='Niket')
    <p> hello Other user --> {{$name}}</p>
@else
    <p>No user</p>
@endif
--------------------------------------


<h5> This is a for each loop </h5>
@foreach($users as $user)
    <h3>value of user is --> {{$user}}</h4>
@endforeach
--------------------------------------
<h5> This is a for  loop </h5>
@for($i=0;$i<10;$i++)
    <h3>value of i is --> {{$i}}</h4>
@endfor


<style>
   .input-error: {
      background-color:red;
   }
   
   </style>
<div>

<h5>Current URL: {{URL::current()}} <!-- it will show current url and other way is {{URL()->current()}} -->
</br>
Full URL: {{URL()->full()}}  <!-- it will show the full URL but use other way -->
</br>
You come from previos URL: {{URL::previous()}} <!-- how you come to this page, use as a dynamic breadcum -->
</br>
CHILD PAGE: <a href="{{URL::to('userform',['Niket'])}}">ChildPage dynamic page</a> </h5>


<!--   {{print_r($errors)}} -->
   @if($errors->any())

   @foreach($errors->all() as $error)

<!-- <p style="color:red">{{$error}}</p> -->  <!-- it will show all errors -->
@endforeach
@endif

   <form action="adduser" method="POST">
    @csrf
      <div>
         <label for="name">Name:</label>
         <input type="text" id="name" name="name" value="{{old('name')}}" 
         class="{{$errors->first('name')?'input-error':''}}" >
         <span style="color:red">@error('name'){{$message}}@enderror</span>
      </div>
      <div>
         <label for="email">Email:</label>
         <input type="email" id="email" name="email"  value="{{old('email')}}" 
         class="{{$errors->first('email')?'input-error':''}}" >
         <span style="color:red">@error('email'){{$message}}@enderror</span>
      </div>
      <div>
         <label for="city">city:</label>
         <input type="text" id="city" name="city" value="{{old('city')}}" 
         class="{{$errors->first('city')?'input-error':''}}" >
         <span style="color:red">@error('city'){{$message}}@enderror</span>
      </div>
      <div>
      <label for="php">php</label> 
    <input type="checkbox" name="skill[]" value="php" id="php">
    <label for="node">Node</label>
    <input type="checkbox" name="skill[]" value="node" id="node">
    <label for="java">java</label>
    <input type="checkbox" name="skill[]" value="java" id="java"> <span style="color:red">@error('skill'){{$message}}@enderror</span>
      </div>
 
      <div>
      <label>Password</label>
      <input type="password" name="password" id="password" value="{{old('password')}}">
      <span style="color:red">@error('password'){{$message}}@enderror</span>
      </div>
      <div>
         <label>confirm Password</label>
         <input type="password" name="password_confirmation" id="password_confirmation" >
         <span style="color:red">@error('password_confirmation'){{$message}}@enderror</span>
      </div>
      <!-- <div>
         <label for="password_confirmation">Confirm Password:</label>
         <input type="password" id="password_confirmation" name="password_confirmation">
      </div> -->
      <div>
         <button type="submit">Submit</button>
      </div>
</div>

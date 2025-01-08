<div>
    <h1>Session Profile View</h1>

   <!-- {{session('user')}} -->

    @if(session('user'))
      Welcome, {{session('user')}}
        <br>
        <a href="SessionLogout">Logout</a>
    @else
        You are not Logged In, please 
      <a href="SessionView">Login</a>
    @endif
   
</div>

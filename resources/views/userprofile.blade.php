<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
     <h1>User Profile</h1>
        
    <!-- show user name from url if exist -->
    @if(!isset($name))
        <h2>This is user profile</h2>
    @else
        <h2>Hi, this is {{$name}} user profile</h2>
    @endif
        
     
</div>

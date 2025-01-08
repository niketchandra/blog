
<h4>{{session('message')}} | {{session()->keep(['message'])}}</h4>
<br>
<div>
    <form action="adddata" method="post">
        @csrf
        <span> Enter your name: </span> <input type="text" name="name" placeholder="Enter your name">
        <span> Enter your Password: </span><input type="password" name="password" placeholder="Enter your passord">
          <button type="submit">Submit</button>
    </form>  

</div>
<div style="border: 4px solid black;">
    <h3>Form for Get Route</h3>
    <form method="get" action="RouteTestget">
      <span> Enter your name: </span> <input type="text" name="name" placeholder="Enter your name">
      <span> Enter your Password: </span><input type="password" name="password" placeholder="Enter your passord">
        <button type="submit">Submit</button>
    </form>
</div>
<br>
<div style="border: 4px solid Green;">
    <h3>Form for Post Route</h3>
    <form method="post" action="RouteTestpost">
        @csrf
      <span> Enter your name: </span> <input type="text" name="name" placeholder="Enter your name">
      <span> Enter your Password: </span><input type="password" name="password" placeholder="Enter your passord">
        <button type="submit">Submit</button>
    </form>
</div>
<br>
<div style="border: 4px solid orange;">
    <h3>Form for Put Route --> method=post & input type="hidden" name="_method" value="PUT"</h3>
    <form method="post" action="RouteTestput">
        <input type="hidden" name="_method" value="PUT">
        @csrf
      <span> Enter your name: </span> <input type="text" name="name" placeholder="Enter your name">
      <span> Enter your Password: </span><input type="password" name="password" placeholder="Enter your passord">
        <button type="submit">Submit</button>
    </form>
</div>
<br>
<div style="border: 4px solid yellow;">
    <h3>Form for Patch Route --> method=post & input type="hidden" name="_method" value="PATCH"</h3>
    <form method="post" action="RouteTestpatch">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
      <span> Enter your name: </span> <input type="text" name="name" placeholder="Enter your name">
      <span> Enter your Password: </span><input type="password" name="password" placeholder="Enter your passord">
        <button type="submit">Submit</button>
    </form>
</div>
<br>
<div style="border: 4px solid red;">
    <h3>Form for Delete Route --> method=post & input type="hidden" name="_method" value="DELETE"</h3>
    <form method="post" action="RouteTestdelete">
        <input type="hidden" name="_method" value="DELETE">
        @csrf
      <span> Enter your name: </span> <input type="text" name="name" placeholder="Enter your name">
      <span> Enter your Password: </span><input type="password" name="password" placeholder="Enter your passord">
        <button type="submit">Submit</button>
    </form>
</div>

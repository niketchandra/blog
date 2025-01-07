<div style="border: 4px solid Green;">
    <h3>Form for HTTP Request</h3>
    <form method="post" action="HttpRequestPost">
        @csrf
      <span> Enter your name: </span> <input type="text" name="name" placeholder="Enter your name">
      <span> Enter your Password: </span><input type="password" name="password" placeholder="Enter your passord">
        <button type="submit">Submit</button>
    </form>
</div>
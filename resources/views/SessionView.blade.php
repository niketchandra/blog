
<!--
<div ><h1> Only to vew data, after insert <h1>
    <form action="SessionViewData" method="post">
        @csrf
        <span> Enter your name: </span> <input type="text" name="name" placeholder="Enter your name">
        <span> Enter your Password: </span><input type="password" name="password" placeholder="Enter your passord">
          <button type="submit">Submit</button>
    </form>  
</div>
-->

<div>
    <form action="SessionLogin" method="post">
        @csrf
        <span> Enter your name: </span> <input type="text" name="name" placeholder="Enter your name">
        <span> Enter your Password: </span><input type="password" name="password" placeholder="Enter your passord">
          <button type="submit">Submit</button>
    </form>  

</div>

<div>
   <form action="addstudent" method="post">
      @csrf
      <input type="text" name="name" placeholder="Enter Student Name">
      <br>
      <input type="text" name="email" placeholder="Enter Student Email">
      <br>
      <input type="text" name="phone" placeholder="Enter Student Phone">
      <button type="submit">Add Student</button>
</div>

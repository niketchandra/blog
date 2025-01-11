<div><h1> File Upload </h1></div>
   <form method="post" action="upload" enctype="multipart/form-data">
      @csrf
      <input type="file" name="file" id=""/>
      <button>Upload</button>
   </form>
</div>

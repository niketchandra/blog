@include('common.studentHeader')

<h1> File Upload </h1>

<form action="fileupload" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" required>
    <button type="submit">Upload File</button>
</form>

<x-message-banner msg="HomePage Login Successfully" class="success"/>
<x-message-banner msg="HomePage Login Failed" class="error"/>
<x-message-banner msg="warning" class="warning"/>
<style>
    .success{

        background-color: lightgreen;
        color: green;
    }
    .error{
background-color: red;
color: yellow;
}
.warning{

background-color: blue;
color: orange;
}
   </style> 
<h1> Home Page </h1>
@include('common.header')

@include('common.inner', ['data' => 'This is a data and below are comming from Home page'])

<a href="userdetails">User Details from Database</a> | 
<a href="userdetails">Userlist from Database using controller</a> |
<a href="studentinfo">Student data from Database using model</a>


@includeif('common.footer', ['data' => 'This is a data from User data page']) <!--this will include the footer file if it exists, but doesn't give error -->
<!-- <ul>
    <h3>calling from Views</h3>
    <li><a href="/welcome">Welcome Page</li>
    <li><a href="/about">About Page</li>
    <li><a href="/about/{name}">Dyname About Page - mention name as well</li>
</ul>

<ol>
    <h3>calling from Controller</h3>
   
    <li><a href="user">user</li>
    <li><a href="dynamic-user/{name}">Dyname user Page - mention name as well in URL</li>
    <li><a href="about-page">Dynamic About Page</li>
    <li><a href="admin">Admin Login page</li>
    <li><a href="support">Support Page</li>
    <li><a href="/contactus">Contact Page</li>
</ol> -->
<div style="background-color:rgb(48, 136, 224); padding: 10px;">
<p><a href="/">HomePage</a>  <a href="{{route('uf')}}">user</a> </br> <a href="dynamic-user/{name}">Dyname user Page</a> </br> <a href="about-page">Dynamic About Page</a> </br> <a href="admin">Admin Login page</a> </br> <a href="support">Support Page</a> </br> <a href="/contactus">Contact Page</a> </br> <a href="{{route('bup')}}">Basic-NameRoute-UserProfile-using-Controller</a> </br> <a href="{{route('dup')}}">Dynamic NameRoute UserProfile using controller</a>
</div>

<div style="background-color:yellow; color: red">
 <p>Student Header -->   <a href="student/dashboard">Student Dashbboard</a> | <a href="student/about/Rahul">Rahul Student About</a> | <a href="student/profile">Student Profile</a> 
</div>

<div style="background-color:lightblue; color: Red">
 <p>Teacher Header -->   <a href="dashboard">{{__('homeheader.Teacher Dashbboard')}}</a> | <a href="about">{{__('homeheader.Teacher About')}}</a> | <a href="profile">{{__('homeheader.Teacher Profile')}}</a> 
</div>

<div style="background-color:grey; color: Black">
 <p>Principle Header -->   <a href="principle/dashboard">Principle Dashbboard (MiddleWare Check Applied)</a> | <a href="principle/profile">Principle Profile (MiddleWare Check Applied)</a> <br> Using Miidleware Check Request --> <a href="principle/dashboard?age=20&country=India">Principle Dashboard</a> | <a href="principle/profile?age=20&country=India">Principle Profile</a> | <a href="principle/about?age=20">Principle About from View</a>
</div>

<div style="background-color:lightgreen; color: Black">
 <p>Database and API Header -->   


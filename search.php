

﻿<html lang="ar">
<head>
  <title>Search</title>
  <meta charset=""UTF-8"">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>



     .jumbotron {
      margin-bottom: 0;

    }

h1{
 height: 200px;
    width: 100%;
text-align: center;
background-color:transparent;}
.form-control{
align:center;
}
body {
  padding-top: 30px;

	font: normal 16px/24px helvetica, arial, sans-serif;
	color:#999;
	background-image: url('ba2.jpg');
  opacity: 0.7;
  background-size:50%;
	background-repeat:repeat-x;
}
    footer {
      background-color:ForestGreen;
      padding: 25px;

    clear: both;
   
    height: 60px;
    margin-top: 100px;
    }
    .panel-footer{
    font-size:40px;
text-align: center;
}
a{
font-size:20px;
color:green;
}

.panel panel-primary{
border:0;}
.banner inner-banner table{
img-opacity:0.5;
width:match-parent;
height:100px;
style:100%}
* {
  box-sizing: border-box;
}
input{
margin-left:300px;
text-color:ForestGreen;
text-style:bold;

text-align: left;
}
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 50%;

  font-size: 30px;
text-color=ForestGreen;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}



#myUL {
  list-style-type: none;
  padding: 0;
  margin-right: 60px;
 margin-left: 60px;
text:color:ForestGreen;

   text-align: left;
 

    

}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; 
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}
::placeholder { 
    color:ForestGreen;
    opacity: 1; 
}

#myUL li a:hover:not(.header) {
  background-color: #eee;

}
  </style>
</head>
<body>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>




       
        <ul class="nav navbar-nav navbar-left">

         
          <li><a href="main.php">Home</a></li>
 <li><a href="search.php"> Search</a></li>
            <li><a href="login.php">  Login</a></li>
        </ul>
       </div>

</nav>



<br/><br/>
<form method="post" action="search12.php">

<input type="text" id="myInput" name="search" placeholder="What is you need?" required value="" title="Type in a name">
<br/><br/>
 <button type="submit" name="submit" style="margin:0; padding:0; display:block; width:100%; max-width:200px; height:40px; background-color:ForestGreen; text-align:center; font:bold 18px/40px helvetica, arial, sans-serif; color:#FFF; border:0; -webkit-appearance: none; -webkit-border-radius: 3px; margin-left:550px; -moz-border-radius: 3px; border-radius: 3px; cursor:pointer;" name="_eventId_proceed"
           ">Search
</button>
            

</form>









<div style="position:fixed; bottom:0px; width:100%">  
<footer class="container-fluid text-center">
  <p>CookPad Kitchen @2018</p>

</footer>
</div>

</body>
</html>

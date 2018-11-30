
<?php
 include('server.php');

?>

<html lang="ar">
<head>
  <title>Login</title>
  <meta charset=""UTF-8"">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <script>
function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
var x3=document.forms["myForm"]["password"].value;
if(x3==""){
 alert("Password must be filled out");
        return false;
    }
}
</script>
<style>
body {
  padding-top: 30px;

	font: normal 16px/24px helvetica, arial, sans-serif;
	color:#999;
	background-image: url('ba2.jpg');
  opacity: 0.7;
  background-size:40%;

}
 footer {
      background-color:ForestGreen;
      padding: 25px;
    clear: both;
    position: bottom;
    height: 20px;
 width:100%;

    }
h2{
font-size: 40px;
margin-top:10px;
font-weight: bold;
text-align:center;
color:white;
}
h1{
text-align:center;
color:white;
font-weight: bold;
}
h3{
font-size: 40px;
margin-top:10px;
font-weight: bold;
text-align:center;
color:red;
}
form{
margin-left:100px;
align:center;
padding:10px;}
label, input, button, header, section, article {
	display:block;
align:center;
}
.container{
position: absolute;


  background-color: #ccc;
  border-radius: 3px;
}
body {
  padding-top: 30px;

	font: normal 16px/24px helvetica, arial, sans-serif;
	color:#999;

	background-repeat:repeat-x;
}
.panel-footer{
background-color:ForestGreen;
}
uppercase { text-transform:uppercase }
.right { float:right }
.left { float:left }
.text-center {text-align:center }
</style>

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
            <li><a href="login.php">  Login </a></li>
        </ul>
         </div>

  </nav>








<form method="post" action="" onclick=" validateForm()">
<div align="center">

<div class="container">
 <div class="panel panel-primary">
      <div class="panel-footer" >
<h1>Login to CookPad</h1></div>
<br/>

    <label for="email">User Name</label>
     <input type="text" name="username" required="">



<br/>

    <label for="pwd">Password</label>
   <input type="password" name="password_1" required="">
<br/>


  <button type="submit" name="submit" value="submit" style="margin:0; padding:0; display:block; width:100%; max-width:200px; height:40px; background-color:ForestGreen; text-align:center; font:bold 18px/40px helvetica, arial, sans-serif; color:#FFF; border:0; -webkit-appearance: none; -webkit-border-radius: 3px;  -moz-border-radius: 3px; border-radius: 3px; cursor:pointer;" name="_eventId_proceed"">LogIn</button>
<br/>
<br/>
<a href="register.php" >New User?</a>
</div>
</div>
</div>
</form>
</div>





<div style="position:fixed; bottom:0px; width:100%">
<footer class="container-fluid text-center">
  <p>CookPad Kitchen @2018</p>

</footer>
</div>
    </body>
</html>

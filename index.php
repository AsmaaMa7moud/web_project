<html lang="ar">
<head>
  <title>Search</title>
  <meta charset=""UTF-8"">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  



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
            <li><a href="Login.php">  LoginIn </a></li>
<li><a href="main.php">  Logout </a></li>


        </ul>
       </div>

</nav>



<br/>
<form name ="myform" action="index.php">
<div align="center">

<div class="container">
 <div class="panel panel-primary">
      <div class="panel-footer" >
<h1>Add New Recipe</h1></div>
<br/>




<div class="form-group">
  <label for="name">Name</label>
<input type="text" class="form-control" name="name" required value="">
  
</div>


<div class="form-group">
  <label for="comment">Description components</label>
  <textarea class="form-control" rows="5" name="des" required=""></textarea>

</div>
<div class="form-group">
<label for="exampleFormControlFile1">image input</label>
    <input type="file" class="form-control-file" name ="image"id="exampleFormControlFile1">




  <button type="submit" name="submit" value="submit" style="margin:0; padding:0; display:block; width:100%; max-width:200px; height:40px; background-color:ForestGreen; text-align:center; font:bold 18px/40px helvetica, arial, sans-serif; color:#FFF; border:0; -webkit-appearance: none; -webkit-border-radius: 3px;  -moz-border-radius: 3px; border-radius: 3px; cursor:pointer;" name="_eventId_proceed"">Upload</button>
</div>
</div>
</div>
</div>
</form>
<?php

include("DB.php");

 if(isset($_POST['submit']))
 {
$name=$_POST['name'];
$des=$_POST['des'];
$query = "INSERT INTO project (name,des) 
  			  VALUES('$name', '$des')";
  	mysqli_query($db, $query);
}
?>


<div style="position:fixed; bottom:0px; width:100%">  
<footer class="container-fluid text-center">
  <p>CookPad Kitchen @2018</p>

</footer>
</div>

</body>
</html>

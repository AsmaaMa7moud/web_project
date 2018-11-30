?<html lang="ar">
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
  background-size:50%;
	background-repeat:repeat-x;
}
img {
  border-radius: 50%;
width:50%;
height:50%;
margin-left:300px;

}
footer {
background-color:ForestGreen;
  padding: 25px;
  clear: both;
  position: bottom;
  height: 20px;
 width:100%;
    }
.panel-footer{
background-color:ForestGreen;
}

pre{
 font-size: 30px;
text-align:center;
}
.fou{
  text-align: center;
  font-size: 30px;
  color:white;

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

.panel panel-primary{
border:0;}
.banner inner-banner table{
img-opacity:0.5;
width:match-parent;
height:100px;
style:100%}
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
            <li><a href="register.php">  Register </a></li>
        </ul>
       </div>

</nav>



<br/><br/>
<div class="container">
  <div class="row">


    <div class="col-lg-12 col-md-12 col-sm-12 col-sm-12 col-xs-12">

      <div class="panel panel-primary">
      <div class="panel-footer" >
<?php

include("DB.php");

 if(isset($_POST['submit']))
 {



  $degree=$_POST['search'];
  $sel="SELECT * FROM project where name=?;";
   $rows=$db->getRows($sel,array($degree));

                if(count($rows)>0)
                {



                   foreach($rows as $row)
                   {

                     echo "<h1>$row[1]</h1> </div>  ";
echo "<br/>";
echo "<img src=$row[2] ><br/>";



                   }

                   echo "<br/></div>";

echo "<h3> compontent </h3>";
                   echo "<pre> $row[3] </pre>";
                }

                 else{
                    echo "<div class=fou> No Found you can add it</div>";
                 }

    }

?>




</body>

</html>

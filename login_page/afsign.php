<!DOCTYPE html>
<html>
<head>
	<title>Welcome to ABC</title>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300" type="text/css" />
    
    <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet"> 

    <script type="text/javascript" src="js/main.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
body{
    background-image: url("wp.gif");
    background-repeat: no-repeat;
    background-attachment: fixed;
}
</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid" height=70px>
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img src="one.png" width=80px height=50px class="im">
      </a>
    </div>
     <div class="btn"> 
       <a href="login.html"><button type="button">Log Out</button></a>
       <a ><button type="button">View Personal Info</button></a>
       <a action="updet.php" method="post"><button type="button">Update Personal Info</button></a>
       <a ><button type="button">View Policy Info</button></a>
      </div>
  </div>
</nav>

<div class="container">
  <!-- <h3 class="container new1">Muthoot Institute of Technology and Science</h3> -->
  <br/>
  <br/>
  <h1 class="new2"><b>ABC</b></h1>
  <h2 class="new2"><b>WELCOME   
  	<?php echo $_POST["firstname"]. " " . $_POST["lastname"];
  ?>
  ?>
</b>
</h2>
<div style="color:white; font-family:Arial; font-size:30px;">
  <?php
 	echo "Name: " . $_POST["firstname"] . " " . $_POST["lastname"]. "<br><br>"."Email ID: ".$_POST["email"]. "<br><br>"."Phone number: " . $_POST["pno"]. "<br><br>"."Aadhar Number: " . $_POST["ano"]. "<br><br>"."PAN Number: " . $_POST["pan"]. "<br><br>"."GSTIN: " . $_POST["gst"]."<br/><br>"."Gender: " . $_POST["gender"] ."<br/><br>"."Policy: " . $_POST["pol"];
  ?>
</div>
</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php
		$sername="localhost";
		$username="root";
		$pass="";
		$dbname="chatbot";

		$conn=mysqli_connect($sername,$username,$pass,$dbname);
		if(!$conn)
		{
			die("Connection Failed:".mysqli_connect_error());
		}
		$sql="INSERT INTO signup(username,password,firstname,lastname,email,pno,ano,pan,gst,gender,pol) VALUES ('".$_POST['username']."','".$_POST["password"]."','".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["pno"]."','".$_POST["ano"]."','".$_POST["pan"]."','".$_POST["gst"]."','".$_POST["gender"]."','".$_POST["pol"]."')";
		if(mysqli_query($conn,$sql))
		{
			include("afsign.php");
		} 
		else
		{
			echo "Error:".$sql."<br/>".mysqli_error($conn);
		}
		mysqli_close($conn);
		?>
</body>
</html>
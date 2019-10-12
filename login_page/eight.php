<!DOCTYPE html>
<html>
	<head>
		<title>Select data</title>
	</head>
	<body>
		<?php
		$sername="localhost";
		$username="root";
		$password="";
		$dbname="chatbot";

		$conn=mysqli_connect($sername,$username,$password,$dbname);
		if(!$conn)
		{
			die("Connection Failed:".mysqli_connect_error());
		}

		$sql="SELECT username,password,firstname,lastname,email,pno,ano,pan,gst,gender,pol from signup";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				if(strcmp($row["username"],$_POST["username"])==0&&strcmp($row["password"],$_POST["password"])==0)
				{
					include("aflogin.php");
					break;
				}
			}
		}
		else
		{
			echo "no data";
		}
		mysqli_close($conn);
		?>
	</body>
</html>
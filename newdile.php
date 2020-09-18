<!DOCTYPE html>
<html>
<head>
	<title>DB</title>
</head>
<body>
	<?php
		$usrnm = $_POST['username'];
		$passd = $_POST['password'];
		$mail = $_POST['mail'];
		$mob = $_POST['mobile'];
		$con = mysqli_connect("localhost","vineela_vinni","Mom@nddad3010.","vineela_db");
		if($con->connect_error)
		{
			die("FAILED".$con->connect_error);
		}
		else
		{
			$sql = "INSERT INTO register(username,password,mail,mobile) VALUES ('$usrnm','$passd','$mail','$mob')";
			if(mysqli_query($con,$sql))
			{
				echo "DETAILS SAVED";
			}
			else
			{
				echo "Error: " . $sql . "<br>" . mysqli_error($con);
			}
		}
	?>
</body>
</html>
 

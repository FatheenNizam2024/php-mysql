<?php
	include("config.php");
	
	if(isset($_POST['submit'])) {
		$name = $_POST['Username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$mobilenumber = $_POST['Mobilenumber'];

		//$sql = "INSERT INTO users (username, email, password, mobilenumber) VALUES ('$name', '$email', '$password', '$mobilenumber')";
		$result = mysqli_query($mysqli, "insert into users values('','$name', '$email', '$password', '$mobilenumber')" );
		if($result)
		{
			echo "Registration Successfull";
		}
		else
		{
			echo "Registration Failed";
		}
        mysqli_close($mysqli);
	}
	?>
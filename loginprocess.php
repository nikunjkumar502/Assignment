<?php 
	session_start();
	if(isset($_POST["submit"])){
		
		include_once("connection.php");
		
		$email = $_POST["email"];
		$password = $_POST["password"];
		
		$query = "select * from `users` where email = '$email' and password='$password' ";

		$res = mysqli_query($con,$query);

		if(mysqli_num_rows($res)){
			$_SESSION["logged_in"] = true;
			$_SESSION["email"] = $email;
			header("location:users.php");
		}
		else{

			echo "Not a user ! try again";
		}
	}else echo "<h1>Bad Request</h1>";
?>
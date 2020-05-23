<?php 

	if(isset($_POST["submit"])){

		include_once("connection.php");
		
		$email = $_POST["email"];
		$password = $_POST["password"];
		$password2 = $_POST["re_password"];
		if($password==$password2)
	 {
		if(mysqli_num_rows(mysqli_query($con,"select * from `users` where email = '$email'")))
		{
			echo "2";
			exit(0);
		}

		$query = "insert into `users`(email,password,password2) values('$email','$password','$password2')";

		$res = mysqli_query($con,$query);
		if(mysqli_affected_rows($con)){	
			echo "YOU ARE SIGNUP SUCCESSFULL";
		}
		else{	
			echo "YOU ARE NOT SIGNUP SUCCESSFULL "; 
	// else {
	// 	echo "YOU ENTERED WRONG PASSWORD";
	// 	} 	
}
}	 		
else {
echo "<h1>Bad Request</h1>";
}
}

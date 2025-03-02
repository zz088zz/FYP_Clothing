<?php
    require_once 'dataconnection.php';
	session_start();
	if(ISSET($_POST['loginbtn'])){
		$user_email = $_POST['user_email'];
		$user_password = $_POST['password'];
	
		$query = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$user_email' AND `password` = '$user_password'");
		$fetch = mysqli_fetch_array($query);
		$row = mysqli_num_rows($query);
		
		if($row > 0){
			$_SESSION['id'] = $fetch['id'];
			echo "<script>alert('Login Successfully!')</script>";
            echo "<script>window.location='index1.php'</script>";
		}else{
			echo "<script>alert('Invalid email or password')</script>";
			echo "<script>window.location='login.php'</script>";
		}
		
	}
?>
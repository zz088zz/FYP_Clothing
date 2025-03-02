<?php include("dataconnection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style type="text/css">
body{
    background-color: #EEEEEE;  
}
#login-title
{
	background-color:#DDD;
	background-image:url(images/padlock.png);
	background-repeat:no-repeat;
	background-position:7px 7px;
	background-size:24px 24px;
	border-radius:8px 8px 0px 0px;
	height:40px;
}
 
#login-form
{
	padding:10px;
	text-align:center;
}
 
#login-form input[type=email], [type=password]
{
	width:250px;
	border-radius:5px;
	border:1px solid #ddd;
	height:25px;
	padding:5px 10px 5px 40px
}
 
#login-form input[type=email]
{
	background-image:url(images/email.png);
	background-repeat:no-repeat;
	background-position:10px 10px;
}
 
#login-form input[type=password]
{
	background-image:url(images/key.png);
	background-repeat:no-repeat;
	background-position:10px 10px;
}
 
#login-form input[type=submit]
{
	background-color:#0066FF;
	width:300px;
	padding:10px;
	border:0px;
	color:white;
	font-weight:bold
}
 
#login-form input[type=submit]:hover
{
	background-color:#2C61B7;
	cursor:pointer
}
 
#login-form p a
{
	text-decoration:none;
	/*text-align:center;*/
	font-family:Arial Narrow;
	font-size:0.8em;
}
 
#login-form p a:hover
{
	font-style:italic;
	color:red;
}	
</style>        
    
</head>
    
<body>
<?php
    session_start();
    $id = $_SESSION['id'];
    $query = mysqli_query($connect,"SELECT * FROM users where id='$id' ");
    $row = mysqli_fetch_array($query);
?>
<form action="" method="post">

<div style="margin: auto; border:1px solid #DDD; border-radius:10px; width:400px; padding:0px; background-color: white; margin-top:80px">

	<div id="login-title">
		<h4 style="margin:0px; padding:12px 40px; color:blue; font-family:Arial;">Hi <?php echo $row["email"]; ?></h4>
	</div>	
	<div id="login-form">
		<form name="loginfrm">
            <p><input type="password" name="password" placeholder="New Password" minlength="8" maxlength="16" required/></p>
			<p><input type="password" name="passwordConfirm" placeholder="Confirm Password" minlength="8" maxlength="16" required/></p>
			<p><input type="submit" name="reset" value="Reset Password" /></p>
		</form>
	</div>		
</div>
</form>

</body>
</html>

<?php
 if(isset($_POST['reset']))
 {
    $ID = $id;
    $pass = $_POST['password'];
    $cpass = $_POST['passwordConfirm'];
    
	if($pass == $cpass)
    {
		$update = "update users set password='$pass' where id = '$ID'";
		$sql2 = mysqli_query($connect, $update);
		while($sql2)
		{ 
			 echo "<script>alert('Password Has Been Reset Successfully!')</script>";
			 /*Successful*/
			 echo "<script>window.location='login.php'</script>";
		}
      ?>
      <?php
    }
    else{
      ?>
      <script type="text/javascript">
      alert("Passwords do not match!");
      </script>

      <?php
      header( "url=resetpass.php" );
      
    }

}
    
?>


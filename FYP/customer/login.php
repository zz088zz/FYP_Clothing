<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<!-- Bootstrap CSS -->
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<!-- font awesome  -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Login</title>
<style type="text/css">
body{
    background-color: #EEEEEE;  
}
#login-title
{
	background-color:#DDD;
	background-image:url(../images/padlock.png);
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
/*
#login-form input[type=email], [type=password]
{
	width:250px;
	border-radius:5px;
	border:1px solid #ddd;
	height:25px;
	padding:5px 10px 5px 40px
}*/
 
#login-form input[type=email]
{
	background-image:url(../images/email.png);
	background-repeat:no-repeat;
	background-position:10px 10px;
}
/*
#login-form input[type=password]
{
	background-image:url(../images/key.png);
	background-repeat:no-repeat;
	background-position:10px 10px;
}*/
 
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
.login_oueter {
    width: 360px;
    max-width: 100%;
}
.logo_outer{
    text-align: center;
}
.logo_outer img{
    width:120px;
    margin-bottom: 40px;
}	
</style>        
    
</head>
    
<body>
<form action="loginprosess.php" method="post">

<div style="margin: auto; border:1px solid #DDD; border-radius:10px; width:400px; padding:0px; background-color: white; margin-top:80px">

	<div id="login-title">
		<h4 style="margin:0px; padding:12px 40px; color:blue; font-family:Arial;">Login</h4>
	</div>	
	<div id="login-form">
		<form name="loginfrm">
			 
		<div class="col-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
              </div>

              <input type="text" name="user_email" value="" class="input form-control" id="user_email" placeholder="Email" />
            </div>
          </div>

          <div class="col-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>

              <input type="password" name="password" value="" class="input form-control" id="password" placeholder="Password" required="true" />
			  
              <div class="input-group-append">
                <span class="input-group-text" onclick="password_show_hide();">
                  <i class="fas fa-eye" id="show_eye"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                </span>
               </div>
            </div>
          </div>

			<p><input type="submit" name="loginbtn" value="LOGIN" /></p>
		</form>

        <tr>
            <td style="text-align: left;"><a href="forgotpass.php">Forgot your password?</a></td>	
            <td style="text-align: right;"><a href="register.php">Sign Up</a></td>	
        </tr>
         			
	</div>		
</div>
</form>

</body>
</html>

<script>
function password_show_hide() {
  var x = document.getElementById("password");
  var show_eye = document.getElementById("show_eye");
  var hide_eye = document.getElementById("hide_eye");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
    
  }
}
</script>


<?php include("dataconnection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>My Profile</title>
</head>
<body>
<?php
    session_start();
    $id=$_SESSION['id'];
    $query=mysqli_query($connect,"SELECT * FROM admin where id='$id'");
    $row=mysqli_fetch_array($query);
    include("menu.php");
  ?>
  <br>
  <br>
  <br>
<form action="Profile_update.php" method="post">
    <center>
    <div id="wrapper">
        <h3>My Profile</h3>
        <div class="col-content">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Name:</label><input type="text" name="username" size="" value="<?php echo $row['username']; ?>">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Email:</label><input type="email" name="email" value="<?php echo $row['email']; ?>">
            <p><label>No.Phone:</label><input type="text" name="phone_number" value="<?php echo $row['phone_number']; ?>">
            <p><input type="submit" name="edit" value="save"></p>
        </div>
    </div>  
</form>
<center>
</body>
</html>
<?php
 session_start();
 include "dataconnection.php";

 
 if(isset($_POST['edit']))
 {
    //if the edit there , this function will run
    $id = $_SESSION['id']; //assigns the id to $id.
    //retrieves the user id from the session data using $_SESSION['id'].
    $name = $_POST['username']; //username in name
    //$pass=$_POST['password'];
    $email = $_POST['email']; //email in email
    $pnumber = $_POST['phone_number']; //phone_number in pnumder
    //$gender=$_POST['gender'];
    //collects the updated user information from the form data, such as the username, email and phone number, using $_POST variables.

    $select = "select * from users where id='$id'";
    //performs a SELECT query to check if the id retrieved from the session matches the id in the database.
    $query = mysqli_query($connect, $select);
    $row = mysqli_fetch_assoc($query);
    $res = $row['id'];
    //id retrieved from the database matches the id stored in the session by comparing the values of $res and $id.
    if($res === $id)
    {
        $update = "update users set username='$name',email='$email',phone_number='$pnumber' where id='$id'";
        $sql2=mysqli_query($connect,$update);
        if($sql2)
        { 
            echo "<script>alert('Successfully!')</script>";
            /*Successful*/
            header( "refresh:0.5; url=index1.php" );
            //to the index1.php page after 0.5 seconds
        }
        else
        {
            /*sorry your profile is not update*/
            header('location:myprofile.php');
        }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:index1.php');
    }
 }
?>
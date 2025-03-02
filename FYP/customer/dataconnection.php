<?php


$connect = mysqli_connect("localhost","root","","pos");
/*
if($connect)
{
  echo("Connect successfully!");
}*/
if(!$connect){
  die("Error: Failed to connect to database!");
}

?>

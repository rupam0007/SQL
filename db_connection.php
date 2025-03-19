<?php
  global $conn;
  $server_name="localhost";
  $user_name="root";
  $password="";
  $database="rupamdb";
  $conn=mysqli_connect($server_name,$user_name,$password,$database);
  if(!$conn)
  {
  	echo ("connected failed".mysqli_connect_error());
  }
  else
  {
  	echo "connected";
  }
?>
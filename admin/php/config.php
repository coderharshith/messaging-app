<?php
error_reporting(E_ERROR | E_PARSE);
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "admin_tb";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>

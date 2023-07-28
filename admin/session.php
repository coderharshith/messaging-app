<?php 
  session_start();
  include_once "php/config.php";
  include_once "header.php";
  $id = $_SESSION['id'];
  // $password =  $_SESSION['password'];
  
    // $sql = "SELECT `admin_email`, `admin_password` FROM `admin_login` WHERE 'admin_email' = '{$email}' AND 'admin_password' = '{$password}'";
    if(!isset($id)){
        header("location: index.php");
    }
?>
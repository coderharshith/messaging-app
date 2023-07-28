<?php
    session_start();
    if(isset($_SESSION['id'])){
        include_once "config.php";
                unset($_SESSION['id']);
                // session_unset();
                // session_destroy();
                header("location: ../index.php");
        }
?>
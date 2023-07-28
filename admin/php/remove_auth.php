<?php 
error_reporting(E_ERROR | E_PARSE);
    session_start();
    include_once "config.php";
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($password)){
        $en_pas = md5($password);
        $sql = mysqli_query($conn, "SELECT * FROM admin_login WHERE admin_password = '{$en_pas}'");
            $row = mysqli_fetch_assoc($sql);
            $pass = $row['admin_password'];
            if($en_pas === $pass){
                if($sql){
                    echo "success";
                }else{
                    echo "Something went wrong. Please try again!";
                }
            }else{
                echo "Password is Incorrect!";
            }
    }else{
        echo "Pleace enter the password";
    }
?>

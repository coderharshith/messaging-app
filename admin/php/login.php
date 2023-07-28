<?php 
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($email) && !empty($password)){
        $emails = base64_encode($email);
        $sql = mysqli_query($conn, "SELECT * FROM admin_login WHERE admin_email = '{$emails}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $en_pass = md5($password);
            $enc_pass = $row['admin_password'];
            if($en_pass === $enc_pass){
                $sql2 = mysqli_query($conn, "SELECT * FROM admin_login WHERE admin_password = '{$password}'");
                if($sql2){
                    $en_pass = $row;
                    $_SESSION['id'] = 1;
                    echo "success";
                }else{
                    echo "Something went wrong. Please try again!";
                }
            }else{
                echo "Email or Password is Incorrect!";
            }
        }else{
            echo "$email - This email not Exist!";
        }
    }else{
        echo "All input fields are required!";
    }
    $_SESSION['email'] = $email;

?>

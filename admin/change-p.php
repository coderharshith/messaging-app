<?php 
session_start();

if (isset($_SESSION['email'])) {

    include "php/config.php";
if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);

    if(empty($op)){
      header("Location: change-password.php?error=Old Password is required");
	  exit();
    }
	else if(empty($np)){
      header("Location: change-password.php?error=New Password is required");
	  exit();
    }
	else if($np !== $c_np){
      header("Location: change-password.php?error=The confirmation password  does not match");
	  exit();
    }else {
    	// hashing the password
    	$op = md5($op);
    	$np = md5($np);


        $sql = "SELECT admin_password
                FROM admin_login WHERE 
                admin_password='$op'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	

				$emails = $_POST['e_mail'];
				$email = base64_encode($emails);
				if($_POST['e_mail'] !== ""){
					$sql_f = "UPDATE admin_login
							  SET admin_email='$email'
							  WHERE 1";
					mysqli_query($conn, $sql_f);
				}
				if($_POST['np'] !== "" ){
				  $sql_2 = "UPDATE admin_login
							  SET admin_password='$np'
							  WHERE 1";
					  mysqli_query($conn, $sql_2);
					  header("Location: change-password.php?success=Your successfully updated");
					  exit();
					}
	
				
        }else {
        	header("Location: change-password.php?error=Incorrect password");
	        exit();
        }
    }
	}else{
		header("Location: change-password.php");
		exit();
	}

}else{
     header("Location: index.php");
     exit();
}
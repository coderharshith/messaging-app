<?php 
session_start();

if (isset($_SESSION['unique_id'])) {

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
	// else if(empty($np)){
    //   header("Location: change-password.php?error=New Password is required");
	//   exit();
    // }
	else if($np !== $c_np){
      header("Location: change-password.php?error=The confirmation password  does not match");
	  exit();
    }else {
    	// hashing the password
    	$op = md5($op);
    	$np = md5($np);
        $id = $_SESSION['unique_id'];

        $sql = "SELECT password
                FROM users WHERE 
                unique_id='$id' AND password='$op'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
			

				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				if($_POST['fname'] !== "" && $_POST['lname'] !== "" ){
					$sql_f = "UPDATE users
							  SET fname='$fname'
							  WHERE unique_id='$id'";
					mysqli_query($conn, $sql_f);
					$sql_l = "UPDATE users
							  SET lname='$lname'
							  WHERE unique_id='$id'";
					mysqli_query($conn, $sql_l);
				
					header("Location: change-password.php?success=Your successfully updated");
				exit();
				}
	
				if($_POST['np'] !== "" ){
					if(strlen($password) > 8){
						$sql_2 = "UPDATE users
									SET password='$np'
									WHERE unique_id='$id'";
							mysqli_query($conn, $sql_2);
							header("Location: change-password.php?success=Your successfully updated");
							exit();
						}else{
							header("Location: change-password.php?error=Password must be more then 8 character");
							exit();
						}
					}
				if($_FILES["image"] !== NULL){
				if(isset($_FILES["image"]["name"])){		  
					$imageName = $_FILES["image"]["name"];
					$imageSize = $_FILES["image"]["size"];
					$tmpName = $_FILES["image"]["tmp_name"];
			  
					// Image validation
					$validImageExtension = ['jpg', 'jpeg', 'png'];
					$imageExtension = explode('.', $imageName);
					$imageExtension = strtolower(end($imageExtension));
					if (!in_array($imageExtension, $validImageExtension)){
					  header("Location: change-password.php?error=Invalid Image Extension");
					}
					elseif ($imageSize > 1200000){
						header("Location: change-password.php?error=Image Size Is Too Large");
					}
					else{
					  $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
					  $newImageName .= '.' . $imageExtension;
					  $query = "UPDATE users SET img = '$newImageName' WHERE unique_id = '$id'";
					  mysqli_query($conn, $query);
					  move_uploaded_file($tmpName, 'php/images/' . $newImageName);
					  header("Location: change-password.php?success=Your successfully updated");
					exit();
					}
				  }}
				  else{
					header("Location: change-password.php?error=Please upload an image file ");
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
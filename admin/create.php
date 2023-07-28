<?php include_once "navbar.php"; ?>
<link rel="stylesheet" href="style/error.css">
<link rel="icon" type="image/x-icon" href="logo.svg">
<div class="wrapper">
    <section class="form login">
      <header>Database Creation </header>
<?php
 include_once "header.php"; 
    $host = "localhost";
    $user ="root";
    $pass=""; 
    $con = mysqli_connect($host,$user,$pass);
    if(!$con){
        die("sorry we failed to connect :".mysqli_connect_error());
    }
    
    $sql = "CREATE DATABASE admin_tb";
    $result = mysqli_query($con,$sql);

    if($result){
        echo "<div class='success'>The Admin Database is created successfully</div>";
    }
    else{
        echo "<div class='error'>The Database Was not created successfully because of this error 🚀". mysqli_error($con)."</div>";
    }
    $select=  mysqli_select_db($con,'admin_tb');
    $admin_tb = " CREATE TABLE `admin_login` (
        `admin_id` int(11) NOT NULL AUTO_INCREMENT,
        `admin_email` varchar(255) NOT NULL,
        `admin_password` varchar(255) NOT NULL,
        PRIMARY KEY (`admin_id`),
        UNIQUE KEY `admin_email` (`admin_email`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

      $admin_result = mysqli_query($con,$admin_tb);
      $admin_data = 'INSERT INTO admin_login VALUES("1","QWRtaW5AY3BnLmNvbQ==","ec1f7f807b984fd3f1987f4e890bb116")';
      $data_result = mysqli_query($con,$admin_data);    


     $sql1 = "CREATE DATABASE chatapp";
    $res = mysqli_query($con,$sql1);

    if($res){
        echo "<div class='success'>The User Database is created successfully</div>";
    }
    else{
        echo "<div class='error'>The Database Was not created successfully because of this error 🚀". mysqli_error($con)."</div>";
    }
    $select=  mysqli_select_db($con,'chatapp');
      $user_tb = "CREATE TABLE `users` (
        `user_id` int(11) NOT NULL AUTO_INCREMENT,
        `unique_id` int(200) NOT NULL,
        `fname` varchar(255) NOT NULL,
        `lname` varchar(255) NOT NULL,
        `email` varchar(255) NOT NULL,
        `password` varchar(255) NOT NULL,
        `img` varchar(400) NOT NULL,
        `status` varchar(100) NOT NULL,
        PRIMARY KEY (`user_id`),
        UNIQUE KEY `email` (`email`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

      $user_result = mysqli_query($con,$user_tb);

      $mgs_tb = "CREATE TABLE `messages` (
        `msg_id` int(11) NOT NULL AUTO_INCREMENT,
        `incoming_msg_id` int(200) NOT NULL,
        `outgoing_msg_id` int(200) NOT NULL,
        `msg` text NOT NULL,
        PRIMARY KEY (`msg_id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

      $mgs_result = mysqli_query($con,$mgs_tb);

      if($admin_result && $user_result && $mgs_result){
        echo "<div class='success'>The Tables is created successfully</div>";
    }
    else{
        echo "<div class='error'>The Tables Was not created successfully because of this error 🚀". mysqli_error($con)."</div>";
    }

    mysqli_close($con);
?>
<div class="field button">
          <a href="index.php"><button class="btn_c">Continue</button></a>
</div>
</section>
  </div>
  <?php
      include_once "footer.php";
    ?>
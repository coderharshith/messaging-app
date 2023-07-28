<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
	<div class="wrapper ">
	  <section class="form signup">
		<header>Edit Profile</header>
		<form action="change-p.php" method="POST" enctype="multipart/form-data" autocomplete="off">
    <!-- <form action="change-p.php" method="post">
     	<h2>Change Password</h2> -->
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <div class="error-text"></div>
        <div class="field input">
          <label for="pa">old Password</label>
          <input type="password" id="pa" name="op" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="name-details">
          <div class="field input">
            <!-- id are used for only accessblity -->
            <label for="fn">First Name</label>
            <input type="text" id="fn" name="fname" placeholder="First name" >
          </div>
          <div class="field input">
            <label for="ln">Last Name</label>
            <input type="text" id="ln" name="lname" placeholder="Last name" >
          </div>
        </div>
        <div class="field input">
          <label for="pa">New password</label>
          <input type="password" id="pa" name="np" placeholder="Enter new password" >
          
        </div>
        <div class="field input">
          <label for="pa">Canform password</label>
          <input type="password" id="pa" name="c_np" placeholder="Enter new password" >
        </div>
        <div class="field image">
          <label for="im">Select Image</label>
          <input type="file" id="im" name="image" value="default-pp.png" accept="image/x-png,image/gif,image/jpeg,image/jpg">
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Save Change">
        </div>
      </form>
      <div class="link"><a href="users.php">Go back</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
</body>
</html>

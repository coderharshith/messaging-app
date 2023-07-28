<?php 
  session_start();
  include_once "php/config.php";
  include_once "session.php";
  // include_once "navbar.php";
?>
<?php include_once "header.php"; ?>
<link rel="stylesheet" href="style/error.css">
<body>
	<div class="wrapper">
	  <section class="form signup">
		<header>Admin Edit Profile</header>
		<form action="change-p.php" method="POST" enctype="multipart/form-data" autocomplete="off">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

		<body>
        <div class="error-text"></div>
        <div class="field input">
          <label for="pa">old Password</label>
          <input type="password" id="pa" name="op" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field input">
          <label for="pa">New Mail</label>
          <input type="email" id="pa" name="e_mail" placeholder="Enter new mail" required>
        </div>
        <div class="field input">
          <label for="pa">New password</label>
          <input type="password" id="pa" name="np" placeholder="Enter new password" >
        </div>
        <div class="field input">
          <label for="pa">Canform password</label>
          <input type="password" id="pa" name="c_np" placeholder="Enter new password" >
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Save Change">
        </div>
      </form>
      <div class="link"><a href="modify.php">Go back</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
</body>
</html>

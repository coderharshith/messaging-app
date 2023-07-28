<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php";?>
<body>
  <div class="wrapper lg">
    <section class="form signup">
      <header>Realtime Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <!-- id are used for only accessblity -->
            <label for="fn">First Name</label>
            <input type="text" id="fn" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label for="ln">Last Name</label>
            <input type="text" id="ln" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label for="ea">Email Address</label>
          <input type="text" id="ea" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label for="pa">Password</label>
          <input type="password" id="pa" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label for="im">Select Image</label>
          <input type="file" id="im" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" >
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>

<?php include_once "header.php"; 
include_once "session.php";
        error_reporting(0);
        error_reporting(E_ERROR | E_PARSE);
        include_once "navbar.php";
        ?>

<body>
  <div class="wrapper">
    <section class="form login">
      <header>Remove Database</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Admin Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue">
        </div>
      </form>
      <div class="link">Give Once Aain to remove database <a href="modify.php">Back</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/remove_auth.js"></script>
  <?php
      include_once "footer.php";
    ?>
</body>
</html>

<?php include_once "header.php";
  if(isset($_SESSION['id'])){
    header("location: modify.php");
  }
  // include_once "navbar.php";
  header("location".SITEURL."/admin");
?>
<!-- <head>
  <script type="text/javascript">
      function preventBack(){window.history.forward()};
      setTimeout("preventBack()",0);
      window.onunload=function(){null;}
    </script>
</head> -->
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Realtime Admin </header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Amin Mail Address</label>
          <input type="text" name="email" placeholder="Enter your mail" required>
        </div>
        <div class="field input">
          <label for="pa">Password</label>
          <input type="password" id="pa" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue">
        </div>
      </form>
      <div class="link">create account as normal user ? <a href="../index.php">Signup now</a></div>
    </section>
  </div>
  
  <script src="javascript/psh.js"></script>
  <script src="javascript/login.js"></script>
  <?php
      // include_once "footer.php";
    ?>
</body>
</html>

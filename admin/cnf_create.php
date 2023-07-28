<?php include_once "navbar.php";
 ?>
<link rel="stylesheet" href="style/error.css">
<link rel="icon" type="image/x-icon" href="logo.svg">
<div class="wrapper">
    <section class="form login">
      <header>Database Create </header>
<?php
        include_once "header.php";
        echo "<div class='success'>Do you want to create Database once agian</div>";
?>
<div class="field button">
          <a href="create.php"><button>Yes</button></a>
          <a href="thank.php"><button>No</button></a>
</div>
</section>
  </div>
  <?php
      include_once "footer.php";
    ?>
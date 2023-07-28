<?php include_once "navbar.php";
    include_once "session.php";
 ?>
<link rel="stylesheet" href="style/error.css">
<link rel="icon" type="image/x-icon" href="logo.svg">
<div class="wrapper">
    <section class="form login">
      <header>Database Remove </header>
<?php
        include_once "header.php";
        echo "<div class='error'>Do you want to remove Database once agian</div>";
?>
<div class="field button">
          <a href="remove.php"><button>Yes</button></a>
          <a href="modify.php"><button>No</button></a>
</div>
</section>
  </div>
  <?php
      include_once "footer.php";
    ?>
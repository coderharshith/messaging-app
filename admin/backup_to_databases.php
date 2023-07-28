<?php include_once "header.php"; 
      error_reporting(0);
      error_reporting(E_ERROR | E_PARSE);
      include_once "navbar.php";
?>
 <body>
         <div class="wrapper">
              <section class="form signup">
                   <header>Realtime Chat App</header>
                   <form method="post" enctype="multipart/form-data" action="db_back.php">
                                        <div class="field image">
                                             <label for="im">Select SQL file</label>
                                             <input type="file" name="database" accept=".sql" required />
                         </div>
                         <div class="field button">
                              <input type="submit" name="import" class="btn-i btn-info" value="Import" />
                              <div class="link"><a href="modify.php">Back</a></div>
        </div>
      </form>
    </section>
  </div>
  <?php
      include_once "footer.php";
    ?>
</body>
</html>
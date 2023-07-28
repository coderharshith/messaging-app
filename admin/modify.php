<?php
     include_once "session.php";
     include_once "navbar.php";
?>
<!-- <head>
   <script type="text/javascript">
      function preventBack(){window.history.forward()};
      setTimeout("preventBack()",0);
      window.onunload=function(){null;}
    </script>
</head> -->
<link rel="stylesheet" href="style/error.css">
<body>
    <div class="container">
      <ul>
        <li class="li1">
          <a href="remove_database.php"><input class="viwe_page" type="submit" value="Remove Database"></a>
          <a href="user_list.php"><input class="viwe_page" type="submit" value="User Table Detail"></a>
          <a href="backup_to_file.php"><input class="viwe_page" type="submit" value="BackUp to File"></a>
        </li>
        <li class="li2">
          <a href="backup_to_databases.php"><input class="viwe_page" type="submit" value="BackUp to database"></a>
          <a href="change-password.php"><input class="viwe_page" type="submit" value="Change details"></a>
          <a href="php/logout.php"><input class="viwe_page" type="submit" value="Logout"></a>
        </li>
      </ul>
    </div>
 
    <!-- <a href="help.html" ><button>Help</button></a> -->
    <?php
      include_once "footer.php";
    ?>
</body>
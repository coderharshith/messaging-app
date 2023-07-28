<?php
include_once "navbar.php";
?>
<link rel="stylesheet" href="style/error.css">
<link rel="icon" type="image/x-icon" href="logo.svg">
<div class="wrapper">
    <section class="form login">
      <header>Database Creation </header>
<?php
        error_reporting(0);
        error_reporting(E_ERROR | E_PARSE);
        include_once "session.php";
        include_once "php/config.php";
        include_once "header.php";
        $sql = "DROP DATABASE chatapp";
       $remove = mysqli_query($conn,$sql);                                                                                                                                                                                                                                                                                                                                                                                                          
        if($remove){
                echo "<div class='success'>The Database is Removed successfully</div>";
        }
        else{
                echo "<div class='error'>Databases does not exisit so it ". mysqli_error($conn)."</div>";
            }
        $sql1 = "DROP DATABASE admin_tb";
        $rem = mysqli_query($conn,$sql1);                                                                                                                                                                                                                                                                                                                                                                                                          
         if($rem){
                echo "<div class='success'>The Database is Removed successfully</div>";
        }
        else{
                echo "<div class='error'>Databases does not exisit so it cannot remove". mysqli_error($conn)."</div>";
        }
            mysqli_close($con);
?>
        <div class="field button">
                <a href="cnf_create.php"><button>Continue</button></a>
        </div>
</section>
</div>
<?php
      include_once "footer.php";
    ?>
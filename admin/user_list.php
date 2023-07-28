<?php include_once "header.php"; 
      error_reporting(0);
      error_reporting(E_ERROR | E_PARSE);
      include_once "php/config.php";
      include_once "php/configlist.php";
      include_once "session.php";
      include_once "navbar.php";
      ?>
<link rel="stylesheet" href="style/user_list.css">

<body>
  <div class="src">

    <input type="text" name="" class="search" id="searchuser" placeholder="search user....." onkeyup= "searchfn()">
  </div>
    <div  class="p tb" id="main_table">
        <table class="table">
            <caption>Users Details</caption>
            <thead>
                <th>S.No</th>
                <th>Fisrt_Name</th>
                <th>Last_Name</th>
            <th>Email</th>
        </thead>
        <tbody>
          <div class="co"></div>
        <?php
                mysqli_select_db($conn,$dbname) or die(mysqli_error());
                $result = mysqli_query($conn,"SELECT  `fname`, `lname`, `email` FROM `users`");
                $j = 0;
                while($i = mysqli_fetch_array($result)){
                    $j++;
                  echo " <tr><td data-label='S.No'>".$j."</td>"." <td data-label='Fisrt_Name'>".$i['fname']."</td>"." <td data-label='Last_Name'>".$i['lname']."</td>"." <td data-label='Email'>". base64_decode($i['email'])."</td></tr>";
                }
                mysqli_close($conn);
?>
        </tbody>
    </table>
</div>
<?php
    //   include_once "footer.php";
    ?>
<div class="btn-c">

    <button class="btn"  onclick="window.print()">Print</button>
    <button class="btn1"><a href="modify.php">Go_Back</a></button> 
</div>
<script src="javascript/search_list.js"></script>
</body>
</html>
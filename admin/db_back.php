<?php
     include_once "session.php";
     include_once "navbar.php";
?>
<link rel="stylesheet" href="style/error.css">
<?php 
error_reporting(0);
error_reporting(E_ERROR | E_PARSE);

$message = '';
if(isset($_POST["import"]))
{
 if($_FILES["database"]["name"] != '')
 {
  $array = explode(".", $_FILES["database"]["name"]);
  $extension = end($array);
  if($extension == 'sql')
  {
   $db_name ='chatapp';
   $connect = mysqli_connect("localhost", "root", "", "$db_name");
   $output = '';
   $count = 0;
   $file_data = file($_FILES["database"]["tmp_name"]);
   foreach($file_data as $row)
   {
    $start_character = substr(trim($row), 0, 2);
    if($start_character != '--' || $start_character != '/*' || $start_character != '//' || $row != '')
    {
     $output = $output . $row;
     $end_character = substr(trim($row), -1, 1);
     if($end_character == ';')
     {
      if(!mysqli_query($connect, $output))
      {
       $count++;
      }
      $output = '';
     }
    }
   }
   if($count > 0)
   {
    $message = '<div class="error"><label class="text-danger">There is an error in Database Import because data alredy existing in the database</label></div>';
   }
   else
   {
    $message = '<div class="success"><label class="text-success">Database Successfully Imported</label></div>';
   }
  }
  else
  {
   $message = '<label class="text-danger">Invalid File</label>';
  }
 }
 else
 {
  $message = '<label class="text-danger">Please Select Sql File</label>';
 }
}
?>

<?php include_once "header.php"; ?>
 <body>
         <div class="wrapper">
              <section class="form signup">
               <header>Realtime Chat App</header>
               <form >
               <div><h3><?php echo $message; ?></h3></div>
               <div class="field button">
               <a href="modify.php"><input class="in" type="button" value="Go Back"></a>
            
          </div>
      </form>
    </section>
  </div>
</body>
</html>

<?php
require 'db_conn.php';

$newsletter = new newsletter();

if(isset($_POST["submit"])){
    $result = $newsletter->newsletter($_POST["email"]);

  if($result == 1){
    echo "<script> alert('Thank you for subscibeing for the newsletter.'); </script>";
    header("Location: index.php");
    exist();
    
  }
  elseif($result == 10){
    echo"<script> alert('you have already subscibed for the newsletter.'); </script>";
    
  }
  elseif($result == 100){
    echo
    "<script> alert('Password Does Not Match'); </script>";
    
  }
}
?> 


<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users_page.php");
  }
  else header("location: login_page.php");
?>



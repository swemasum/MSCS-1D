<?php
session_start();

 if(!isset($_SESSION['admin_id'])){
    //session_destroy();
      header('Location:login_form.php');

 }
 ?>

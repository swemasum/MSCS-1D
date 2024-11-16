<?php

session_start();
if(!isset($_SESSION['admin_id'])){
 //  session_destroy();
    // header('Location:login_form.php');
 //echo "here";
}else{
  header('Location:index.php');
}

 if(isset($_POST['submit'])){
   include_once "connection.php";
   $email=mysqli_real_escape_string($conn,$_POST['email']);
   $pin=mysqli_real_escape_string($conn,$_POST['pin']);


   $sql = "SELECT admin_id,email,a_name,password FROM admin where email='$email' and password='$pin'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    if($row = mysqli_fetch_assoc($result)) {

      $_SESSION['admin_id']=$row['admin_id'];
          $_SESSION['admin_name']=$row['a_name'];


          header('Location:index.php');
        unset($_SESSION['wrong_email_pin']);


    }else{

    }
} else {
  $_SESSION['wrong_email_pin']="true";

header('Location:login_form.php');

}

mysqli_close($conn);
 }

 ?>

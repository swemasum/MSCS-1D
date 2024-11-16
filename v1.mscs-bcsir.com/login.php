<?php

session_start();

 if(isset($_POST['submit'])){
   include_once "connection.php";
   $email=mysqli_real_escape_string($conn,$_POST['email']);
   $pin=mysqli_real_escape_string($conn,$_POST['pin']);


   $sql = "SELECT * FROM request where email='$email' and pin='$pin'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    if($row = mysqli_fetch_assoc($result)) {

      $_SESSION['user_id']=$row['request_id'];
          $_SESSION['user_name']=$row['user_name'];
            echo "logged in";
          header('Location:software/');
        unset($_SESSION['wrong_email_pin']);

    }else{

    }
} else {
  $_SESSION['wrong_email_pin']="true";
header('Location:index.php');

}

mysqli_close($conn);
 }

 ?>

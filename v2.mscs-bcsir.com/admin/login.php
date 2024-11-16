<?php

session_start();

if(isset($_SESSION['admin'])){
      header('Location:admin.php');
}

 if(isset($_POST['submit'])){
   include_once "../connection.php";
   $email=mysqli_real_escape_string($conn,$_POST['email']);
   $password=mysqli_real_escape_string($conn,$_POST['password']);


   $sql = "SELECT a_id,email,password FROM admin where email='$email' and password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    if($row = mysqli_fetch_assoc($result)) {

          $_SESSION['admin']=$row['a_id'];

          header('Location:admin.php');

    }else{

    }
} else {
header('Location:index.php');
}

mysqli_close($conn);
 }

 ?>

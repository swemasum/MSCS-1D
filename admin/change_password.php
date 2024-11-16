<?php

include_once "login_check.php";
include_once "connection.php";


$new_pass=$_POST['renew_pass'];

echo $new_pass;
  $sql = "UPDATE admin set password='$new_pass' WHERE admin_id=1";

if (mysqli_query($conn, $sql)) {
  header("Location:index.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);



 ?>

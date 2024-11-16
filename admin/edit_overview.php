<?php
include_once "login_check.php";
include_once "connection.php";

if(isset($_POST['submit'])){
//  $notice_id=  $_SESSION['notice_id'];
  $headline=mysqli_real_escape_string($conn,$_POST['headline']);

  $description=mysqli_real_escape_string($conn,$_POST['description']);


  $sql = "update `overview` set headline='$headline',description='$description'";

}



    if (mysqli_query($conn, $sql)) {
    //    echo "Successfully update batch no";
mysqli_close($conn);
      header('Location:view_overview.php?update=true');
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }




 ?>

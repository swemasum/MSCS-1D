<?php
include_once "login_check.php";
include_once "connection.php";

if(isset($_POST['submit'])){
//  $notice_id=  $_SESSION['notice_id'];
  $link=mysqli_real_escape_string($conn,$_POST['link']);

  $publication=mysqli_real_escape_string($conn,$_POST['publication']);

$id=$_SESSION['publication_id'];
  $sql = "update `publication` set link='$link',publication='$publication' where publication_id='$id'";

}



    if (mysqli_query($conn, $sql)) {
    //    echo "Successfully update batch no";
mysqli_close($conn);
      header('Location:publication_list.php?update=true');
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }




 ?>

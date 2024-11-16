<?php
include_once "../../../connection.php";
$requested_id=$_GET['id'];
$sql = "Delete from request WHERE request_id='$requested_id'";

if (mysqli_query($conn, $sql)) {
  Header("Location:requested_user.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
 ?>

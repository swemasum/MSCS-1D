<?php
include_once "connection.php";
          include_once "login_check.php";
// sql to delete a record

$id=$_GET['id'];
$sql = "DELETE FROM publication WHERE publication_id=$id";

if (mysqli_query($conn, $sql)) {
   mysqli_close($conn);
   header('Location:publication_list.php?delete=true');
} else {
   echo "Error deleting record: " . mysqli_error($conn);
}


 ?>

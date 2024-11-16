<?php
include_once "login_check.php";
include_once "connection.php";

if(isset($_POST['submit'])){

  $publication=mysqli_real_escape_string($conn,$_POST['publication']);
  $link=mysqli_real_escape_string($conn,$_POST['link']);





    $sql = "insert into publication(publication,link) values('$publication','$link')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Successfully update batch no";
mysqli_close($conn);
       header('Location:publication_list.php?added=true');
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}else{
  mysqli_close($conn);
  header('Location:add_publication_form.php');
}

  mysqli_close($conn);
 ?>

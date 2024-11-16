<?php
include_once "login_check.php";
include_once "connection.php";

if(isset($_POST['submit'])){
  $s_id=$_SESSION['s_id'];
  $s_name=mysqli_real_escape_string($conn,$_POST['s_name']);
  $designation=mysqli_real_escape_string($conn,$_POST['designation']);
  $priority=mysqli_real_escape_string($conn,$_POST['priority']);
  $email=mysqli_real_escape_string($conn,$_POST['email']);

  $rg_link=mysqli_real_escape_string($conn,$_POST['rg_link']);
  $category=mysqli_real_escape_string($conn,$_POST['category']);
  $role=mysqli_real_escape_string($conn,$_POST['role']);



    $name = $_FILES['file']['name'];
    if(!$name==""){

      $tmp_name =  $_FILES['file']['tmp_name'];
      $location = "scientist_image/";
      $uniquename=time()."-".rand(1000, 9999)."-".$name;

      $new_name = $location.$uniquename;
      if (move_uploaded_file($tmp_name, $new_name)){
                  echo "uploaded";
      }
      else{

          $new_name = $location.time()."-".rand(1000, 9999)."-".$name;
          if (move_uploaded_file($tmp_name, $new_name)){
                  echo "uploaded ";
          }
          else{
            $uniquename='';
                  echo"failed, better luck next time";
          }
      }

      $sql = "update scientists set s_name='$s_name',designation='$designation',role='$role',category='$category',priority='$priority',email='$email',rg_link='$rg_link',image_name='$uniquename' where s_id='$s_id'";
  unlink("scientist_image/".$_SESSION['image']);
  unset($_SESSION['image']);

}else{
  $sql = "update scientists set s_name='$s_name',designation='$designation',role='$role',category='$category',priority='$priority',email='$email',rg_link='$rg_link' where s_id='$s_id'";

}



    if (mysqli_query($conn, $sql)) {
    //    echo "Successfully update batch no";
mysqli_close($conn);
      header('Location:scientist_list.php?update=true');
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}else{
  mysqli_close($conn);
  header('Location:scientist_list.php');
}


 ?>

<?php
include_once "login_check.php";
include_once "connection.php";

if(isset($_POST['submit'])){
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
      echo $uniquename;
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

      //$sql = "update courses set image='$uniquename',des='$des' where course_id='$course_id'";
  //unlink("gallery/".$_SESSION['image']);

    }


    $sql = "insert into scientists(s_name,designation,role,category,priority,email,rg_link,image_name) values('$s_name','$designation','$role','$category','$priority','$email','$rg_link','$uniquename')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Successfully update batch no";
mysqli_close($conn);
       header('Location:scientist_list.php?added=true');
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}else{
  mysqli_close($conn);
  header('Location:add_scientist_form.php');
}

  mysqli_close($conn);
 ?>

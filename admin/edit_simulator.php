<?php
include_once "login_check.php";
include_once "connection.php";

if(isset($_POST['submit'])){
  $simulator_id=  $_SESSION['simulator_id'];
  $title=mysqli_real_escape_string($conn,$_POST['title']);

  $date=mysqli_real_escape_string($conn,$_POST['date']);

  $details=mysqli_real_escape_string($conn,$_POST['details']);




    $name = $_FILES['file']['name'];
    if(!$name==""){

      $tmp_name =  $_FILES['file']['tmp_name'];
      $location = "simulator_file/";
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

      $sql = "update simulator set title='$title',date='$date',description='$details',simulator_file_name='$uniquename' where simulator_id='$simulator_id'";
  unlink("simulator_file/".  $_SESSION['simulator_file_name']);
  unset(  $_SESSION['simulator_file_name']);

}else{
  $sql = "update simulator set title='$title',date='$date',description='$details' where simulator_id='$simulator_id'";

}



    if (mysqli_query($conn, $sql)) {
    //    echo "Successfully update batch no";
mysqli_close($conn);
      header('Location:simulator_list.php?update=true');
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}else{
  mysqli_close($conn);
  header('Location:simulator_list.php');
}


 ?>

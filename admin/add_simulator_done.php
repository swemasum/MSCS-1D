<?php
include_once "login_check.php";
include_once "connection.php";

if(isset($_POST['submit'])){
  $title=mysqli_real_escape_string($conn,$_POST['title']);

  $date=mysqli_real_escape_string($conn,$_POST['date']);

  $details=mysqli_real_escape_string($conn,$_POST['details']);



    $name = $_FILES['file']['name'];
    if(!$name==""){

      $tmp_name =  $_FILES['file']['tmp_name'];
      $location = "simulator_file/";
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


    $sql = "insert into simulator(title,date,description,simulator_file_name) values('$title','$date','$details','$uniquename')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Successfully update batch no";
mysqli_close($conn);
       header('Location:simulator_list.php?added=true');
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}else{
  mysqli_close($conn);
  header('Location:add_news_form.php');
}

  mysqli_close($conn);
 ?>


<?php
if(isset($_POST['submit'])){
  session_start();
include_once "connection.php";
      $name=mysqli_real_escape_string($conn,$_POST['name']);
      $purpose=mysqli_real_escape_string($conn,$_POST['purpose']);
      $email=mysqli_real_escape_string($conn,$_POST['email']);
    //  $pin=time()."-".rand(1000, 9999)."-".$name;
    $pin=time();
      $date=date("Y-m-d");
      //sending mail automatically
       $to = $email;
       $subject="MSCS-1D password(Version-1)";
       $message="<hi ".$name.". Thank you for registration. Your MSCS-1D(Version-1) password is : ".$pin.".";

       $headers="From: info@mscs-bcsir.com";
    mail($to,$subject,$message,$headers);


    $sql = "INSERT INTO request(user_name,purpose,email,pin,date,status)
  VALUES ('$name', '$purpose','$email','$pin','$date','pending')";

  if (mysqli_query($conn, $sql)) {
    $_SESSION['requested']="done";
    header("Location:index.php");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}



 ?>

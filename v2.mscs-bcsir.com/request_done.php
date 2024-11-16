
<?php
if(isset($_POST['submit'])){
  session_start();
include_once "connection.php";
      $name=mysqli_real_escape_string($conn,$_POST['name']);
      $purpose=mysqli_real_escape_string($conn,$_POST['purpose']);
      $email=mysqli_real_escape_string($conn,$_POST['email']);
    //  $pin=time().rand(1000, 9999);
      $pin=(time()-1000000)*rand(1, 5);
      $date=date("Y-m-d");
      //sending mail automatically
     /*  $to = $email;
       $subject="MSCS-1D password";
       $message="<h1>hi ".$name."</h1><p>Thank you for registration</p><p>Your MSCS-1D password is : ".$pin."</p>";

       $headers="From: info@mscs-bcsir.com";
   */


//sending email with html
$to = $email;
$subject = 'MSCS-1D password(Version-2)';
$from = 'info@mscs-bcsir.com';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:red;">Congratulations ! </h1>';
$message .= '<p style="color:#080;font-size:18px;">'.$name.', thank you for registration!!</p>';
$message .= '<p style="color:#080;font-size:18px;">Your MSCS-1D (Version-2) password is : '.$pin.'</p>';
$message .= '</body></html>';

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

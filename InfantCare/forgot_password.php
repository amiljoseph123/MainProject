<?php
session_start();
require 'header.php';
?> 



<?php
include 'config.php';
use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  require './vendor/autoload.php';
  function send_password_mail($email, $token)
  {
    /*require ("PHPMailer/PHPMailer.php");
    require ("PHPMailer/SMTP.php");
    require ("PHPMailer/Exception.php");*/
    $mail = new PHPMailer(true);
    try {
      //Server settings
      //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                   //Enable verbose debug output
      $mail->isSMTP();                                           //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                      //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                  //Enable SMTP authentication
      $mail->Username   = 'infantcare123@gmail.com';                //SMTP username
      $mail->Password   = 'nroefagsqmmwixeh';                    //SMTP password
      $mail->SMTPSecure = 'tls';           //Enable implicit TLS encryption
      $mail->Port       = 587;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      $mail->setFrom('infantcare123@gmail.com','InfantCare');
      $mail->addAddress($email);    
  
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Password Reset Link';
      $mail->Body    = "Your Password Reset Link
                        <a href='http://localhost/InfantCare/change_password.php?email=$email&token=$token'>Click Here</a>";
      $mail->send();
      return true;
  } catch (Exception $e) {
      // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      return false;
  }
  }

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $token=md5(rand());
    $check_email="SELECT email from login where email='$email'";
    $check_email_run=mysqli_query($con, $check_email);
    if(mysqli_num_rows($check_email_run)>0)
    {
        $row=mysqli_fetch_assoc($check_email_run);
        $update_token="UPDATE login SET verify_token='$token' where email='$email'";
        $update_token_run=mysqli_query($con,$update_token);
        if($update_token_run)
        {
            send_password_mail($email, $token);
            echo "<script> alert('Link is sent to mail'); </script>";
        }
        else{
            //echo "<script> alert('Wrong'); </script>";
            
               ?><script>Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
              })</script> <?php  
        }
    }
    else{
        // echo "<script> alert('No email found'); </script>";
        // header('location:forgot_password.php');
        ?><script>Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Your work has been saved',
          showConfirmButton: false,
          timer: 1500
        })</script> <?php
    }
}

?>
<!DOCTYPE html>
<html>
<head><title>login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/login.css">
</head>
	

<body>
<form action="#" method="post" >
<div id='login-form' class='login-page'>
            <!---creating form box----->
            <div class="form-box">
<br><p><center><b> Reset Password  </b></center></p><br>
    <input type="text" placeholder="Enter your email id" class='input-field' name="email" required/>
    
	
    <center> <button type='submit' class='submit-btn'style="margin-top:55px;"  name="submit">Send Code</button></center>
    <center><p style="font-size:15px">Already have an Account?<a href="Login.php">Login</a> <p></center>
   
</div>
        </div>
</div>

</body>
</html>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script>

<?php
require 'footer.php';
?> 



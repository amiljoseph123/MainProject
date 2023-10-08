<?php
session_start();
require 'header.php';
?> 




<?php
  include 'config.php';
  if(isset($_POST['password_reset']))
  {
    echo "password";
    $email=$_GET['email'];
    
    $npass=md5($_POST['new_password']);
    
    $cnewpass=md5($_POST['cnew_password']);
    $token=$_GET['token'];
    if(!empty($token))
    {
        if(!empty($token) && !empty($npass) && !empty($cnewpass))
        {
            $check_token="SELECT verify_token from login where verify_token='$token'";
            $check_token_run=mysqli_query($con, $check_token);
            if(mysqli_num_rows($check_token_run)>0)
            {
                if($npass=$cnewpass)
                {
                    $updatepassword="UPDATE login SET password='$npass' where verify_token='$token'";
                    $updatepassword_run=mysqli_query($con, $updatepassword);
                    if($updatepassword_run)
                    {
                        echo "<script> alert('Password Updated'); </script>";
                        
                    }
                }
                else{
                    echo "<script> alert('Password not match'); </script>";
                    
                }
            }
        }
        else
        {
            echo "<script> alert('invalid'); </script>";
            
        }
    }
    else
    {
        echo "<script> alert('No token'); </script>";
        
    }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up</title>
    <!-- <link rel="shortcut icon" href="assets/images/logo1.png" /> -->
    <link rel="stylesheet" href="assets/css/css1/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/css1/fontawsom-all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/login.css"><style>
      .error-message
      {
        color:red;
        font-size:15px;

      }
    </style>
</head>

<body class="h-100">
  

<div id='login-form' class='login-page'>
<div class="form-box">
         <form action="" method="POST">
        <br><p><center><b>Change Password</b></center></p><br>
                 <input type="password" placeholder="Enter  New Password" class='input-field' name="new_password" required>
                
            <div class="user-box">
                <input type="password" placeholder="Enter Password" class='input-field' name="cnew_password" required>
                
                
            </div>
          
            <center> <button type='submit' class='submit-btn'style="margin-top:55px;"  name="password_reset">Update Paasword</button></center>
    
          </form>

          <br>
        <center><p style="font-size:15px">Already have an Account?<a href="login.php">Login</a> <p></center>
   
      </div>
</div>
        
        
     
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>        
<script src="assets/js/script.js"></script>
<script src="assets/js/validate.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>

<?php
require 'footer.php';
?> 
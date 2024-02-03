<?php
session_start();
include('config.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot_password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<div class = "py-5">
    <div class="container">
        <div class = "row justify-content-center">
            <div class ="col-md-6">


            <div class="card">
                <div class="card-header">
                    <h5> change password</h5>
                </div>
                <div class = "card-body p-4">
                    <form action ="" method="POST">
                       
                        <div class="form-group mb-3">
                            <label> Email Address</label>
                            <input type="email" name="email" value = "<?php if(isset($_GET['email'])){echo $_GET['email'];}?>"class ="form-control" placeholder="Enter email address">

                        </div>
                        <div class = "form-group mb-3">
                        <label> New password</label>
                            <input type="text" name="new_password" class ="form-control" placeholder="Enter new password">
                        </div>
                        <div class ="form-group mb-3">
                        <label> Confirm password</label>
                            <input type="text" name="confirm_password" class ="form-control" placeholder="Confirm password">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" name="password_update" class="btn btn-success w-100">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</html>
<?php
if(isset($_POST['password_update'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $new_password = mysqli_real_escape_string($con, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);

    if(!empty($email) && !empty($new_password) && !empty($confirm_password)) {
        if($new_password == $confirm_password) {
            $hashed_password=md5($new_password);
            $update_password = "UPDATE login SET password='$hashed_password' WHERE email ='$email' LIMIT 1";
            $update_password_run = mysqli_query($con, $update_password);

            if($update_password_run) {
                echo "<script>alert('Password updated successfully');
                window.location = 'Login.php';</script>";
                exit(0);
            } else {
                echo "<script>alert('Something went wrong. This action cannot be performed');</script>";
                header('Location: Login.php');
                exit(0);
            }
        } else {
            echo "<script>alert('Password and confirm password don't match');</script>";
            header('Location: password-reset.php');
            exit(0);
        }
    } else {
        echo "<script>alert('All fields are mandatory');</script>";
        header('Location: password-reset.php');
        exit(0);
    }
} 
?>
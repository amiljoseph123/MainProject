<!DOCTYPE html>
    <head>
        <title>Login form</title>
        <link rel="stylesheet" href="lg.css">
</head>

        <body>
            <div class="login-form" border="0">
                <h1>Login Form</h1>
                <form action="#" method="post">
                    <p>User Name</p>
                    <input type="text" name="user"  id="u">
                    <p>Password</p>
                    <input type="password" name="pas" id="p">
                    <button type="submit" name="sub">Login</button>
                    <p>Don't Have an account <a href="registration.php" ><h2 color="white">Sign up</a>
</body>
                    
           
</html>
<?php
include "connect.php"; // Include your database connection script

if (isset($_POST["sub"])) {
    $username = $_POST["user"];
    $password = $_POST["pas"];
    

    // Retrieve user data from the database based on the entered username
    $query = mysqli_query($con,"SELECT * FROM `student` WHERE `username` = '$username' OR `pass`='$password'");
    $row=mysqli_fetch_assoc($query);
    if(mysqli_num_rows($query)>0){
        if($password== $row["pass"]){
        $_SESSION["login"]=true;
        $_SESSION["id"]=$row["id"];
        header("Location:Home.php");
    }
    else
    {
        echo
        "<script> alert('Wrong password'); </script>";

    }
}
else
{
    echo
    "<script> alert('user not Registered'); </script>";
}

        /*{
            if($password==$row["pas"]){

            }
            else{
                echo
                "<script> alert("wrong password");</script>";

            }
        }
        echo 
        "<script> alert('user not found');</script>";
    }
    else{

    }

  }?>
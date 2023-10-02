<?php
require 'header.php';
?> 
<?php

$con = mysqli_connect('localhost', 'root', '', 'infant_care2');
echo "Connected successfully";
?>

 <?php
 $result=mysqli_query($con,"SELECT * FROM login WHERE 
s_email='$email' AND Password='$password' AND user_type='Sponsor'") or die("error");

?> 

    <main>

        <section class="donate-section">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mx-auto">
                        <form class="custom-form donate-form" action="New_Login.php"   method="post" role="form" onsubmit="return validateForm()" >
                            <div class="form-group"> 
                                <h2 class="mb-4">login Now</h2>
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <input type="submit" name="login" value="login">

                                    <!-- <button type="submit" class="form-control mt-4" onclick="validateForm()" ></button> -->
                                </div>
                            </div>





                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <?php
require 'footer.php';
?> 
</body>

</html>
<?php
// session_start();
// include "config.php"; // Include your database connection script

//  if (isset($_POST["login"])) {
//    $email = $_POST["email"];
//    $password = $_POST["password"];

    

     // Retrieve user data from the database based on the entered username
//     $query = mysqli_query($conn,"SELECT * FROM `sponsor_reg` WHERE `s_email` = '$email' OR `s_password`='$password'");
//     $row = mysqli_fetch_assoc($query);
//      if(mysqli_num_rows($query)>0){
//         $_SESSION["login"]=true;
//         $_SESSION["id"]=$row["id"];
//         header("Location:index.php");
//     }
//  else
//  {
//      echo
   
//      "<script> alert('user not Registered'); </script>";
//  } 
// }/



      
    	$con=mysqli_connect("localhost","root","","infant_care")or die("error");   
		if (isset($_POST["login"])) // log= Button name in Login FORM
		{
			$email=$_POST["email"];// Uname=Username
			$password=$_POST["password"]; // Password
			$result=mysqli_query($con,"SELECT * FROM sponsor_reg WHERE s_email='$email' AND s_password='$password'") or die("error");
			if(mysqli_num_rows($result)<=0)
			{
				echo "Login failure";
			}
			else
			{
				session_start();
				$_SESSION['email']=$email;
				$script = "<script> window.location = 'Dindex.html';</script>";
                echo $script;
				exit();
			}
			
		}
?>

<!--       
    	// $con=mysqli_connect("localhost","root","","Database_name")or die("error");   
		// if (isset($_POST["log"])) // log= Button name in Login FORM
		// {
		// 	$name=$_POST["Uname"];// Uname=Username
		// 	$pswd=$_POST["Pass"]; // Password
		// 	$result=mysqli_query($con,"SELECT * FROM login WHERE username='$name' AND password='$pswd'") or die("error");
		// 	if(mysqli_num_rows($result)<=0)
		// 	{
		// 		echo "Login failure";
		// 	}
		// 	else
		// 	{
		// 		session_start();
		// 		$_SESSION['username']=$name;
		// 		header("location:index.php");
		// 		exit();
		// 	}
			
		} -->



        









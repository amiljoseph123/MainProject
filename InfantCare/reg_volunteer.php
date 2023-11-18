<?php
session_start();
require 'header.php';
?> 


<?php
// session_start();
// require 'header.php';
// ?> 


// <?php

// include "config.php";
// if (isset($_POST['submit'])) {
//     $name = $_POST['sponsor_name'];
//     $email = $_POST['sponsor_email'];
//     $phone = $_POST['sponsor_phone'];
//     $aadhar = $_POST['sponsor_aadhar'];
//     $password=$_POST['password'];
//    // $hashed_password = password_hash($password,PASSWORD_DEFAULT);
//     $user_type="Sponsor";
//     $result=mysqli_query($con,"SELECT * FROM `login` WHERE `Email`='$email'") or die("error");
//         if(mysqli_num_rows($result)<=0){
//             mysqli_query($con,"INSERT INTO `login` VALUES ('$email','$user_type','$password','')")or die("Registration failed, Please Try Agin");
//             mysqli_query($con,"INSERT INTO `sponsor`(`s_sponsor_id`, `s_name`, `s_email`, `s_phone`, `s_aadhar`) VALUES (default,'$name','$email','$phone','$aadhar')")or die(mysqli_error($con));
//             echo '<script>alert("Registration is successful");</script>';
//             echo "<script> window.location = 'Login.php';</script>";
//         }
        
// } else {
    
//     echo '<script>alert("Registration is failed")</script>';
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Page</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    .container1 {
        max-width: 500px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }
    .form-group input, .form-group select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .form-group button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .error-message {
        color: #ff0000;
        font-size: 12px;
    }
</style>


<script>
    function validateEmail() {
        var email = document.getElementById("sponsor_email").value;
        var emailError = document.getElementById("emailError");

        var emailRegex = /^[a-zA-Z0-9._%+-]+@(ajce\.com|gmail\.com)$/;
        if (emailRegex.test(email)) {
            emailError.innerHTML = ""; // Clear error message
            return true; // Email is valid
        } else {
            emailError.innerHTML = "Please enter a valid email address.";
            return false; // Email is not valid
        }
    }
   


</script>


</head>
<body>
    <div class="container1">
        <h2>Registration Form</h2>
        <form onsubmit="return validateForm()" method="POST">
		
			<div class="form-group">
    <label for="sponsor_name">Name</label>
    <input type="text" id="sponsor_name" name="sponsor_name">
    <div id="fullNameError" style="color: red;"></div>
</div>

<script>
    document.getElementById('sponsor_name').addEventListener('input', function() {
        var fullNameInput = this.value;
        var fullNameError = document.getElementById('fullNameError');
        var regex = /^[A-Z][a-zA-Z\s]*$/;

        if (!regex.test(fullNameInput)) {
            fullNameError.textContent = "Name must start with a capital letter and contain only letters and spaces.";
        } else {
            fullNameError.textContent = "";
        }
    });
</script>
		
		
			        <div class="form-group">
                <label for="sponsor_email">Email</label>
                <input type="sponsor_email" id="sponsor_email" name="sponsor_email" onkeyup="validateEmail()">
                <div id="emailError" class="error-message"></div>
            </div>
			
			
			<div class="form-group">
    <label for="sponsor_phone">Mobile Number</label>
    <input type="text" id="sponsor_phone" name="sponsor_phone" pattern="\d{10}" required>
    <div id="phoneError" style="color: red;"></div>
</div>

<script>
    document.getElementById('sponsor_phone').addEventListener('input', function() {
        var phoneInput = this.value;
        var phoneError = document.getElementById('phoneError');
        var regex = /^\d{10}$/;

        if (!regex.test(phoneInput)) {
            phoneError.textContent = "Please enter a valid 10-digit mobile number.";
        } else {
            phoneError.textContent = "";
        }
    });
</script>

<div class="form-group">
    <label for="sponsor_aadhar">Aadhar Number</label>
    <input type="text" id="sponsor_aadhar" name="sponsor_aadhar">
    <div id="aadharError" style="color: red;"></div>
</div>


<div class="form-group">
    <label for="sponsor_aadhar">Choose District</label>
    <select id="district" name="district">
        <option value="Thiruvananthapuram">Thiruvananthapuram</option>
        <option value="Kollam">Kollam</option>
        <option value="Pathanamthitta">Pathanamthitta</option>
        <option value="Alappuzha">Alappuzha</option>
        <option value="Kottayam">Kottayam</option>
        <option value="Idukki">Idukki</option>
        <option value="Ernakulam">Ernakulam</option>
        <option value="Thrissur">Thrissur</option>
        <option value="Palakkad">Palakkad</option>
        <option value="Malappuram">Malappuram</option>
        <option value="Kozhikode">Kozhikode</option>
        <option value="Wayanad">Wayanad</option>
        <option value="Kannur">Kannur</option>
        <option value="Kasaragod">Kasaragod</option>
    </select>
<!-- </div> -->

</div>



<script>
    document.getElementById('sponsor_aadhar').addEventListener('input', function() {
        var aadharInput = this.value;
        var aadharError = document.getElementById('aadharError');
        var regex = /^[0-9]{12}$/;

        if (!regex.test(aadharInput)) {
            aadharError.textContent = "Please enter a valid 12-digit Aadhar number.";
        } else {
            aadharError.textContent = "";
        }
    });
</script>



<div class="form-group">
    <label for="password">Password</label>
    <input type="password" id="password" name="password">
    <div id="passwordError" style="color: red;"></div>
</div>

<div class="form-group">
    <label for="cpassword">Confirm Password</label>
    <input type="password" id="confirmPassword" name="confirmPassword">
    <div id="confirmPasswordError" style="color: red;"></div>
</div>

<script>
    document.getElementById('password').addEventListener('input', function() {
        var passwordInput = this.value;
        var passwordError = document.getElementById('passwordError');
        var regex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

        if (!regex.test(passwordInput)) {
            passwordError.textContent = "Password must contain at least one letter, one number, and one special character, and be at least 8 characters long.";
        } else {
            passwordError.textContent = "";
        }
    });

    document.getElementById('confirmPassword').addEventListener('input', function() {
        var confirmPasswordInput = this.value;
        var confirmPasswordError = document.getElementById('confirmPasswordError');
        var passwordInput = document.getElementById('password').value;

        if (confirmPasswordInput !== passwordInput) {
            confirmPasswordError.textContent = "Passwords do not match.";
        } else {
            confirmPasswordError.textContent = "";
        }
    });
</script>

			
			
            <div class="form-group">
                <!-- <button type="submit" name="submit">Register</button> -->
                <button type="submit" id="submit" name="submit" class="btn btn-primary">Register</button>
            </div>
            <div id="errorMessage" class="error-message"></div>
			
					
        </form>
    </div>




    <?php
//  session_start();
//  require 'header.php';
?> 


<?php

include "config.php";
if (isset($_POST['submit'])) {
    $name = $_POST['sponsor_name'];
    $email = $_POST['sponsor_email'];
    $phone = $_POST['sponsor_phone'];
    $aadhar = $_POST['sponsor_aadhar'];
    $district = $_POST['district'];
    $password=md5($_POST['password']);

   // $hashed_password = password_hash($password,PASSWORD_DEFAULT);
    $user_type="volunteer";
    $result=mysqli_query($con,"SELECT * FROM `login` WHERE `Email`='$email'") or die("error");
        if(mysqli_num_rows($result)<=0){
            mysqli_query($con,"INSERT INTO `login` VALUES ('$email','$user_type','$password','')")or die("Registration failed, Please Try Agin");
            mysqli_query($con,"INSERT INTO `volunteer`(`id`, `name`, `email`, `phone`, `aadhar`,`district`) VALUES (default,'$name','$email','$phone','$aadhar','$district')")or die(mysqli_error($con));
            // echo '<script>alert("Registration is successful");</script>';
            echo "<script>
            Swal.fire('Registration Successful');
          </script>";

            echo "<script> window.location = 'Login.php';</script>";
        }
        
} else {
    
    // echo '<script>alert("Registration is failed")</script>';
     echo "<script>
             // Swal.fire('Registration Faild');
           </script>";
 }
?>





	
	
</body>
</html>














<!-- 
<body>


    <html>

        <script>
        
        function validateFullName() {
            var fullNameInput = document.getElementById("fullName");
            var fullNameError = document.getElementById("fullNameError");
        
            var fullNameValue = fullNameInput.value.trim();
        
            if (fullNameValue === "") {
                fullNameError.textContent = "Full Name is required";
            } else if (/^\d+$/.test(fullNameValue)) {
                fullNameError.textContent = "Full Name cannot contain numbers";
            } else {
                fullNameError.textContent = "";
            }
        }
    
        function validateEmail() {
            var emailInput = document.getElementById("email");
            var emailError = document.getElementById("emailError");
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    
            if (!emailPattern.test(emailInput.value)) {
                emailError.textContent = "Invalid email format";
            } else {
                emailError.textContent = "";
            }
        }
    
        function validatePhone() {
            var phoneInput = document.getElementById("phone");
            var phoneError = document.getElementById("phoneError");
        
            // Remove any non-numeric characters from the input
            var phoneNumber = phoneInput.value.replace(/\D/g, '');
        
            if (phoneNumber.length !== 10 || !/^\d{10}$/.test(phoneNumber)) {
                phoneError.textContent = "Phone Number must be exactly 10 digits long and contain only numbers";
            } else {
                phoneError.textContent = "";
            }
        }
        
    
        function validatePassword() {
            var passwordInput = document.getElementById("password");
            var passwordError = document.getElementById("passwordError");
    
            if (passwordInput.value.length < 6) {
                passwordError.textContent = "Password must be at least 6 characters long";
            } else {
                passwordError.textContent = "";
            }
        }
    
        function validateConfirmPassword() {
            var confirmPasswordInput = document.getElementById("confirmPassword");
            var confirmPasswordError = document.getElementById("confirmPasswordError");
            var passwordInput = document.getElementById("password");
    
            if (confirmPasswordInput.value !== passwordInput.value) {
                confirmPasswordError.textContent = "Passwords do not match";
            } else {
                confirmPasswordError.textContent = "";
            }
        }
        </script>
       <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">

        <form method="POST" action="" onsubmit="return validateForm()" style="display: flex; flex-direction: column; justify-content: center; align-items: center; width: 50%; background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">

        <h2>Spnsor Registration</h2>                       
            <div class="form-outline form-white mb-4">
                <label class="form-label" for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName" class="form-control form-control-lg" required oninput="validateFullName();" style="border-color: #000000;">
                <span id="fullNameError" class="error"></span>
            </div>
        
            <div class="form-outline form-white mb-4">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control form-control-lg" required oninput="validateEmail();" style="border-color: #000000;">
                <span id="emailError" class="error"></span>
            </div>
        
            <div class="form-outline form-white mb-4">
                <label class="form-label" for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="form-control form-control-lg" required oninput="validatePhone();" style="border-color: #000000;">
                <span id="phoneError" class="error"></span>
            </div>

            <div class="form-outline form-white mb-4">
                <label class="form-label" for="aadhar">aadhar Number</label>
                <input type="tel" id="aadhar" name="aadhar" class="form-control form-control-lg" required oninput="validateaadhar();" style="border-color: #000000;">
                <span id="aadharError" class="error"></span>
            </div>
        
            <div class="form-outline form-white mb-4">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control form-control-lg" required oninput="validatePassword();" style="border-color: #000000;">
                <span id="passwordError" class="error"></span>
            </div>
        
            <div class="form-outline form-white mb-4">
                <label class="form-label" for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" class="form-control form-control-lg" required oninput="validateConfirmPassword();" style="border-color: #000000;">
                <span id="confirmPasswordError" class="error"></span>
            
        
            <!-- <button class="btn btn-outline-light btn-lg px-5" type="submit" style="background-color: #000000; color: #ffffff; border: none; " >Register</button> -->

            <!-- </div>
            <button type="submit" id="submit" name="submit" class="btn btn-primary">Register</button>
        
        </form>
    </div> -->
     -->





    


<!-- 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->




</main>



<?php
require 'footer.php';
?> 



</body>
</html> 


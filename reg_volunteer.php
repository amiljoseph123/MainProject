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
        <h2>Application Form</h2>
        <form onsubmit="return validateForm()" method="POST">
		
			<div class="form-group">
    <label for="name">Name</label>
    <input type="text" id="name" name="name">
    <div id="fullNameError" style="color: red;"></div>
</div>

<script>
    document.getElementById('name').addEventListener('input', function() {
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
                <label for="email">Email</label>
                <input type="email" id="sponsor_email" name="email" onkeyup="validateEmail()">
                <div id="emailError" class="error-message"></div>
            </div>
			
			
			<div class="form-group">
    <label for="phone">Mobile Number</label>
    <input type="text" id="phone" name="phone" pattern="\d{10}" required>
    <div id="phoneError" style="color: red;"></div>
</div>

<script>
    document.getElementById('phone').addEventListener('input', function() {
        var phoneInput = this.value;
        var phoneError = document.getElementById('phoneError');
        var regex = /^(?:(?:\+|00)91)?[6789]\d{9}$/;

        if (!regex.test(phoneInput) && phoneInput.length > 0) {
            phoneError.textContent = "Please enter a valid Indian mobile number.";

        } else if (hasRepeatedDigits(phoneInput)) {
            phoneError.textContent = "Please enter a valid mobile number without repeating the same digit.";
        } else {
            phoneError.textContent = "";
        }
    });

    function hasRepeatedDigits(input) {
        return /(\d)\1{9}/.test(input);
    }
</script>

<div class="form-group">
    <label for="aadhar">Aadhar Number</label>
    <input type="text" id="aadhar" name="aadhar">
    <div id="aadharError" style="color: red;"></div>
</div>


<div class="form-group">
    <label for="aadhar">Choose District</label>
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
    document.getElementById('aadhar').addEventListener('input', function() {
        var aadharInput = this.value;
        var aadharError = document.getElementById('aadharError');
        var regex = /^[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}$/;

        if (!regex.test(aadharInput)) {
            aadharError.textContent = "Please enter a valid 12-digit Aadhar number.";
     
        } else if (hasRepeatedDigits(aadharInput)) {
            aadharError.textContent = "Please enter a valid Aadhar number without repeating the same digit.";
        } else {
            aadharError.textContent = "";
        }
    });

    function isValidAadharChecksum(aadhar) {
        // Validate Aadhar checksum using Verhoeff algorithm
        var d = aadhar.split("").map(Number);
        var p = [
            [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
            [1, 2, 3, 4, 0, 6, 7, 8, 9, 5],
            [2, 3, 4, 0, 1, 7, 8, 9, 5, 6],
            [3, 4, 0, 1, 2, 8, 9, 5, 6, 7],
            [4, 0, 1, 2, 3, 9, 5, 6, 7, 8],
            [5, 9, 8, 7, 6, 0, 4, 3, 2, 1],
            [6, 5, 9, 8, 7, 1, 0, 4, 3, 2],
            [7, 6, 5, 9, 8, 2, 1, 0, 4, 3],
            [8, 7, 6, 5, 9, 3, 2, 1, 0, 4],
            [9, 8, 7, 6, 5, 4, 3, 2, 1, 0]
        ];
        var inv = [0, 4, 3, 2, 1, 5, 6, 7, 8, 9];
        var c = 0;
        for (var i = 0; i < aadhar.length; i++) {
            c = p[c][inv[d[i]]];
        }
        return c === 0;
    }

    function hasRepeatedDigits(input) {
        return /(\d)\1{11}/.test(input);
    }
</script>






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
                <button type="submit" id="submit" name="submit" class="btn btn-primary">Apply</button>
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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $aadhar = $_POST['aadhar'];
    $district = $_POST['district'];
    // $password=md5($_POST['password']);

   // $hashed_password = password_hash($password,PASSWORD_DEFAULT);
    $user_type="volunteer";
    $result=mysqli_query($con,"SELECT * FROM `login` WHERE `Email`='$email'") or die("error");
        if(mysqli_num_rows($result)<=0){
            // mysqli_query($con,"INSERT INTO `login` VALUES ('$email','$user_type','$password','')")or die("Registration failed, Please Try Agin");
            mysqli_query($con,"INSERT INTO `volunteer`(`id`, `name`, `email`, `phone`, `aadhar`,`district`, `status`) VALUES (default,'$name','$email','$phone','$aadhar','$district','pending')")or die(mysqli_error($con));
            // echo '<script>alert("Registration is successful");</script>';
            echo "<script>
            Swal.fire('Registration Successful');
          </script>";

            echo "<script> window.location = 'notification.php';</script>";
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




</main>



<?php
require 'footer.php';
?> 



</body>
</html> 


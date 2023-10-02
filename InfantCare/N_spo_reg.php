
<?php
include "config.php";
		if (isset($_POST["submit"]))
		{
			$fullNname=$_POST["fullNname"];
			$email=$_POST["email"];
			$phone=$_POST["phone"];
			
			$aadhar=$_POST["aadhar"];
			$password= $_POST["password"];
			$usertype="sponsor";
			$result=mysqli_query($con,"SELECT*FROM sponsor WHERE email='$email'") or die("error");
			if(mysqli_num_rows($result)<=0)
			{
				mysqli_query($con,"INSERT INTO login VALUES ('$email','$password','$usertype')")or die("Registration failed, Please Try Agin");
		     	mysqli_query($con,"INSERT INTO `sponsor` VALUES (default,'$phone','$aadhar')")or die(mysqli_error($con));			
				header("Location: Login.php"); 
			}
			else
			{
				echo '<script>alert("Error")</script>';
	    	}
		}
				
		
?>   




<!DOCTYPE html>
<html lang="en">
<head>
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
        var email = document.getElementById("email").value;
        var emailError = document.getElementById("emailError");

        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
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
        <form onsubmit="return validateForm()">
		
			<div class="form-group">
    <label for="fullName">Name</label>
    <input type="text" id="fullName" name="fullName">
    <div id="fullNameError" style="color: red;"></div>
</div>

<script>
    document.getElementById('fullName').addEventListener('input', function() {
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
                <input type="email" id="email" name="email" onkeyup="validateEmail()">
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
        var regex = /^\d{10}$/;

        if (!regex.test(phoneInput)) {
            phoneError.textContent = "Please enter a valid 10-digit mobile number.";
        } else {
            phoneError.textContent = "";
        }
    });
</script>

<div class="form-group">
    <label for="aadhar">Aadhar Number</label>
    <input type="text" id="aadhar" name="aadhar">
    <div id="aadharError" style="color: red;"></div>
</div>

<script>
    document.getElementById('aadhar').addEventListener('input', function() {
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
                <button type="submit">Register</button>
            </div>
            <div id="errorMessage" class="error-message"></div>
			
					
        </form>
    </div>
	
	
</body>
</html>


    
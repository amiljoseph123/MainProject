
    <?php
 session_start();
 require 'header.php';
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
        var email = document.getElementById("orphanage_email").value;
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
        <form onsubmit="return validateForm()" method="POST">
		
			<div class="form-group">
    <label for="orphanage_name">Name</label>
    <input type="text" id="orphanage_name" name="orphanage_name">
    <div id="nameError" style="color: red;"></div>
</div>

<script>
    document.getElementById('orphanage_name').addEventListener('input', function() {
        var nameInput = this.value;
        var nameError = document.getElementById('nameError');
        var regex = /^[A-Z][a-zA-Z\s]*$/;

        if (!regex.test(nameInput)) {
            nameError.textContent = "Name must start with a capital letter and contain only letters and spaces.";
        } else {
            nameError.textContent = "";
        }
    });
</script>
		
		
		

<div class="form-group">
    <label for="orphanage_govt_id">Orphanage ID</label>
    <input type="text" id="orphanage_govt_id" name="orphanage_govt_id" oninput="validateGovtID(this)">
    <span id="govt_id_error" style="color: red;"></span>
</div>

<script>
function validateGovtID(input) {
    // Define your validation logic here
    var govtID = input.value;
    var govtIDPattern = /^[A-Z]{2}\d{4}$/; // Example: Two letters followed by four digits

    if (govtIDPattern.test(govtID)) {
        document.getElementById('govt_id_error').textContent = '';
    } else {
        document.getElementById('govt_id_error').textContent = 'Invalid government ID format.';
    }
}
</script>



		
            <!-- <div class="form-group">
                <label for="orphanage_govt_id">Orphanage ID</label>
                <input type="text" id="orphanage_govt_id" name="orphanage_govt_id">
            </div> -->
            
			
            <div class="form-group">
                <label for="orphanage_established_date">Established Date</label>
                <input type="date" id="orphanage_established_date" name="orphanage_established_date">
            </div>
           
			        <div class="form-group">
                <label for="orphanage_email">Email</label>
                <input type="email" id="orphanage_email" name="orphanage_email" onkeyup="validateEmail()">
                <div id="emailError" class="error-message"></div>
            </div>
			
			
			
			
			
			<div class="form-group">
    <label for="orphanage_phone">Mobile Number</label>
    <input type="text" id="orphanage_phone" name="orphanage_phone" pattern="\d{10}" required>
    <div id="mobileError" style="color: red;"></div>
</div>

<script>
    document.getElementById('orphanage_phone').addEventListener('input', function() {
        var mobileInput = this.value;
        var mobileError = document.getElementById('mobileError');
        var regex = /^\d{10}$/;

        if (!regex.test(mobileInput)) {
            mobileError.textContent = "Please enter a valid 10-digit mobile number.";
        } else {
            mobileError.textContent = "";
        }
    });
</script>


			
			
			<div class="form-group">
                <label for="orphanage_district">District</label>
                <select id="orphanage_district" name="orphanage_district">
                    <option value="">Select District</option>
                    <option value="Trivandrum">Trivandrum</option>
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
            </div>
			
			
           
			
			<div class="form-group">
    <label for="orphanage_city">City</label>
    <input type="text" id="orphanage_city" name="orphanage_city">
    <div id="cityError" style="color: red;"></div>
</div>

<script>
    document.getElementById('orphanage_city').addEventListener('input', function() {
        var cityInput = this.value;
        var cityError = document.getElementById('cityError');
        var regex = /^[a-zA-Z\s]+$/;

        if (!regex.test(cityInput)) {
            cityError.textContent = "Please enter a valid city name (alphabetic characters only).";
        } else {
            cityError.textContent = "";
        }
    });
</script>

			
			
           
			
			<div class="form-group">
    <label for="orphanage_pincode">Pincode</label>
    <input type="text" id="orphanage_pincode" name="orphanage_pincode">
    <div id="pincodeError" style="color: red;"></div>
</div>

<script>
    document.getElementById('orphanage_pincode').addEventListener('input', function() {
        var pincodeInput = this.value;
        var pincodeError = document.getElementById('pincodeError');
        var regex = /^[1-9][0-9]{5}$/;

        if (!regex.test(pincodeInput)) {
            pincodeError.textContent = "Please enter a valid 6-digit pincode.";
        } else {
            pincodeError.textContent = "";
        }
    });
</script>


<div class="form-group">
    <label for="password">Password</label>
    <input type="password" id="password" name="password">
    <div id="passwordError" style="color: red;"></div>
</div>

<div class="form-group">
    <label for="orphanage_password">Confirm Password</label>
    <input type="password" id="orphanage_password" name="orphanage_password">
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

    document.getElementById('orphanage_password').addEventListener('input', function() {
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
                <button type="submit" name="submit">Register</button>
            </div>
            <div id="errorMessage" class="error-message"></div>
			
					
        </form>
    </div>
	




    <?php
$con=mysqli_connect("localhost","root","","infant_care2") or die("error");
if (isset($_POST['submit'])) {
    $name = $_POST['orphanage_name'];
    $id = $_POST['orphanage_govt_id'];
    $date = $_POST['orphanage_established_date'];
    $email = $_POST['orphanage_email'];
    $phone = $_POST['orphanage_phone'];
    $district = $_POST['orphanage_district'];
    $city = $_POST['orphanage_city'];
    $pincode = $_POST['orphanage_pincode'];
    $password = $_POST['orphanage_password'];
    $hashed_password=md5($password);
  
    $user_type = "Orphanage";
    $result = mysqli_query($con, "SELECT * FROM `login` WHERE `Email`='$email'") or die("error");

    if(mysqli_num_rows($result) <= 0){
        mysqli_query($con, "INSERT INTO `login` VALUES ('$email','$user_type','$hashed_password','')") or die("Registration failed, Please Try Again");
        mysqli_query($con, "INSERT INTO `orphanage`(`o_id`, `o_name`, `o_govtid`, `o_edate`, `o_email`, `o_phone`, `o_district`, `o_city`, `o_pincode`) VALUES (default,'$name','$id','$date','$email','$phone','$district','$city','$pincode')") or die(mysqli_error($con));
        // echo '<script>alert("Registration is successful");</script>';
        echo "<script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
          })
              </script>";
        echo "<script> window.location = 'Login.php';</script>";
    }
    else {
        // echo '<script>alert("Email already registered. Please use a different email.")</script>';
        echo "<script>
                Swal.fire('Already registered please enter different email');
              </script>";
    }
} else {
    //echo '<script>alert("Registration is failed")</script>';
    // echo "<script>
    //             Swal.fire('Registration faild');
    //           </script>";
}
?>
<?
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Error: " . mysqli_error($conn);
}
?>








	
</body>
</html>


<?php
require 'footer.php';
?> 



    









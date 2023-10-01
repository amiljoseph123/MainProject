
<?php
require 'header.php';
?> 


<?php

include "config.php";
if (isset($_POST["submit"])) {
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $aadhar = $_POST["aadhar"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    
    
    
    if ($password == $confirmPassword) {
        $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `sponsor_reg`(`s_name`, `s_email`, `s_phone`, `s_aadhar`, `s_password`, `s_cpassword`) VALUES ('$fullName','$email','$phone','$aadhar','$password','$confirmPassword')";
        $result = mysqli_query($conn, $sql);
        // header("location:Login.php");
        $script = "<script> window.location = 'Login.php';</script>";
        echo $script;
    } else {
        echo "Password mismatch. Registration not successful.";
    }
}

?>









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

            </div>
            <button type="submit" id="submit" name="submit" class="btn btn-primary">Register</button>
        
        </form>
    </div>
    



<!-- 
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
    
        <form method="POST" action="" onsubmit="return validateForm()"> -->





    



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




</main>



<?php
require 'footer.php';
?> 



</body>
</html>



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
        header("location:login.php");
    } else {
        echo "Password mismatch. Registration not successful.";
    }
}

?>








<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kind Heart Charity - Donation</title>

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->
</head>


   <div>
    <header class="site-header" >
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        Akershusstranda 20, 0150 Oslo, Norway
                    </p>

                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@company.com">
                            info@company.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-youtube"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg" style="width: 100%;">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" class="logo img-fluid" alt="">
                <span>
                    Kind Heart Charity
                    <small>Non-profit Organization</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.html#section_1">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.html#section_2">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.html#section_3">Causes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.html#section_4">Volunteer</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link click-scroll dropdown-toggle" href="index.html#section_5"
                            id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">News</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="news.html">News Listing</a></li>

                            <li><a class="dropdown-item" href="news-detail.html">News Detail</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.html#section_6">Contact</a>
                    </li>

                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="donate.html">Donate</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<main>





    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Additional CSS for styling */
        body {
            background-color: #f8f9fa;
            padding: 50px;
        }
        .form-container {
            max-width: 500px;
            margin: auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>


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




<footer class="site-footer">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-12 mb-4">
            <img src="images/logo.png" class="logo img-fluid" alt="">
        </div>

        <div class="col-lg-4 col-md-6 col-12 mb-4">
            <h5 class="site-footer-title mb-3">Quick Links</h5>

            <ul class="footer-menu">
                <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Story</a></li>

                <li class="footer-menu-item"><a href="#" class="footer-menu-link">Newsroom</a></li>

                <li class="footer-menu-item"><a href="#" class="footer-menu-link">Causes</a></li>

                <li class="footer-menu-item"><a href="#" class="footer-menu-link">Become a volunteer</a></li>

                <li class="footer-menu-item"><a href="#" class="footer-menu-link">Partner with us</a></li>
            </ul>
        </div>

        <div class="col-lg-4 col-md-6 col-12 mx-auto">
            <h5 class="site-footer-title mb-3">Contact Infomation</h5>

            <p class="text-white d-flex mb-2">
                <i class="bi-telephone me-2"></i>

                <a href="tel: 305-240-9671" class="site-footer-link">
                    305-240-9671
                </a>
            </p>

            <p class="text-white d-flex">
                <i class="bi-envelope me-2"></i>

                <a href="mailto:info@yourgmail.com" class="site-footer-link">
                    donate@charity.org
                </a>
            </p>

            <p class="text-white d-flex mt-3">
                <i class="bi-geo-alt me-2"></i>
                Akershusstranda 20, 0150 Oslo, Norway
            </p>

            <a href="#" class="custom-btn btn mt-3">Get Direction</a>
        </div>
    </div>
</div>

<div class="site-footer-bottom">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-7 col-12">
                <p class="copyright-text mb-0">Copyright © 2036 <a href="#">Kind Heart</a> Charity Org.
                    Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a><br>Distribution:
                    <a href="https://themewagon.com">ThemeWagon</a>
                </p>
            </div>

            <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                <ul class="social-icon">
                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-twitter"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-facebook"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-instagram"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-linkedin"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
</footer>

<!-- JAVASCRIPT FILES -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/click-scroll.js"></script>
<script src="js/counter.js"></script>
<script src="js/custom.js"></script>

</body>
</html>


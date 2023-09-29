<?php

include "config.php";
if (isset($_POST["submit"])) {
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $aadhar = $_POST["aadhar"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    
    
    
    if ($password == $cpassword) {
        $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `sponsor_reg`(`s_name`, `s_email`, `s_phone`, `s_aadhar`, `s_password`, `s_cpassword`) VALUES ('$fullName','$email','$phone','$aadhar','$password','$cpassword')";
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



    <header class="site-header">
        <div class="container">
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

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
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
    <div class="form-container">
        <h2 class="mb-4">Registration Form</h2>
        <form id="registrationForm" method="POST">
            <!-- <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" required>
            </div> -->

            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" required>
                <div id="firstNameError"></div>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="phone" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="aadhar">Aadhar Number</label>
                <input type="aadhar" class="form-control" id="aadhar" name="aadhar" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>


            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="cpassword" class="form-control" id="cpassword" name="cpassword" required>
            </div>
            <button type="submit" id="submit" name="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

   



    <script>
        function validateFirstName(firstName) {
  const firstNameError = document.getElementById('firstNameError');
  if (firstName.trim() === '') {
      firstNameError.textContent = 'First Name cannot be empty';
      return false;
  } 
  else if (/^\s/.test(firstName)) {
    firstNameError.textContent = 'First Name cannot start with a space';
    return false;
  }
  else if (!/^[a-zA-Z]+$/.test(firstName)) {
    firstNameError.textContent = 'First Name should contain only letters (no numbers, special characters, or spaces)';
    return false;
  }
  
  else {
      firstNameError.textContent = '';
      return true;
  }
}

const firstNameInput = document.getElementById('fullName');
firstNameInput.addEventListener('input', function () {
  validateFirstName(firstNameInput.value);
});




const form = document.getElementById('updateForm');
form.addEventListener('submit', function (event) {
  const firstNameError = document.getElementById('firstNameError');
  if (firstNameError.textContent.trim() !== '' || lastNameError.textContent.trim() !== '') {
      event.preventDefault(); // Prevent form submission if the error field is not empty
  }
});

</script>





<script>

document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');

        form.addEventListener('submit', function(event) {
            let isValid = true;

            // Email validation
            const email = document.getElementById('email').value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                isValid = false;
                alert('Please enter a valid email address');
            }

            // Phone number validation
            const phone = document.getElementById('phone').value;
            const phoneRegex = /^[0-9]{10}$/;
            if (!phoneRegex.test(phone)) {
                isValid = false;
                alert('Please enter a valid 10-digit phone number');
            }

            // Aadhar number validation
            const aadhar = document.getElementById('aadhar').value;
            const aadharRegex = /^[0-9]{12}$/;
            if (!aadharRegex.test(aadhar)) {
                isValid = false;
                alert('Please enter a valid 12-digit Aadhar number');
            }

            // Password validation
            const password = document.getElementById('password').value;
            const cpassword = document.getElementById('cpassword').value;
            if (password !== cpassword) {
                isValid = false;
                alert('Passwords do not match');
            }

            if (!isValid) {
                event.preventDefault();
            }
        });
    });
</script>

 

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


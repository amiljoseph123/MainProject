<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kind Heart Charity - Free Bootstrap 5.2.2 CSS Template</title>

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <style>
        body{
            background-image:"o1.jpg";
        }
    </style>
    <!--
<style>
TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->

</head>






<body id="section_1">

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
                <img src="images/logo.png" class="logo img-fluid" alt="Kind Heart Charity">
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
                        <a class="nav-link click-scroll" href="#top">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">Causes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">Volunteer</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link click-scroll dropdown-toggle" href="#section_5"
                            id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">News</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="news.html">News Listing</a></li>

                            <li><a class="dropdown-item" href="news-detail.html">News Detail</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_6">Contact</a>
                    </li>

                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="donate.html">Donate</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <style>
        .soul-logo {
            mix-blend-mode: color-burn;
        }

        .placform::placeholder {
            position: absolute;
            left: 10px;
        }

        label {
            font-weight: bold;
        }
    </style>
</head>


<!-- registrtnform -->

<body class="vh-100">
        
    <section class="vh-100" style="background: linear-gradient(to bottom, url('/static/img/bg6.jpg') no-repeat center center / cover; background-color: #22222;">
                <div class="container py-5 h-100">
                <div class="row row-cols-1 row-cols-md-2 d-flex justify-content-center align-items-center h-75">
                    <div class="col">
                        <div class="d-flex align-items-center justify-content-center mb-3 pb-1">
                            <img class="soul-logo" src="{% static 'img/s1.png' %}">

                        </div>
                        <h5 class="fw-normal mb-3 pb-3 text-center text-dark opacity-100" style="letter-spacing: 1px;">
                            </h5>
                    </div>
                    <!-- <div class="col "> -->
                        <div class="card h-80" 
                            style="border-radius: 1rem; background: linear-gradient(to bottom);">
                            <div class="card-body p-5 p-lg-5 text-black">
                                <h2 class="fw-normal mb-1 pb-2 text-center "
                                    style="letter-spacing: 1px; font-weight:bold; color:#305f0c;">Sign up</h2>
                                <form method="POST">
                                   <!-- {% csrf_token %} -->
                                    <label class="form-label" for="form2Example18">Name </label>
                                    <div class="form-outline mb-4 ">
                                        <div class="d-flex align-items-center position-relative">

                                            <input type="text" id="name" name="name"
                                                class="form-control form-control-lg placform" placeholder="Enter Name">
                                        </div>
                                        <div id="nameValidation" class="invalid-feedback">
                                            Please enter a valid name containing only letters.
                                        </div>
                                    </div>



                                    <label class="form-label" for="form2Example18">Email </label>
                                    <div class="form-outline mb-3 ">
                                        <div class="d-flex align-items-center position-relative">
                                            <input type="email" id="email" name="email"
                                                class="form-control form-control-lg placform" placeholder="Enter Email">
                                        </div>
                                        <div id="emailValidation" class="invalid-feedback">
                                            Please enter a valid email address.
                                        </div>
                                    </div>

                                    <label class="form-label" for="form2Example18">Phone </label>
                                    <div class="form-outline mb-3 ">
                                        <div class="d-flex align-items-center position-relative">

                                            <input type="tel" id="phone" name="phone" onkeyup="validatePhoneNumber()"
                                                class="form-control form-control-lg placform"
                                                placeholder="Enter Phone Number">
                                        </div>





                                        <label class="form-label" for="form2Example18">Aadhar </label>
                                        <div class="form-outline mb-3 ">
                                            <div class="d-flex align-items-center position-relative">
    
                                                <input type="tel" id="phone" name="phone" onkeyup="validatePhoneNumber()"
                                                    class="form-control form-control-lg placform"
                                                    placeholder="Enter aadhar Number">
                                            </div>




                                        <div id="phoneValidation" class="invalid-feedback">
                                            Please enter 10 digit valid phone number
                                        </div>
                                    </div>

                                    <label class="form-label" for="form2Example27">Password</label>
                                    <div class="form-outline mb-3 ">
                                        <div class="d-flex align-items-center position-relative">

                                            <input type="password" id="pass" name="pass"
                                                class="form-control form-control-lg placform"
                                                placeholder="Enter Password">
                                        </div>
                                        <div id="passValidation" class="invalid-feedback">
                                            Password must be at least 8 characters long and contain at least one
                                            uppercase
                                            letter, one lowercase letter, one number, and one special character.
                                        </div>
                                        <div id="passValid" class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <label class="form-label" for="form2Example27">Confirm Password</label>
                                    <div class="form-outline mb-2 ">
                                        <div class="d-flex align-items-center position-relative">

                                            <input type="password" id="cpass" name="cpass"
                                                class="form-control form-control-lg placform"
                                                placeholder="Confirm Password">
                                        </div>
                                        <div id="cpassValidation" class="invalid-feedback">
                                            Passwords do not match.
                                        </div>
                                        <div id="cpassValid" class="valid-feedback">
                                            Passwords match!
                                        </div>
                                    </div>

                                    

                                    <div class="d-flex justify-content-center mt-md-3">
                                        <button class="btn btn-dark btn-lg w-50" type="sumbit">Register</button>
                                    </div>
                                    <!-- {% if error_message %} -->
                                    <div class="d-flex justify-content-center"><p class="text-danger mt-2 fs-3"></p></div>
                                    <!-- {% endif %} -->
                                    <p class=" mt-1 pb-lg-1 text-center" style="color: #0e2b7a;">Already have an
                                        account? <a href="{% url 'login' %}" style="color: #0e2b7a;">login</a></p>
                                    <hr>
                                    <h6 class="text-center"> Or login with</h6>
                                    <br>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const nameInput = document.getElementById('name');
                const emailInput = document.getElementById('email');
                const phoneInput = document.getElementById('phone');

                const phoneInput = document.getElementById('aadhar');

                const passwordInput = document.getElementById('pass');
                const confirmPasswordInput = document.getElementById('cpass');


                nameInput.addEventListener('blur', validateName);
                emailInput.addEventListener('blur', validateEmail);
                passwordInput.addEventListener('blur', validatePassword);
                confirmPasswordInput.addEventListener('blur', validateConfirmPassword);
                phoneInput.addEventListener('blur', validatePhoneNumber);
                phoneInput.addEventListener('blur', function(event) { formataadharNumber(); });


                aadharInput.addEventListener('blur', validateaadharNumber);
                aadharInput.addEventListener('blur', function(event) { formataadharNumber(); });



                // Validation functions go here
                function validateName() {
                    const namePattern = /^[A-Za-z ]+$/;
                    const nameValidation = document.getElementById('nameValidation');
                    const nameValid = document.getElementById('nameValid');

                    if (!namePattern.test(nameInput.value)) {
                        nameInput.classList.add('is-invalid');
                        nameInput.classList.remove('is-valid');
                        nameValidation.style.display = 'block';
                        nameValid.style.display = 'none';
                    } else {
                        nameInput.classList.remove('is-invalid');
                        nameInput.classList.add('is-valid');
                        nameValidation.style.display = 'none';
                        nameValid.style.display = 'block';
                    }
                }

                function validateEmail() {
                    const emailPattern = /^[a-zA-Z0-9._%+-]+@(gmail\.com|[a-zA-Z0-9.-]+\.(com|in))$/;
                    if (!emailPattern.test(emailInput.value)) {
                      emailInput.classList.add('is-invalid');
                      emailInput.classList.remove('is-valid');
                      return false;
                    } else {
                      emailInput.classList.remove('is-invalid');
                      emailInput.classList.add('is-valid');
                      return true;
                    }
                  }

                function formatPhoneNumber() {
                    const phoneInput = document.getElementById('phone');
                    const phoneNumber = phoneInput.value.replace(/\s/g, ''); // Remove any white spaces
                    
                    if (phoneNumber.length > 5 && phoneNumber.substring(0, 5) !== '00000') {
                        phoneInput.value = phoneNumber.replace(/(\d{5})(\d{0,5})(\d{0,4})(\d{0,4})/, '$1 $2 $3 $4');
                    } else {
                        phoneInput.value = phoneNumber;
                    }
                }
                
                function validatePhoneNumber() {
                    const phonePattern = /^(?!0)(?!.*0{5})[0-9 ]{10,}$/; // Phone number must not start with 0, and no sequence of 5 consecutive 0s
                    const phoneInput = document.getElementById('phone');
                    
                    if (!phonePattern.test(phoneInput.value.replace(/\s/g, ''))) {
                        phoneInput.classList.add('is-invalid'); // Adding invalid class to show input in red
                        phoneInput.classList.remove('is-valid'); // Removing valid class
                        phoneInput.nextElementSibling.textContent = 'Enter a valid phone number'; // Display error message
                        return false;
                    } else {
                        phoneInput.classList.remove('is-invalid'); // Removing invalid class
                        phoneInput.classList.add('is-valid'); // Adding valid class
                        phoneInput.nextElementSibling.textContent = ''; // Clear error message
                        return true;
                    }
                }

                function validatePassword() {
                    const passwordPattern = /^(?=.\d)(?=.[a-z])(?=.[A-Z])(?=.[!@#$%^&*()_+[\]{}|;:'",.<>?/~`]).{8,}$/;
                    const passValidation = document.getElementById('passValidation');
                    const passValid = document.getElementById('passValid');

                    if (!passwordPattern.test(passwordInput.value)) {
                        passwordInput.classList.add('is-invalid');
                        passwordInput.classList.remove('is-valid');
                        passValidation.style.display = 'block';
                        passValid.style.display = 'none';
                    } else {
                        passwordInput.classList.remove('is-invalid');
                        passwordInput.classList.add('is-valid');
                        passValidation.style.display = 'none';
                        passValid.style.display = 'block';
                    }
                }

                function validateConfirmPassword() {
                    const confirmPasswordValidation = document.getElementById('cpassValidation');
                    const confirmPasswordValid = document.getElementById('cpassValid');

                    if (passwordInput.value !== confirmPasswordInput.value) {
                        confirmPasswordInput.classList.add('is-invalid');
                        confirmPasswordInput.classList.remove('is-valid');
                        confirmPasswordValidation.style.display = 'block';
                        confirmPasswordValid.style.display = 'none';
                    } else {
                        confirmPasswordInput.classList.remove('is-invalid');
                        confirmPasswordInput.classList.add('is-valid');
                        confirmPasswordValidation.style.display = 'none';
                        confirmPasswordValid.style.display = 'block';
                    }
                }
            });
        </script>
    </div>
</body>

</html>










    </html>
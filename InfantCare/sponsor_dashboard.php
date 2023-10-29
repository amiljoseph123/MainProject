<?php
session_start();
if (isset($_SESSION['username'])) {
    // User is logged in
   //echo "Welcome, " . $_SESSION['username'];
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
<style>
     /* Custom CSS for the side navigation bar */
     .vertical-navbar {
        height: 100vh;
        position: fixed;
        top: 0;
        left: -250px;
        /* Initially hidden to the left */
        background-color: #5bc1ac;
        /* Dark gray background color */
        padding-top: 20px;
        padding-left: 15px;
        width: 250px;
        text-align: left;
        border-right: 1px solid #222;
        /* Darker gray border */
        transition: left 0.3s;
        /* Smooth sliding animation */
        z-index: 999;
        /* Ensure it overlaps other content */
    }

    .vertical-navbar a {
        padding: 15px 0;
        text-decoration: none;
        font-size: 18px;
        color: #fff;
        display: block;
        transition: 0.3s;
    }

    .vertical-navbar i {
        margin-right: 10px;
        /* Space between icons and text */
    }

    .vertical-navbar a:hover {
        background-color:#5bacc1;
        /* Slightly lighter gray when hovered */
        color: #007BFF;
        /* Blue color for text on hover */
    }

    /* Custom CSS for the button to show/hide the sidebar */
    .sidebar-toggle {
        position: fixed;
        top: 20px;
        left: 20px;
        background-color: #007BFF;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 50%;
        cursor: pointer;
    }

    /* Style for the button to hide the sidebar */
    .hide-sidebar-button {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: #007BFF;
        color: #fff;
        border: none;
        border-radius: 50%;
        cursor: pointer;
    }




    .heading{
        text-align:center;
        text-size-adjust: 10px;
        
    }
</style>
<style>

/* .body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        } */

        .message-box {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 500px;
            width: 100%;
            text-align: center; /* Center the content */
            margin: 0 auto; /* Center horizontally */
            position: absolute; /* Position it absolutely */
            top: 50%; /* Move it down by 50% of the viewport height */
            left: 50%; /* Move it right by 50% of the viewport width */
            transform: translate(-50%, -50%); 
        }
        .quote {
            font-style: italic;
            text-align: center;
            color: #555;
            justify-content: center;
            text-align: center;
            margin-bottom: 20px;
        }

        .quote p {
            margin: 0;
        }

        .author {
            text-align: right;
            font-weight: bold;
        }

        .author span {
            color: #888;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
        }
    /* .message-box {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 500px;
            width: 100%;
            text-align:center;
        text-size-adjust: 10px;
        }


        .quote {
            font-style: italic;
            text-align: center;
            color: #555;
            margin-bottom: 20px;
        }

        .body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .author {
            text-align: right;
            font-weight: bold;
        } */


</style>


</head>

<body>

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
                    InfantCare
                    <small>Non-profit Organization</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.html#section_1">Home</a>
                    </li> -->

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

    <body>
    <nav class="vertical-navbar">
        <button class="btn btn-primary" onclick="hideSidebar()">
            <i class="fas fa-times"></i>
        </button>
        <a href="sponsor_dashboard.php"><i class="fas fa-home"></i> Home</a>
        <a href="update.php"><i class="fas fa-home"></i> Edit profile</a>
        <a href="orphanage.php">View orphanage</a>
        <!-- <a href="orphanage.php"><i class="fas fa-user"></i> View Orphanages</a>
        <a href="officer_registration.php"><i class="fas fa-user-plus"></i> Add Officers</a> -->
        <!-- <a href="#"><i class="fas fa-users"></i> Officers</a> -->
        <!-- <a href="#"><i class="fas fa-newspaper"></i> News</a> -->
        <!-- <a href="#"><i class="fas fa-leaf"></i> Crops</a> -->
        <!-- <a href="#"><i class="fas fa-landmark"></i> Govt. Schemes</a> -->
    </nav>

    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-dark horizontal-navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> -->
         </button>
        <button class="btn btn-primary" id="showSidebar" onclick="showSidebar()">
            <i class="fas fa-bars"></i>
        </button> 
        <a class="navbar-brand text-white" style="padding-left: 100px;" href="#">InfantCare</a>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="dashboard_admin.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Explore</a>
                </li>


                
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <div class="dropdown-divider"></div>

                    </div>
                </li>
                <a class="btn btn-danger" href="Login.php">Logout</a>

            </ul>
        </div>
    </nav>

    <!-- Content goes here -->

    <script>
    function showSidebar() {
        const sidebar = document.querySelector(".vertical-navbar");
        sidebar.style.left = "0px";
    }

    function hideSidebar() {
        const sidebar = document.querySelector(".vertical-navbar");
        sidebar.style.left = "-250px";
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <body>
        <centre>

<br><br><br><br><br>
<div class="heading">
 <h4>WELCOME
<?php
       echo $_SESSION['username']; 
     ?><br><br>
     </h4></centre>
</div>




<br><br><br>

<div class="message-box">
        <div class="quote">
            <p>"The best way to predict the future is to create it."</p>
            <div class="author">
                - Abraham Lincoln <span>(Former President of the United States)</span>
            </div>
        </div>
        <div class="button-container">
            <a href="#" class="button">Become a Sponsor</a>
        </div>
    </div>



</body>





    <main>

        <!-- <section class="donate-section">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row"> -->

                   
                        </form> 
                    </div>

                </div>
            </div>
        </section>
    </main>


<br><br><br><br><br><br><br><br><br><br><br><br><br>





    

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
                            120-240-9600
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:donate@charity.org" class="site-footer-link">
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
    <!-- <script src="js/jquery.sticky.js"></script> -->
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
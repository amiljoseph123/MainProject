<?php
include "config.php";
 include "event_sidebar.php";?>
 






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    </title>
    <link rel="stylesheet" href="donation_css/styles.css">
    <link rel="stylesheet" href="donation_css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<style>
    .don-box {
        margin-bottom: 20px; /* Adjust the margin as needed */
    }

    .don-box img {
        max-width: 100%; /* Ensure images don't exceed the container width */
        height: auto; /* Maintain aspect ratio */
    }
    .btn1 {
    background-color: #5bc1ac;
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
}

</style>
<style>
.btn2 {
    /* width: 220px;
    height: 50px; */
    border: none;
    outline: none;
    color: #fff;
    background:#5bc1ac;
    cursor: pointer;
    position: relative;
    z-index: 0;
    text-decoration: none;
    /* border-radius: 10px; */
    padding: 10px 20px;
    border-radius: 5px;
}

.btn2:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.btn2:active {
    color: #000
}

.btn2:active:after {
    background: transparent;
}

.btn2:hover:before {
    opacity: 1;
}

.btn2r:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
</style>
<style>
       
       

        /* Style for the modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 50px;
            border-radius: 5px;
            max-width: 900px;
            width: 100%;
            text-align: center; /* Center the content within the modal */
        }

        /* Close button style */
        .close {
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        select, input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
<body>
    <!-- <div class="fixed-top"> -->

        <header>
            <!-- <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="#home">Code Convent Foundation</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <!-- <li class="nav-item active">
                                <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#donation">Donations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mission-id">Missions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li> -->
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

                    </div>
                </div>
            </div>
        </div>

    </div>
    
                    </div>
                    <!-- <div class="col-lg-6 order-first order-lg-last">
                        <div class="img-sec">
                            <img src="donation_img/img-1.png" alt="home-image">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="don-sec" id="donation">
        <div class="container">
            <div class="heading">
                <h2>&nbsp;Events...</h2>
            </div>
            <div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-lg-4">
            <div class="don-box">
                <img src="donation_img/img-1.png" alt="Clothes">
                <h3>Approved <br>Events</h3>
                <p></p>
                <!-- <a href="#contact" class="btn1">Sponsor Now</a> -->
                <a href="event_approved_view.php">Click here...</a>
            </div>
        </div>


        <div class="container">
    <section class="donation-section">
        <div class="row">
            <div class="col-lg-4">
                <div class="don-box">
                    <img src="donation_img/img-1.png" alt="Gadgets">
                    <h3>  Rejected <br>Events</h3>
                    <p></p>
                    <!-- <a href="#contact" class="btn1">Sponsor Now</a> -->
                    <a href="event_rejected_view.php">Click here...</a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="don-box">
                    <img src="donation_img/img-1.png" alt="Stationary">
                    <h3>Completed Events</h3>
                    <p></p>
                    <!-- <a href="#contact" class="btn1">Sponsor Now</a> -->
                    <a href="event_completed_view.php">Click here...</a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="don-box">
                    <img src="donation_img/img-1.png" alt="Stationary">
                    <h3>Pending <br>Events</h3>
                    <p></p>
                    <!-- <a href="#contact" class="btn1">Sponsor Now</a> -->
                    <a href="event_pending_view.php">Click here...</a>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="js/script.js"></script>
</body>
</html>

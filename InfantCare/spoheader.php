<!DOCTYPE html>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- TemplateMo 581 Kind Heart Charity https://templatemo.com/tm-581-kind-heart-charity -->
    <style>
        .vertical-bar {
            position: fixed;
            top: 0;
            left: -80px;
            height: 100%;
            width: 80px;
            background-color: #333;
            padding-top: 20px;
            z-index: 1000;
        }

        .vertical-bar.active {
            left: 0;
        }

        .vertical-bar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .vertical-bar .nav-link {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }

        .vertical-bar .nav-link:hover {
            background-color: #555;
        }

        .btn-primary {
            position: fixed;
            top: 10px;
            left: 10px;
            z-index: 1001;
        }
    </style>
</head>

<body id="section_1">

    <header class="site-header">
        <!-- ... existing header code ... -->
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
    <div class="vertical-bar">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="#">Orphanage</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Edit</a>
        </li>
    </ul>
</div>






    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <!-- ... existing navbar code ... -->
        <div class="container">
        <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" class="logo img-fluid" alt="Kind Heart Charity">
                <span>
                    Kind Heart Charity
                    <small>Non-profit Organization</small>
                </span>
            </a>

            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->

               <button class="btn btn-primary" id="showSidebar" onclick="showSidebar()">
            <i class="fas fa-bars"></i>
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

    <!-- <button class="btn btn-primary" id="toggleSidebar">Toggle Sidebar</button> -->

    <div class="vertical-bar" id="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">Orphanage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Edit</a>
            </li>
        </ul>
    </div>

    <!-- ... existing body content ... -->

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById('toggleSidebar').addEventListener('click', function () {
                document.getElementById('sidebar').classList.toggle('active');
            });
        });
    </script>





</body>

</html>

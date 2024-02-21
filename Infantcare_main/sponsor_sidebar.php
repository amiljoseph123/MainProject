<?php
// Check if the user is logged in
// if (isset($_SESSION['username'])) {
    // Include your database connection file
    // include "config.php";

    // Retrieve the volunteer ID from the database
    // $username = $_SESSION['username'];

//     $sql = "SELECT id FROM sponsor WHERE email = '$username'";
//     $result = $con->query($sql);

//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         $sponsor_id = $row['id'];
//     } else {
//         // Handle the case where the volunteer is not found
//         echo "sponsor not found.";
//         $con->close();
//         exit();
//     }
// } else {
//     // User is not logged in, redirect to the login page
//     header("Location: login.php");
//     exit(); // Make sure to stop execution after the redirect
// }
?>

<?php 
include('config.php');
// session_start();

 //echo $_SESSION["username"];
if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];



	$sql = "SELECT s_sponsor_id FROM sponsor WHERE s_email = '$username'";
	
	    $result = $con->query($sql);
	
	    if ($result->num_rows > 0) {
	        $row = $result->fetch_assoc();
	        $sponsor_id = $row['s_sponsor_id'];//check id 
	    } else {
	        // Handle the case where the volunteer is not found
	        echo "sponsor not found.";
	        $con->close();
	        exit();
	    }
	}


	
 else {
    // User is not logged in, redirect to the login page
    header("Location: login.php");
    exit(); // Make sure to stop execution after the redirect
}



?>





 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	 Boxicons 
     <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="Dstyle.css">

	<title>WELCOME sponsor</title>


	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
	<style>
        /* CSS code to change the color */
        .text {
            color: blue; /* Change 'red' to the desired color */
        }
        #sidebar {
            background-color: #5bc1ac; /* Change '#f0f0f0' to the desired color */
            /* You can also use color names like 'red', HEX values, or RGB values */
        }
		.brand {
             color: red; /* Change this color to your desired color */
		}
	

    </style>
	
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Welcome
			<?php
                    echo $_SESSION['username']; 
                    $user = $_SESSION['username'];
                ?>
				
			</span>
			<br>
			<span class="text"></span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="sponsor_sidebar3.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
			
            <a href="sponsor_profile.php?s_sponsor_id=<?php echo $sponsor_id ; ?>">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Profile</span>
				</a>
			</li>
			<li>
				<a href="sponsor_password_reset.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">change password</span>
				</a>
			
			<li>
				<a href="">
					<i class='bx bxs-group' ></i>
					<span class="text">update profile</span>
				</a>
			</li>
		<!-- </ul> -->
		 <!-- <ul class="side-menu">  -->
			
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<!-- <section id="content"> -->
		<!-- NAVBAR -->
		<!-- <nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav> -->
		<!-- NAVBAR -->

		<!-- MAIN -->
		<!-- <main>
			<div class="head-title">
			<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div> -->

				 <!-- partial:partials/_navbar.html -->
				 <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <!-- <span class="mdi mdi-menu"></span> -->
          </button>
		  <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <!-- <i class="input-group-text border-0 mdi mdi-magnify"></i> -->
                </div>
                <!-- <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects"> -->
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <!-- <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> -->
                <!-- <div class="nav-profile-img"> -->
                  <!-- <img src="assets/images/faces/face1.jpg" alt="image"> -->
                  <span class="availability-status online"></span>
                </div>

				</div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">David Greymaax</p>
                </div>
              </a>

			  </ul>
                </div>
              </span>
            </li>
          </ul>
        </nav>
		<div class="container  justify-content-center">
    <!-- Your existing content goes here -->
    <div class="main-body">
		 <!-- partial -->
		 <!-- <div class="container d-flex justify-content-center"> -->
    <!-- Your existing content goes here -->
    <!-- <div class="main-body"> -->
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
			
			<div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <!-- <h4 class="font-weight-normal mb-3">Weekly Sales <i class="mdi mdi-chart-line mdi-24px float-right"></i> -->
                    </h4>
                    <!-- <h2 class="mb-5">Sponsor a cild</h2> -->
					<h2 class="mb-5"><a href="sponsor_child2.php?s_sponsor_id=<?php echo $sponsor_id ; ?>" style="text-decoration: none; color: #333;">Sponsor a Child</a></h2>
          <!-- <a href="sponsor_profile.php?s_sponsor_id=<?php echo $sponsor_id ; ?>"> -->
                    <!-- <h6 class="card-text">Increased by 60%</h6> -->
                  </div>
                </div>
              </div>

			  <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                   
                                       <h2 class="mb-5"><a href="sponsor_items.php" style="text-decoration: none; color: #333;">Sponsor Items</a></h2>
 <h4 class="font-weight-normal mb-3"> sponsor items<i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <!-- <h2 class="mb-5">45,6334</h2> -->
                    <!-- <h6 class="card-text">Decreased by 10%</h6> -->
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    
                  <h2 class="mb-5"><a href="chatbox.php" style="text-decoration: none; color: #333;">Chat</a></h2>
                  <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Chat Room<i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <!-- <h2 class="mb-5">95,5741</h2>
                    <h6 class="card-text">Increased by 5%</h6> -->
                  </div>
                </div>
              </div>
            </div>
           
                  
			</div>
</div>
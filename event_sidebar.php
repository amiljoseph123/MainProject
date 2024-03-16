

<?php 
// session_start();
 //echo $_SESSION["username"];
// if (isset($_SESSION['username'])) {
    // User is logged in
    // You can display user-specific content here
//  } 
// else {
//     // User is not logged in, redirect to the login page
//     header("Location: login.php");
//     exit(); // Make sure to stop execution after the redirect
// }

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	 Boxicons -->
     <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="Dstyle.css">

	<title>WELCOME</title>

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
			<!-- <span class="text">Welcome <?php echo $_SESSION["username"];?></span> -->
			<br><br>
			
			<br>
			<span class="text"></span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				
				<a href="event_homepage.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Home</span>
				</a>
			</li>

			<li class="active">
				
				<a href="event_view.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Event Applications</span>
				</a>
			</li>
			<li>
				<a href="event_approved_view.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Approved events</span>
				</a>
			</li>
            <li>
				<a href="event_rejected_view.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Rejected events</span>
				</a>
			</li>
			<li>
				<a href="event_completed_view.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Completed events</span>
				</a>
			</li>
			<li>
				<a href="event_pending_view.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Pending events</span>
				</a>
                <li>
				<a href="orphanage_homepage.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Back</span>
				</a>
			
			
	</section>
	<!-- SIDEBAR -->


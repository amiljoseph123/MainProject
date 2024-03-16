<?php
include "config.php";
?>
<?php 
// session_start();
 //echo $_SESSION["username"];
if (isset($_SESSION['username'])) {
    // User is logged in
    // You can display user-specific content here
} else {
    // User is not logged in, redirect to the login page
    header("Location: login.php");
    exit(); // Make sure to stop execution after the redirect
}

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
	<style>
				.apply-button {
					width: 150px;
            padding: 12px;
            background-color: #5bc1ac;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
		.reject-button {
					width: 150px;
            padding: 12px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
        /* Optional hover effect */
        .apply-button:hover {
            background-color: #2980b9;
        }
		.reject-button:hover {
            background-color: #2980b9;
        }
	
    </style>
     <style>
        .card {
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 300px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .title {
            /* font-weight: bold; */
            margin-bottom: 5px;
        }

        
    </style>
     <style>
        .card1 {
            width: 500px;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            /* margin: 20px; */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 20px auto;
        }

        h3 {
            color: #333;
            font-size: 1.5em;
        }

        p {
            color: #666;
            font-size: 1.2em;
        }

        img {
            max-width: 90%;
            height: auto;
            margin-top: 10px;
        }

        button {
            background-color: skyblue;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 15px;
            cursor: pointer;
        }

        button.secondary {
            background-color: green;
        }
        h6 {
        display: none; /* Hide the h4 element */
    }
    </style>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Welcome</span>
			<br>
			<span class="text"></span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="orphanage_homepage.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="view_profile.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Profile</span>
				</a>
			</li>
			<li>
				<a href="add_student3.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Add Student</span>
				</a>
			
			<li>
				<a href="view_student3.php">
					<i class='bx bxs-group' ></i>
					<span class="text">View Student</span>
				</a>
			</li>
		<!-- </ul> -->
		 <!-- <ul class="side-menu">  -->
			 <li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">volunteer application</span>
				</a>
			</li> 
			<li>
			<a href="orph_view_child_application.php">
					<i class='bx bxs-cog' ></i>
					<span class="text">sponsor application</span>
				</a>
			</li> 
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
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<!-- <a href="#" class="nav-link">Categories</a> -->
			<form action="#">
				 <div class="form-input">
					<!-- <input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button> -->
				
				<input type="text" id="searchInput" oninput="searchTable()" placeholder="Search by Name">
          <button onclick="searchTable()"><i class='bx bx-search' ></i></button>
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
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
			<div class="left">
					<!-- <h1>Volunteer Applications</h1> -->
					<!-- <ul class="breadcrumb"> -->
						<!-- <li> -->
							<!-- <a href="#">Dashboard</a> -->
						<!-- </li> -->
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<!-- <a class="active" href="#">Home</a> -->
						</li>
					</ul>
				</div>


                <?php

// Include the database configuration file
include 'config.php';

// Check if the form is submitted
if (isset($_POST['view'])) {
    $id = $_POST["id_s"];
    $sql = "SELECT * FROM cloth WHERE id = '$id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Retrieve values from the database
        $age = $row["age"];
        $gender = $row["gender"];
        $quantity = $row["quantity"];

        // Display the data
        ?>
        <div class="card1">
            <h4><p>Age: <?php echo isset($age) ? $age : "N/A"; ?></p></h4>
            <h4><p>Gender: <?php echo isset($gender) ? $gender : "N/A"; ?></p></h4>
            <h6><p>Quantity: <?php echo isset($quantity) ? $quantity : "N/A"; ?></p></h6>
            <br><br>
        </div>
        <?php
    } else {
        echo "User not found";
    }
} else {
    echo "Invalid request";
}

// Close the database connection
$con->close();
?>


    <div class="card1">
       
        <h4> <p>Age : <?php echo $age; ?></p></h4>
        <h4> <p>Gender : <?php echo $gender; ?></p></h4>
        <h6> <p>quantity : <?php echo $quantity; ?></p></h6>
       
        <br><br>

        

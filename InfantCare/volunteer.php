<?php
require_once 'config.php';
$result = mysqli_query($con, "SELECT * FROM `orphanage` ") or die("error");
?> 
<?php
// require 'header.php'
?>





<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
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
	

        .apply-button {
            padding: 8px 12px;
            background-color: #5bc1ac;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Optional hover effect */
        .apply-button:hover {
            background-color: #2980b9;
        }
	
		/* #content {
    background-color:  #5bc1ac; 
} */

    </style>

</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">WELCOME </span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">history</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a> <br>
			<!-- </li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li> -->
			<!-- <li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li> -->
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
		</nav>

		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<!-- <div class="head-title">
            <div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="Dindex.php">Home</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Orphanage Details</a>
						</li>
					</ul>
				</div> -->
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>Orhanage</h3>
						<!-- <p>details</p> -->
					</span>
				</li>
				<!-- <li> -->
					<!-- <i class='bx bxs-group' ></i>
					<span class="text">
						<h3>Sponsors</h3>
						<p></p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>Donation</h3>
						<p></p>
					</span>
				</li> -->
			</ul>
            
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
                                <th>Sl.No</th>
                                <th>Name</th>
                                <!-- <th>government id</th>
                                <th>Established date</th> -->
                                <th>Email</th>
                                <th>Phone</th>
                                <th>District</th>
                                <th>City</th>
                                <th>Pincode</th>
                                <th>Application</th>
       

							</tr>
						</thead>
						<tbody>
                        <?php
                            $c=0;
                            while ($row = $result->fetch_assoc()) {
                                $name=$row["o_name"];
                                // $id=$row["o_govtid"];
                                // $date=$row["o_edate"];
                               
                                $email=$row["o_email"];
                                $phone=$row["o_phone"];

                                $district=$row["o_district"];
                                $city=$row["o_city"];
                                $pincode=$row["o_pincode"];


                            $c++;
                        ?>
                <tr>
                    <td><?php echo $c; ?></td>
                    <td><?php echo $name; ?></td>
                    
                    <td><?php echo $email; ?></td>
                    <td><?php echo  $phone; ?></td>
                    <td><?php echo $district; ?></td>
                    <td><?php echo $city; ?></td>
                    <td><?php echo $pincode; ?></td>
                    <!-- <td><button class="apply-button">Apply</button></td> -->
					<td><button class="apply-button" onclick="sendApplication()">Apply</button></td>

					<!-- <td><a href="volunteer_details.php?id=<?php echo $volunteer_id; ?>" class="apply-button">Apply</a></td> -->
					<!-- <td><a href="volunteer_details.php?id=<?php echo $row['orphanage_id']; ?>" class="apply-button">Apply</a></td> -->

					<!-- <td><button class="apply-button">Cancel</button></td> -->
                </tr>
                <?php
                }
                ?>
							 
					</table> 
				<!-- </div>
				<div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul> -->
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
<!-- <script>function sendApplication() {
  // Create an XMLHttpRequest object
  var xhr = new XMLHttpRequest();

  // Specify the request details (method, URL, asynchronous)
  xhr.open("GET", "orphanage.php", true);

  // Set up a callback function to handle the response
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // Request was successful, you can perform actions upon success here
        console.log("Application sent successfully!");
      } else {
        // Request failed
        console.error("Failed to send application. Status code: " + xhr.status);
      }
    }
  };

  // Send the request
  xhr.send();
}
</script> -->

<script>
        function sendApplication() {
            // Redirect to vol_apply.php
            window.location.href = 'vol_apply.php';
        }
    </script>

	<script src="Dscript.js"></script>
</body>
</html> 
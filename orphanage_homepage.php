<?php 
session_start();
 //echo $_SESSION["username"];
if (isset($_SESSION['username'])) {
    // User is logged in
    echo "Welcome, " . $_SESSION['username'];
	
    // You can display user-specific content here
} else {
    // User is not logged in, redirect to the login page
    header("Location: login.php");
    exit(); // Make sure to stop execution after the redirect
}
?>


<?php
include "orphanage_sidebar.php";
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



	

		<!-- MAIN -->
		<main>
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
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3><a href="">Total students</a></h3>
						<!-- <p>details</p> -->	
					</span>
					<?php
include('config.php');

function getCount($tableName) {
    global $con;

    // Check if the connection is still open
    if ($con && $con->ping()) {
        $tableName = mysqli_real_escape_string($con, $tableName);

        $sql = "SELECT COUNT(*) as count FROM $tableName";
        $result = $con->query($sql);

        if ($result) {
            $row = $result->fetch_assoc();
            return $row['count'];
        } else {
            return false;
        }
    } else {
        return false; // Connection is closed or not established
    }
}

// Example usage
if ($con && !$con->connect_error) {
    $studentCount = getCount('student');

    if ($studentCount !== false) {
        // echo " $studentCount";
    } else {
        echo "Error retrieving student count.";
    }

    $con->close();
} else {
    die("Connection failed: " . $con->connect_error);
}
?>
<!-- <h2 style="font-size: 24px;"><?php echo $studentCount; ?></h2> -->
<h2 style="font-size: 24px; color: #3498db; text-align: center; font-family: 'Arial', sans-serif; font-weight: bold;"><?php echo $studentCount; ?></h2>




<!-- ... -->





				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3><a href="">Volunteer Applications</a></h3>
						<p></p>
					</span>
					<?php
include('config.php');

function getCountt($tableName) {
    global $con;

    // Check if the connection is still open
    if ($con && $con->ping()) {
        $tableName = mysqli_real_escape_string($con, $tableName);

        $sql = "SELECT COUNT(*) as count FROM $tableName";
        $result = $con->query($sql);

        if ($result) {
            $row = $result->fetch_assoc();
            return $row['count'];
        } else {
            return false;
        }
    } else {
        return false; // Connection is closed or not established
    }
}

// Example usage
if ($con && !$con->connect_error) {
    $studentCount = getCountt('volunteer');

    if ($studentCount !== false) {
        // echo " $studentCount";
		
    } else {
        echo "Error retrieving student count.";
    }

    $con->close();
} else {
    die("Connection failed: " . $con->connect_error);
}
?>
<!-- <h2 style="font-size: 24px;"><?php echo $studentCount; ?></h2> -->
<h2 style="font-size: 24px; color: blue; text-align: center; font-family: 'Arial', sans-serif; font-weight: bold;"><?php echo $studentCount; ?></h2>

				</li>

				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3><a href="s_items.php">Sponserd items</a></h3>
						<!-- <p>details</p> -->
					</span>

					<?php
include('config.php');

function getCounttt($tableName) {
    global $con;

    // Check if the connection is still open
    if ($con && $con->ping()) {
        $tableName = mysqli_real_escape_string($con, $tableName);

        $sql = "SELECT COUNT(*) as count FROM $tableName";
        $result = $con->query($sql);

        if ($result) {
            $row = $result->fetch_assoc();
            return $row['count'];
        } else {
            return false;
        }
    } else {
        return false; // Connection is closed or not established
    }
}

// Example usage
if ($con && !$con->connect_error) {
    $studentCount = getCounttt('sponsor');

    if ($studentCount !== false) {
        // echo " $studentCount";
    } else {
        echo "Error retrieving student count.";
    }

    $con->close();
} else {
    die("Connection failed: " . $con->connect_error);
}
?>
<!-- <h2 style="font-size: 24px;"><?php echo $studentCount; ?></h2> -->
<h2 style="font-size: 24px; color: green; text-align: center; font-family: 'Arial', sans-serif; font-weight: bold;"><?php echo $studentCount; ?></h2>


				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3><a href="">Donation</a></h3>
						<p></p>
					</span>
				</li>
				<li>
    <i class='bx bxs-group'></i>
    <span class="text">
        <h3><a href="event_homepage.php">Events</a></h3>
        <p></p>
    </span>
</li>


				<br><br><br>
				<!-- <li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3><a href="admin_donation_view.php">Donation</h3>
						<p></p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3><a href="admin_donation_view.php">Sponsors</h3>
						<p></p>
					</span>
				</li> -->
			
				

				
				<!-- <tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Process</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
						</tbody>
					</table> -->
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

	<!-- Include this script on the page where you want to display the total count -->


	

	<script src="Dscript.js"></script>
</body>
</html>
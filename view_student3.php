<!DOCTYPE html>
<?php
// session_start();
// if (isset($_SESSION['username'])) {
    // User is logged in
  //  echo "Welcome, " . $_SESSION['username'];
// }
// ?>


<?php
require_once 'config.php';
  // include "o.php";
  // include "orphanage_sidebar.php";
  // include "o_side.php"?>
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


<?php
require_once 'config.php';
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

    
/* Change the background color of the "View" button */
.btn-primary {
    background-color: #5bc1ac; /* Change to your desired color */
    color: #fff; /* Text color */
    border: 1px solid #5bc1ac; /* Border color */
    padding: 10px 20px; /* Padding around text */
    border-radius: 5px; /* Rounded corners */
    font-size: 16px; /* Font size */
    cursor: pointer; /* Cursor on hover */
    transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transition */

    /* Optional: Hover styles */
}

.btn-primary:hover {
    background-color: #4fa695; /* Change to your desired hover color */
    color: #fff; /* Text color on hover */
}


/* Change the background color of the "Delete" button */
.btn-danger {
    background-color: red; /* Change to your desired color */
}

.data-table {
    width: 300%;
    border-collapse: collapse;
    margin-top: 20px;
}

.data-table th,
.data-table td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
}

.data-table th {
    background-color: #5bc1ac;
    color: white;
    font-weight: bold;
}

.data-table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Additional styles for 'choose' column */
.data-table td:nth-child(3) {
    /* Apply styles to the 'choose' column */
    text-align: center;
}

/* Optional: Hover styles */
.data-table tr:hover {
    background-color: #e0f7fa; /* Change to your desired hover color */
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
				<a href="vol_dash.php">
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

<!-- CONTENT -->

<br><br>



<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico" />



<style>
   #sidebar {
    /* background-color: #ff6600; This sets the background color to a shade of orange. Replace with your desired color. */
     background-color: #5bc1ac; 
    /* background-color: whitesmoke; */
}

.navbar-menu-wrapper {
    background-color: #5bc1ac; /* This sets the background color to a shade of blue. Replace with your desired color. */
    /* Additional styles can be added as needed */
}

.container-fluid.page-body-wrapper {
    background-color: #5bc1ac; /* This sets the background color to a shade of pink. Replace with your desired color. */
    /* Additional styles can be added as needed */
}

.navbar.default-layout-navbar {
    background-color: #5bc1ac; /* This sets the background color to a shade of blue. Replace with your desired color. */
    /* Additional styles can be added as needed */
}

.text-center.navbar-brand-wrapper {
    background-color:#5bc1ac ; /* This sets the background color to a shade of pink. Replace with your desired color. */
    /* Additional styles can be added as needed */
}

span.mdi.mdi-menu {
    color: black; /* This sets the color to a shade of orange. Replace with your desired color. */
    /* Additional styles can be added as needed */
}

i.input-group-text.border-0.mdi.mdi-magnify {
    color: black; /* This sets the color to a shade of orange. Replace with your desired color. */
    /* Additional styles can be added as needed */
}
li.nav-item.d-none.d-lg-block.full-screen-link {
    color: black; /* This sets the color to a shade of orange. Replace with your desired color. */
    /* Additional styles can be added as needed */
}
i.mdi.mdi-email-outline {
    color: black; /* This sets the color to a shade of orange. Replace with your desired color. */
    /* Additional styles can be added as needed */
}
i.mdi.mdi-bell-outline {
    color: black; /* This sets the color to a shade of orange. Replace with your desired color. */
    /* Additional styles can be added as needed */
}


a.navbar-brand.brand-logo img {
    filter: invert(1); /* This will invert the colors of the image. */
    /* Additional styles can be added as needed */
}



/* Change the background color of the "View" button */
.btn-primary {
    background-color: #5bc1ac; /* Change to your desired color */
}

/* Change the background color of the "Delete" button */
.btn-danger {
    background-color: #5bc1ac; /* Change to your desired color */
}
 

</style>



<style>
    /* Add this CSS to prevent background color change */
    .not-found-message {
        display: none;
        color: red; /* Set the color of the "not found" message */
    }

    .card {
        display: block;
        margin-bottom: 15px; /* Add a margin between cards */
    }

    .card.not-found {
        display: none;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function searchTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            // Skip the header row
            if (i !== 0) {
                td = tr[i].getElementsByTagName("td")[1]; // Corrected index for the name column
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    var containsLetter = txtValue.toUpperCase().includes(filter);
                    tr[i].style.display = containsLetter ? "" : "none";
                }
            }
        }
    }
</script>



  </head>
  <body>
<script>
document.getElementById('submitButton').addEventListener('click', function() {
  // Trigger SweetAlert2 alert
  Swal.fire({
    position: 'centre',
    icon: 'success',
    title: 'Student added successfully',
    showConfirmButton: false,
    timer: 1500
  });
});
</script>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Page Title</title>
  <!-- Include the SweetAlert2 library -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
  function applyFilter() {
    var genderFilter = document.getElementById('genderFilter').value;
    var ageFilter = document.getElementById('ageFilter').value;
    window.location.href = 'view_student3.php?genderFilter=' + genderFilter + '&ageFilter=' + ageFilter;
  }

  // Function to handle the click event of the submit button
  document.getElementById('submitButton').addEventListener('click', function() {
    // Trigger SweetAlert2 alert
    Swal.fire({
      position: 'centre',
      icon: 'success',
      title: 'Student added successfully',
      showConfirmButton: false,
      timer: 1500
    });
  });
</script>
</head>
<body>
  <br><br>
<div class="filter-section">
  <label for="genderFilter">Filter by Gender:</label>
  
  <select id="genderFilter" onchange="applyFilter()">
    <option value=""></option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
  </select>

  <label for="ageFilter">Filter by Age:</label>
  <select id="ageFilter" onchange="applyFilter()">
    <option value="">All</option>
    <option value="lessThan5">Less than 5</option>
    <option value="between5And10">5 to 10</option>
    <option value="above10">Above 10</option>
  </select>
</div>

<table id="myTable" class="table table-striped">
  <thead>
    <tr>
      <th>Sl.No</th>
      <th>Name</th>
      <th>Gender</th>
      <th>Age</th>
    </tr>
  </thead>
  <tbody>
  <br><br>
  <?php
    require_once 'config.php';

    $genderFilter = isset($_GET['genderFilter']) ? $_GET['genderFilter'] : '';
    $ageFilter = isset($_GET['ageFilter']) ? $_GET['ageFilter'] : '';

    // Modify the SQL query based on the gender and age filters
    $sql = "SELECT * FROM `student` WHERE 1";
    if ($genderFilter && $genderFilter !== 'All') {
        $sql .= " AND `gender` = '$genderFilter'";
    }
    if ($ageFilter && $ageFilter !== 'All') {
        switch ($ageFilter) {
            case 'lessThan5':
                $sql .= " AND `age` < 5";
                break;
            case 'between5And10':
                $sql .= " AND `age` BETWEEN 5 AND 10";
                break;
            case 'above10':
                $sql .= " AND `age` > 10";
                break;
        }
    }

    $result = mysqli_query($con, $sql) or die("error");

    $c = 0;
    while ($row = $result->fetch_assoc()) {
        $firstname = $row["firstname"];
        $gender = $row["gender"];
        $age = $row["age"];
        $student_id = $row["id"];
        $c++;
    ?>
      <tr>
        <td><?php echo $c; ?></td>
        <td><?php echo $firstname; ?></td>
        <td><?php echo $gender; ?></td>
        <td><?php echo $age; ?></td>
        <td>
          <form action="student_view2.php" method="post">
            <input type="hidden" name="id_s" value=<?php echo $student_id; ?>>
            <input type="submit" value="View" name="view" class="btn btn-primary">
          </form>
          <a href="delete_student.php?id=<?php echo $student_id; ?>" class="btn btn-primary" id="deleteButton">Delete</a>
        </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>

</body>
</html>
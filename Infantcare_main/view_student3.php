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
  include "o_side.php"?>


<!-- CONTENT -->
<



<html lang="en">
  <head>
    <!-- Required meta tags -->
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


  </head>
  <body>

 

  <body>

<!-- <button type="submit" class="btn btn-gradient-primary me-2" name="submit" id="submitButton">Submit</button> -->

<script>
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
<div class="filter-section">
  <label for="genderFilter">Filter by Gender:</label>
  <select id="genderFilter" onchange="applyFilter()">
    <option value="">All</option>
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

<table class="table table-striped">
  <thead>
    <tr>
      <th>Sl.No</th>
      <th>Name</th>
      <th>Gender</th>
      <th>Age</th>
    </tr>
  </thead>
  <tbody>
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
          <a href="student_view2.php?id=<?php echo $student_id; ?>" class="btn btn-primary">View</a>
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
<!DOCTYPE html>
<?php
// session_start();
if (isset($_SESSION['username'])) {
    // User is logged in
   //echo "Welcome, " . $_SESSION['username'];
}
?>

<?php
  include "o.php";?>

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



<script>
function searchstudent() {
    var input, filter, cards, card, i, txtValue;
    input = document.getElementById('searchInput');
    filter = input.value.toUpperCase();
    cards = document.getElementsByClassName('card');

    var found = false; // Add this variable to track if any results were found

    for (i = 0; i < cards.length; i++) {
        card = cards[i];
        txtValue = card.textContent || card.innerText;

        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            card.style.display = '';
            found = true; // Set found to true if a result is found
        } else {
            card.style.display = 'none';
        }
    }

    // Display "not found" message if no results were found
    var notFoundMessage = document.getElementById('notFoundMessage');
    if (!found) {
        notFoundMessage.style.display = 'block';
    } else {
        notFoundMessage.style.display = 'none';
    }
}

</script>
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



  </head>
  <body>

 

    <div class="container-scroller">
      


                    <!-- </form> -->
                  <!-- </div> -->
                </div>
              </div>                        





              <!-- <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Striped Table</h4>
                    <p class="card-description"> Add class <code>.table-striped</code>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                        <th>Sl.No</th>
                                <th>firstname</th>
                                <th>lastname</th>
                                <th>age</th>
                                <th>gender</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
                            <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                          </td>
                </table> -->



                <!-- <div class="col-lg-12 grid-margin stretch-card"> -->
                 <div class="card"> 
                  <div class="card-body">


                  <div id="notFoundMessage" style="display:none;">Not Found</div>

                  <!-- <div class="row mb-4"> -->
        <!-- <div class="col-md-12"> -->
            <div class="input-group">
                <input type="text" id="searchInput" class="form-control" placeholder="Search student" onkeyup="searchstudent()">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">Search</button>
               


                    <h4 class="card-title">Striped Table</h4>
                    <p class="card-description"> Add class <code>.table-striped</code>
                    </p>



                <table class="table table-striped">
  <thead>
    <tr>
      <th>Sl.No</th>
      <th>firstname</th>
     
  </thead>
  <tbody>



  <?php
                require_once 'config.php';
                $result = mysqli_query($con, "SELECT * FROM `student` ") or die("error");
            ?> 
   




    <?php
require_once 'config.php';
$result = mysqli_query($con, "SELECT * FROM `student` ") or die("error");

$c = 0;
while ($row = $result->fetch_assoc()) {
    $firstname = $row["firstname"];
    $lastname = $row["lastname"];
    $age = $row["age"];
    $gender = $row["gender"];

    $student_id = $row["id"]; // Assuming you have a field named 'id' in your database for each student
    $c++;
?>
    <tr>
        <td><?php echo $c; ?></td>
        <td><?php echo $firstname; ?></td>
        <td>
            <a href="student_view.php?id=<?php echo $student_id; ?>" class="btn btn-primary">View</a>

            <!-- <button type="button" class="btn btn-danger">Delete</button> -->
            <form action="delete_student.php" method="post" style="display:inline;">
        <input type="hidden" name="id" value="<?php echo $student_id; ?>">
        <button type="submit" class="btn btn-danger">Delete</button>
        </td>
    </tr>
<?php
}
?>





  </tbody>
</table>





        <br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br>
        <br><br>
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">infantcare@gmail.com</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->






 
  </body>
</html>


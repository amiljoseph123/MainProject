<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['username'])) {
    // User is logged in
   //echo "Welcome, " . $_SESSION['username'];
}
?>


<?php
require 's.php';
?> 



        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  

                    
                  <h4>WELCOME
                  <?php
                    echo $_SESSION['username']; 
                    include "config.php";

                    if (isset($_SESSION['username'])) {
                    $user = $_SESSION['username'];
    // $sponsor_email = $user["email"];

    // Fetch existing sponsor data
                    $sql = "SELECT * FROM sponsor WHERE s_email = '$user'";
                    $result = $con->query($sql);

                  if ($result->num_rows > 0) {
                  $row = $result->fetch_assoc();
                  $name = $row['s_name'];
                  $email = $row['s_email'];
                  $phone = $row['s_phone'];
                  $aadhar = $row['s_aadhar'];
                } else {
                echo "Sponsor not found.";
                $con->close();
                exit();
                }
                } else {
                echo "Sponsor ID not provided.";
                $con->close();
                exit();
              }
?>

          <form action="update_process.php" method="POST" class="forms-sample">
                    <input type="hidden" name="id" value="<?php echo $email; ?>">
                    <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" required>
                    </div>
                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" required>
                    </div>
                    <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text"  class="form-control" name="phone" value="<?php echo $phone; ?>" required>
                    </div>
                    <div class="form-group">
                    <label for="aadhar">Aadhar Number</label>
                    <input type="text" name="aadhar" class="form-control" value="<?php echo $aadhar; ?>" required><br>
                    </div>
                    <input type="submit" name="update" value="Update profile" class="btn btn-success btn-sm">

                    
                </form>  
                  
                  </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <!-- <div class="card-body">
                    <h4 class="card-title">Horizontal Form</h4>
                    <p class="card-description"> Horizontal form layout </p>
                  </div> -->
                </div>
            </div>

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
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
    <!-- plugins:js
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

    <!-- <script>
  // Add an event listener for the scroll event
window.addEventListener('scroll', function() {
  // Get the element you want to change color
  var navItem = document.querySelector('.nav-item');

  // Get the position of the element relative to the viewport
  var rect = navItem.getBoundingClientRect();

  // Check if the element is in view
  if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
    // Add a class to change the color
    navItem.classList.add('active');
  } else {
    // Remove the class if the element is not in view
    navItem.classList.remove('active');
  }
});

</script> -->




<?php

// require 'footer.php';
?> 

  </body>
</html>
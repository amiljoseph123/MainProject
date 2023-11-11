<?php
  include "o.php";?>
                    
                  <h4>WELCOME</h4>
                  <?php
                    
                    include "config.php";

                    if (isset($_SESSION['username'])) {
                    $user = $_SESSION['username'];
                    echo $user;
    // $sponsor_email = $user["email"];

    // Fetch existing sponsor data
                    $sql = "SELECT * FROM orphanage WHERE o_email = '$user'";
                    $result = $con->query($sql);

                  if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                //   $name = $row['s_name'];
                //   $email = $row['s_email'];
                //   $phone = $row['s_phone'];
                //   $aadhar = $row['s_aadhar'];


                    $name = $row['o_name'];
                     $id = $row['o_govtid'];
                    $date = $row['o_edate'];
                     $email = $row['o_email'];
                    $phone = $row['o_phone'];
                    $district = $row['o_district'];
                    $city = $row['o_city'];
                    $pincode = $row['o_pincode'];
                    // $password = $row['o_password'];

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
          <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Orphanage</title>
    <style>
        .error-message {
            color: red;
        }
    </style>
</head>

<body>

    <form action="#" method="POST" class="forms-sample">
        <input type="hidden" name="id" value="<?php echo $email; ?>">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="orphanage_name" id="orphanage_name" class="form-control" value="<?php echo $name; ?>" required oninput="validateName()">
            <div id="nameError" class="error-message"></div>
        </div>

        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" name="id" class="form-control" value="<?php echo $id; ?>" required oninput="validateId()">
          
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="text" name="date" class="form-control" value="<?php echo $date; ?>" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>" required>
        </div>

        <div class="form-group">
            <label for="district">District</label>
            <input type="text" name="district" class="form-control" value="<?php echo $district; ?>" required>
        </div>

        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" class="form-control" value="<?php echo $city; ?>" required>
        </div>

        <div class="form-group">
            <label for="pincode">Pincode</label>
            <input type="text" name="pincode" class="form-control" value="<?php echo $pincode; ?>" required>
        </div>

        <input type="submit" name="update" value="Update" class="btn btn-success btn-sm">
    </form>

    <script>
        function validateName() {
            var nameInput = document.getElementById('orphanage_name');
            var nameError = document.getElementById('nameError');

            // Regular expression to validate name (letters and spaces only)
            var nameRegex = /^[A-Za-z\s]+$/;

            if (!nameRegex.test(nameInput.value) || nameInput.value.length < 2) {
                nameError.textContent = 'Please enter a valid name (at least 2 characters, only letters and spaces).';
            } else {
                nameError.textContent = '';
            }
        }
    </script>
 <script>
        function validateId() {
            // Get the input element by ID
            var idInput = document.getElementById("id");

            // Get the entered value
            var idValue = idInput.value;

            // Define the regular expression for validation (first two letters and four numbers)
            var idRegex = /^[a-zA-Z]{2}\d{4}$/;

            // Check if the entered value matches the regex
            if (idRegex.test(idValue)) {
                // Valid ID format
                alert("ID is valid!");
            } else {
                // Invalid ID format
                alert("ID must start with two letters followed by four numbers. No characters or spaces are allowed.");
            }
        }
    </script>
</body>

</html>

 

                
                


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
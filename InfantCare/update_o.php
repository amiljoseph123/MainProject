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

    <input type="date" id="date" name="date" class="form-control" value="<?php echo $date; ?>" max="<?php echo $maxDate; ?>" required>
    <div id="dateError" class="error-message"></div>
</div>
<!-- </div> -->




        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>" required>
        </div>
<!-- 
        <div class="form-group">
            <label for="district">District</label>
            <input type="text" name="district" class="form-control" value="<?php echo $district; ?>" required>
        </div> -->

        <div class="form-group">
    <label for="district">District</label>
    <select name="district" class="form-control" required>
        <option value="" disabled selected>Select District</option>
        <option value="Alappuzha" <?php echo ($district == 'Alappuzha') ? 'selected' : ''; ?>>Alappuzha</option>
        <option value="Ernakulam" <?php echo ($district == 'Ernakulam') ? 'selected' : ''; ?>>Ernakulam</option>
        <option value="Idukki" <?php echo ($district == 'Idukki') ? 'selected' : ''; ?>>Idukki</option>
        <option value="Kannur" <?php echo ($district == 'Kannur') ? 'selected' : ''; ?>>Kannur</option>
        <option value="Kasaragod" <?php echo ($district == 'Kasaragod') ? 'selected' : ''; ?>>Kasaragod</option>
        <option value="Kollam" <?php echo ($district == 'Kollam') ? 'selected' : ''; ?>>Kollam</option>
        <option value="Kottayam" <?php echo ($district == 'Kottayam') ? 'selected' : ''; ?>>Kottayam</option>
        <option value="Kozhikode" <?php echo ($district == 'Kozhikode') ? 'selected' : ''; ?>>Kozhikode</option>
        <option value="Malappuram" <?php echo ($district == 'Malappuram') ? 'selected' : ''; ?>>Malappuram</option>
        <option value="Palakkad" <?php echo ($district == 'Palakkad') ? 'selected' : ''; ?>>Palakkad</option>
        <option value="Pathanamthitta" <?php echo ($district == 'Pathanamthitta') ? 'selected' : ''; ?>>Pathanamthitta</option>
        <option value="Thiruvananthapuram" <?php echo ($district == 'Thiruvananthapuram') ? 'selected' : ''; ?>>Thiruvananthapuram</option>
        <option value="Thrissur" <?php echo ($district == 'Thrissur') ? 'selected' : ''; ?>>Thrissur</option>
        <option value="Wayanad" <?php echo ($district == 'Wayanad') ? 'selected' : ''; ?>>Wayanad</option>
    </select>
</div>



        <!-- <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" class="form-control" value="<?php echo $city; ?>" required>
        </div> -->
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" id="city" class="form-control" value="<?php echo htmlspecialchars($city); ?>" required>
            <small id="cityError" style="color: red;"></small>
        </div>

        <!-- <div class="form-group">
            <label for="pincode">Pincode</label>
            <input type="text" name="pincode" class="form-control" value="<?php echo $pincode; ?>" required>
        </div> -->
<div class="form-group">
    <label for="pincode">Pincode</label>
    <input type="text" name="pincode" id="pincode" class="form-control" value="<?php echo $pincode; ?>" required>
    <small id="pincodeError" style="color: red;"></small>
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

<script>
    window.onload = function () {
        var dateInput = document.getElementById('date');
        var dateError = document.getElementById('dateError');

        dateInput.addEventListener('input', validateDate);

        function validateDate() {
            var selectedDate = dateInput.value;

            // Validate date format
            var dateFormatRegex = /^\d{4}-\d{2}-\d{2}$/;
            if (!dateFormatRegex.test(selectedDate)) {
                dateError.textContent = 'Please enter a valid date in the format YYYY-MM-DD.';
                return;
            }

            // Check if the selected date is not greater than today's date
            var selectedTimestamp = new Date(selectedDate).getTime();
            var todayTimestamp = new Date().setHours(0, 0, 0, 0);

            if (selectedTimestamp > todayTimestamp) {
                dateError.textContent = 'The selected date must not be greater than today\'s date.';
            } else {
                dateError.textContent = '';
            }
        }
    };
</script>

<script>
    window.onload = function () {
        var emailInput = document.getElementById('email');
        var emailError = document.getElementById('emailError');

        emailInput.addEventListener('input', validateEmail);

        function validateEmail() {
            var email = emailInput.value;

            // Validate email format
            var emailFormatRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailFormatRegex.test(email)) {
                emailError.textContent = 'Please enter a valid email address.';
                return;
            }

            // Additional email validation conditions (optional)
            var allowedDomains = ['gmail.com', 'example.in']; // Add more allowed domains as needed

            // Extract the domain from the email address
            var domain = email.split('@')[1];

            // Check if the domain is in the allowed list
            if (allowedDomains.length > 0 && allowedDomains.indexOf(domain) === -1) {
                emailError.textContent = 'Only email addresses with domains ' + allowedDomains.join(', ') + ' are allowed.';
                return;
            }

            emailError.textContent = '';
        }
    };
</script>


<script>
    document.getElementById('city').addEventListener('input', function () {
        validateCity();
    });

    function validateCity() {
        var cityInput = document.getElementById('city');
        var cityError = document.getElementById('cityError');

        var cityRegex = /^[A-Za-z]+$/;

        if (!cityRegex.test(cityInput.value)) {
            cityError.textContent = "City should contain only letters.";
        } else if (isAllSameLetters(cityInput.value)) {
            cityError.textContent = "City should not have all the same letters.";
        } else {
            cityError.textContent = "";
        }
    }

    function isAllSameLetters(city) {
        // Check if all letters in the city are the same
        return /^([A-Za-z])\1+$/.test(city);
    }

    function validateForm() {
        validateCity(); // Run city validation when submitting the form

        // Additional form validation logic goes here

        // Return true to allow form submission, false to prevent it
        return document.getElementById('cityError').textContent === "";
    }
</script>
<script>
    document.getElementById('pincode').addEventListener('input', function () {
        validatePincode();
    });

    function validatePincode() {
        var pincodeInput = document.getElementById('pincode');
        var pincodeError = document.getElementById('pincodeError');

        // Regular expression for a valid Kerala pincode (6 digits starting with 6)
        var pincodeRegex = /^6\d{5}$/;

        if (!pincodeRegex.test(pincodeInput.value)) {
            pincodeError.textContent = "Please enter a valid Kerala pincode starting with 6 and having 6 digits.";
        } else {
            pincodeError.textContent = "";
        }
    }

    function validateForm() {
        validatePincode(); // Run pincode validation when submitting the form

        // Additional form validation logic goes here

        // Return true to allow form submission, false to prevent it
        return document.getElementById('pincodeError').textContent === "";
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
<!DOCTYPE html>

<?php
include "config.php";
  //  include "o.php";
   include "orphanage_sidebar.php";
  ?>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $photoPath = "."; 


    // Handle file upload
    $targetDirectory = "imageupload/";
    $targetFile = $targetDirectory . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    // if (file_exists($targetFile)) {
    //     $uploadOk = 0;
    // }

    // // Check file size
    // if ($_FILES["photo"]["size"] > 500000) {
    //     $uploadOk = 0;
    // }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
            $photoPath = $targetFile;
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit; // Exit the script if there's an error
        }
    }$user=$_SESSION["username"];

    // Insert data into the database
    $result = mysqli_query($con, "INSERT INTO `student`(`firstname`, `lastname`, `age`, `gender`,`orpanage_id`, `photo`) VALUES ('$first', '$lastname', '$age', '$gender','$user', '$photoPath')") or die(mysqli_error($con));

    // if ($result) {
    //     echo "Data inserted successfully";
    //     //location
    //     // $script = "<script> window.location = 'student_view`.php';</script>";
    // } else {
    //     echo "Error inserting data";
    // }
}
?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
 
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  
 
</head>

    <div class="main-panel">
          <div class="content-wrapper">
             <div class="row"> 
               <div class="col-6 grid-margin stretch-card"> 
                 <div class="card"> 
                  <div class="card-body"> 
                  

                  <div class="container-scroller">
                    <!-- <form action="add_student.php" method="post"> -->
                    <form action="add_student3.php" method="post" enctype="multipart/form-data">
  
   
    <div class="form-group">
        <label for="firstName">First Name</label>
        <input type="text" id="firstName" name ="firstName" class="form-control">
        <span id="firstNameError" style="color: red;"></span>
    </div>

    <!-- Last Name Form Group -->
    <div class="form-group">
        <label for="lastName">Last Name</label>
        <input type="text" id="lastName" name = "lastName" class="form-control">
        <span id="lastNameError" style="color: red;"></span>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // First Name Validation
            document.getElementById('firstName').addEventListener('input', function() {
                var nameInput = this.value;
                var nameError = document.getElementById('firstNameError');
                var regex = /^[A-Z][a-zA-Z\s]*$/;

                if (!regex.test(nameInput)) {
                    nameError.textContent = "Name must start with a capital letter and contain only letters and spaces.";
                } else {
                    nameError.textContent = "";
                }
            });

            // Last Name Validation
            document.getElementById('lastName').addEventListener('input', function() {
                var nameInput = this.value;
                var nameError = document.getElementById('lastNameError');
                var regex = /^[A-Z][a-zA-Z\s]*$/;

                if (!regex.test(nameInput)) {
                    nameError.textContent = "Name must start with a capital letter and contain only letters and spaces.";
                } else {
                    nameError.textContent = "";
                }
            });
        });
    </script>
		
   
    




<div class="form-group">
    <label for="dob">Date of birth</label>
    <input type="date" class="form-control" id="dob" name="dob" required>
    <span id="dobError" style="color: red;"></span>
</div>


<div class="form-group">
        <label for="age">Age</label>
        <input type="text" class="form-control" id="age" name="age" required>
        <span id="ageError" style="color: red;"></span>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('age').addEventListener('input', function() {
                var ageInput = this.value;
                var ageError = document.getElementById('ageError');

                // Conditions
                var isNumeric = !isNaN(ageInput);
                var isPositive = ageInput > 0;
                var isInteger = Number.isInteger(parseFloat(ageInput));
                var hasNoLeadingZeros = ageInput === '' || ageInput[0] !== '0';
                var isInRange = (ageInput >= 18 && ageInput <= 99); // Adjust the range as needed

                if (!isNumeric) {
                    ageError.textContent = "Age must be a numerical value.";
                } else if (!isPositive) {
                    ageError.textContent = "Age must be a positive number.";
                } else if (!isInteger) {
                    ageError.textContent = "Age must be a whole number.";
                } else if (!hasNoLeadingZeros) {
                    ageError.textContent = "Age cannot have leading zeros.";
                
                } else {
                    ageError.textContent = "";
                }
            });
        });
    </script>
<div class="form-group">
    <!-- <label for="age">Age</label>
    <input type="text" class="form-control" id="age" name="age" readonly>
</div> -->

<script>
    // Function to calculate age based on the selected date of birth
    function calculateAge() {
        // Get the selected date of birth
        var dob = document.getElementById("dob").value;

        // Calculate age
        var today = new Date();
        var birthDate = new Date(dob);
        var age = today.getFullYear() - birthDate.getFullYear();

        // Adjust age if the birthday hasn't occurred yet this year
        if (today.getMonth() < birthDate.getMonth() || (today.getMonth() === birthDate.getMonth() && today.getDate() < birthDate.getDate())) {
            age--;
        }

        // Display the calculated age in the age input field
        document.getElementById("age").value = age;
    }

    // Attach the calculateAge function to the change event of the date of birth input
    document.getElementById("dob").addEventListener("change", calculateAge);
</script>


  <div class="form-group">
    <label for="exampleInputGender">Gender</label>
    <select class="form-control" id="exampleInputGender" name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
</div>


<div class="form-group">
        <label for="photo">Upload Photo</label>
        <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required>
        <span id="photoError" style="color: red;"></span>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('photo').addEventListener('change', function() {
                var photoInput = this;
                var photoError = document.getElementById('photoError');

                // Get the selected file
                var selectedFile = photoInput.files[0];

                // Check if a file is selected
                if (!selectedFile) {
                    photoError.textContent = "Please select a photo.";
                } else {
                    // Check file type (only image files allowed)
                    var allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
                    if (allowedTypes.indexOf(selectedFile.type) === -1) {
                        photoError.textContent = "Invalid file type. Please select a valid image file (JPEG, PNG, or GIF).";
                    } else {
                        // You can also check file size if needed
                        // var maxSizeInBytes = 5 * 1024 * 1024; // 5 MB
                        // if (selectedFile.size > maxSizeInBytes) {
                        //     photoError.textContent = "File size exceeds the allowed limit (5 MB).";
                        // } else {
                            photoError.textContent = "";
                        // }
                    }
                }
            });
        });
    </script>

  <!-- <button type="submit" class="btn btn-gradient-primary me-2" name="submit"><a href="view_student3.php">Add</a></button> -->
  <!-- <button type="submit" class="btn btn-gradient-primary me-2" name="submit">Submit</button> -->
  <button type="submit" class="btn btn-gradient-primary me-2" name="submit" id="submitButton">Submit</button>
  <button class="btn btn-light">Cancel</button>
</form>



                    <!-- </form> -->
                  </div>
                </div>
              </div>                        
              </div>                        





<body>

<!-- <button type="submit" class="btn btn-gradient-primary me-2" name="submit" id="submitButton">Submit</button> -->

<!-- <script>
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
</script> -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('submitButton').addEventListener('click', function (event) {
            // Check if all form fields are filled
            var isFormValid = validateForm();

            // If the form is not valid, prevent form submission
            if (!isFormValid) {
                event.preventDefault();
            } else {
                // If the form is valid, show SweetAlert
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Student added successfully',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });

        // Function to validate the form
        function validateForm() {
            var inputs = document.querySelectorAll('form input[type="text"], form textarea');
            var isValid = true;

            // Remove existing error messages and styling
            inputs.forEach(function (input) {
                input.style.border = '';
                var errorMessage = input.parentNode.querySelector('.error-message');
                if (errorMessage) {
                    input.parentNode.removeChild(errorMessage);
                }
            });

            // Validate each input field
            inputs.forEach(function (input) {
                if (input.value.trim() === '') {
                    isValid = false;

                    // Add a message next to the empty field
                    var errorMessage = document.createElement('span');
                    errorMessage.textContent = 'Please fill this';
                    errorMessage.style.color = 'red';
                    errorMessage.style.marginLeft = '10px';
                    errorMessage.classList.add('error-message');

                    // Append the error message to the parent element of the input
                    input.parentNode.appendChild(errorMessage);

                    // Add red border to indicate the error
                    input.style.border = '1px solid red';
                }
            });

            return isValid;
        }
    });
</script>


</body>
</html>




        
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



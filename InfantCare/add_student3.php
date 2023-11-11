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



                    



                    <!-- <form action="add_student.php" method="post"> -->
                    <form action="add_student3.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputUsername1">First Name</label>
   
    <input type="text"  class="form-control" id="firstname" name="firstname" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
   
    <input type="text" class="form-control" id="lastname" name="lastname" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Age</label>

    <input type="text" class="form-control" id="age" name="age" required>
  </div>

  <div class="form-group">
    <label for="exampleInputGender">Gender</label>
    <select class="form-control" id="exampleInputGender" name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
</div>


  <div class="form-group">
    <label for="exampleInputConfirmPassword1">upload photo</label>
    <!-- <input type="text" class="form-control" id="exampleInputConfirmPassword1" name="gender" placeholder="Gender"> -->
    <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required>

  </div>



  <!-- <button type="submit" class="btn btn-gradient-primary me-2" name="submit"><a href="view_student3.php">Add</a></button> -->
  <button type="submit" class="btn btn-gradient-primary me-2" name="submit">Submit</button>
  <button class="btn btn-light">Cancel</button>
</form>



                    <!-- </form> -->
                  </div>
                </div>
              </div>                        










        
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




   


<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first = $_POST['firstname'];
    $lastname = $_POST['lastname'];
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

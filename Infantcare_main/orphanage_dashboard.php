<?php
include "config.php";
  //  include "o.php";
     include "orphanage_sidebar.php";
  ?>
  
                  <!-- <h4>WELCOME</h4> -->
                  <?php
include "config.php";

// Start the session
// session_start();

// Fetch existing sponsor data
if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
     echo $user;

    // Fetch existing sponsor data
    $sql = "SELECT * FROM orphanage WHERE o_email = '$user'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $id = $row['o_govtid'];
        $name = $row['o_name'];
        $date = $row['o_edate'];
        $email = $row['o_email'];
        $phone = $row['o_phone'];
        $district = $row['o_district'];
        $city = $row['o_city'];
        $pincode = $row['o_pincode'];
    } else {
        echo "Orphanage not found.";
        $con->close();
        exit();
    }
} else {
    echo "Orphanage ID not provided.";
    $con->close();
    exit();
}

// Update the data if the form is submitted
if (isset($_POST['update'])) {
    $orphanage_name = $_POST["orphanage_name"];
    $date = $_POST["date"];
    $phone = $_POST["phone"];
    $district = $_POST["district"];
    $city = $_POST["city"];
    $pincode = $_POST["pincode"];

    // Update the data in the database
    $update_query = "UPDATE orphanage SET
                        o_name = '$orphanage_name',
                        o_edate = '$date',
                        o_phone = '$phone',
                        o_district = '$district',
                        o_city = '$city',
                        o_pincode = '$pincode'
                    WHERE o_email = '$email'";

    $result = $con->query($update_query);

    if ($result) {
        // Data updated successfully
        echo "Data updated successfully!";
        // Optionally, you can redirect to another page after updating
        // header("Location: success_page.php");
    } else {
        // Error updating data
        echo "Error updating data: " . $con->error;
    }
}
?>

<!-- HTML Form -->
<!-- <form action="" method="post"> -->
    <!-- Input fields for updating data -->
    <!-- <label for="orphanage_name">Orphanage Name:</label>
    <input type="text" name="orphanage_name" value="<?php echo $name; ?>"><br>

    <label for="date">Establishment Date:</label>
    <input type="date" name="date" value="<?php echo $date; ?>"><br>

    <label for="phone">Phone:</label>
    <input type="text" name="phone" value="<?php echo $phone; ?>"><br>

    <label for="district">District:</label>
    <input type="text" name="district" value="<?php echo $district; ?>"><br>

    <label for="city">City:</label>
    <input type="text" name="city" value="<?php echo $city; ?>"><br>

    <label for="pincode">Pincode:</label>
    <input type="text" name="pincode" value="<?php echo $pincode; ?>"><br>

    <button type="submit" name="update">Update Data</button> -->
<!-- </form> -->



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



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  
 
</head>

    <!-- <div class="main-panel"> -->
          <!-- <div class="content-wrapper">  -->
             <!-- <div class="row">  -->
               <!-- <div class="col-6 grid-margin stretch-card">  -->
                 <div class="card"> 
                  <!-- <div class="card-body">  -->
                  

                  <!-- <div class="container-scroller"> -->

                  <body style="font-family: Arial, sans-serif; background-color: #f4f4f4;">

<div style="max-width: 2500px; margin: 90px auto; background-color: #fff; padding: 20px; border-radius: 1px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

    <h2 style="text-align: center; color: #333;">.................Orphanage profile...............</h2>


    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .main-panel {
            /* Add your styles for the main-panel class here */
            width: 300px;
            height: 200px;
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            text-align: center;
            padding: 20px;
        }

        .form-container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>


           <form action="" method="POST" class="forms-sample">
                    <input type="hidden" name="id" value="<?php echo $email; ?>">
                    <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="orphanage_name" id="orphanage_name" class="form-control" value="<?php echo $name; ?>" required>
                    </div>

                     <div class="form-group">
                    <label for="name">ID</label>
                    <input type="text" name="id" class="form-control" value="<?php echo $id; ?>" required>
                    </div>

                    <div class="form-group">
                    <label for="name">date</label>
                    <input type="date" name="date" class="form-control" value="<?php echo $date; ?>" required>
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
                    <label for="name">District</label>
                    <input type="text" name="district" class="form-control" value="<?php echo $district ?>" required>
                    </div>


                    <div class="form-group">
                    <label for="city">city</label>
                    <input type="text" name="aadhar" class="form-control" value="<?php echo $city; ?>" required><br>
                    </div>

                    <div class="form-group">
                    <label for="pincode">Pincode</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $pincode; ?>" required>
                    </div>

                    <!-- <div class="form-group">
                    <label for="password">password</label>
                    <input type="text" name="password" class="form-control" value="<?php echo $password; ?>" required>
                    </div> -->


                    <input type="submit" name="update" value="Update" class="btn btn-success btn-sm">

                    
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

    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  </body>
</html>
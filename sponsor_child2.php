<?php
include "config.php";
// include "header.php"
?>
<?php
//  include "sponsor_sidebar2.php";?>
<?php

// Check if the user is logged in
if (isset($_GET['s_sponsor_id'])) { // Check if ID is provided in the URL
    $id = $_GET['s_sponsor_id'];

    // Fetch existing volunteer data
    $sql = "SELECT * FROM sponsor WHERE s_sponsor_id = '$id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['s_name'];
    $email = $row['s_email'];
    $phone = $row['s_phone'];
    $aadhar = $row['s_aadhar'];
    $district = $row['district'];
    $gender = $row['gender'];
    $marital = $row['marital'];
	// $dis = $row['s_district'];
    } else {
        echo "sponsornot found.";
        $con->close();
        exit();
    }
} else {
    echo "ID not provided.";
    $con->close();
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
       .card {
    max-width: 900px;
    margin: 50px auto;
    border: 1px solid #ccc;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
}

.card-header {
    background-color: #5bc1ac;
    color: white;
    text-align: center;
    padding: 15px;
    border-bottom: 2px solid #0056b3; /* Add a border at the bottom */
}

.card-body {
    padding: 20px;
    font-size: 20px;
    line-height: 1.6;
}

.card-body p {
    margin-bottom: 15px;
}

.card-footer {
    background-color: #5bc1ac;
    border-top: 1px solid #ccc;
    padding: 15px;
    text-align: center;
}

.card-footer a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease; /* Add a smooth transition effect for the link color */
}

.card-footer a:hover {
    color: #0056b3; /* Change the link color on hover */
}


        .confirm-button {
            margin-top: 20px;
            text-align: center;
        }

        .confirm-button button {
            background-color: #5bc1ac;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
    </style>
</head>
<body>

    <div class="card">
        <div class="card-header">
            Your Details click below to continue application
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h5 class="mb-0">  Name  : </h5>
                </div>
                <div class="col-sm-9 text-secondary">
                    <?php echo $name; ?>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h5 class="mb-0">Email   :</h5>
                </div>
                <div class="col-sm-9 text-secondary">
                    <?php echo $email; ?>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h5 class="mb-0">Phone   :</h5>
                </div>
                <div class="col-sm-9 text-secondary">
                    <?php echo $phone; ?>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h5 class="mb-0">Aadhar   :</h5>
                </div>
                <div class="col-sm-9 text-secondary">
                    <?php echo $aadhar; ?>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h5 class="mb-0">District   :</h5>
                </div>
                <div class="col-sm-9 text-secondary">
                    <?php echo $district; ?>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h5 class="mb-0">Gender   :</h5>
                </div>
                <div class="col-sm-9 text-secondary">
                    <?php echo $gender; ?>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h5 class="mb-0">Marital Status   :</h5>
                </div>
                <div class="col-sm-9 text-secondary">
                    <?php echo $marital; ?>
                </div>
            </div>
            
            <!-- Add more details as needed -->

            <div class="confirm-button">
                <button onclick="confirmApplication()">Confirm Application</button>
                <br><br>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                View Application Status
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Application Status</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- /////////////////Application Status /////////////////////  -->
                        <?php
                            $sql2 = "SELECT * FROM `c` WHERE `s_sponsor_id` = $id";
                            $result2 = $con->query($sql2);
                            if ($result2->num_rows > 0) {
                                $row2 = $result2->fetch_assoc();
                                $st_app = $row2['status'];
                                echo $st_app;
                            }
                        ?>
                        
                        <!-- /////////////////Application Status End /////////////////////  -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                </div>
            <form action="sponsor_sidebar.php" method="post">
            <br>      <br>
                                   <button class="btn btn-outline-primary" type="submit">Back</button>
                                    </form>
                                    </div>
        </div>
    </div>
   
   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // function confirmApplication() {
        //     // Add your logic to confirm the application
        //     alert("Application confirmed!");
        //     // You can redirect the user or perform any other action after confirmation
        // }
    </script>
    <script>
    function confirmApplication() {
        document.getElementById('confirmForm').submit();
    }
</script>


<!-- <form id="confirmForm" action="confirm_application.php" method="POST" style="display: none;"> -->
<form id="confirmForm" action="" method="POST" style="display: none;">

    <input type="hidden" name="s_sponsor_id" value="<?php echo $id; ?>">
    <input type="hidden" name="s_name" value="<?php echo $name; ?>">
    <input type="hidden" name="s_email" value="<?php echo $email; ?>">
    <input type="hidden" name="s_phone" value="<?php echo $phone; ?>">
    <input type="hidden" name="s_aadhar" value="<?php echo $aadhar; ?>">
    <input type="hidden" name="district" value="<?php echo $district; ?>">
</form>

</body>
</html>

<html>
    <head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
</html>


<?php
include "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sponsor_id = mysqli_real_escape_string($con, $_POST['s_sponsor_id']);
    $s_name = mysqli_real_escape_string($con, $_POST['s_name']);
    $s_email = mysqli_real_escape_string($con, $_POST['s_email']);
    $s_phone = mysqli_real_escape_string($con, $_POST['s_phone']);
    $s_aadhar = mysqli_real_escape_string($con, $_POST['s_aadhar']);
    $district = mysqli_real_escape_string($con, $_POST['district']);

    // Check if the data already exists in the new table
    $checkQuery = "SELECT * FROM `c` WHERE s_sponsor_id = '$sponsor_id'";
    $checkResult = mysqli_query($con, $checkQuery);

    if ($checkResult->num_rows === 0) {
        // Data does not exist, insert into the new table 'c'
        $insertQuery = "INSERT INTO `c`(`s_sponsor_id`, `s_name`, `s_email`, `s_phone`, `s_aadhar`, `district`,`status`) VALUES ('$sponsor_id', '$s_name', '$s_email', '$s_phone', '$s_aadhar','$district','pending')";
        $insertResult = mysqli_query($con, $insertQuery);
        $token = bin2hex(random_bytes(16));
        $insertQuery2 ="INSERT INTO `sponsor_permission`(`sponsor_id`, `token`, `is_approved`) VALUES ('$sponsor_id',' $token ','0')" ;
        $insertResult2 = mysqli_query($con, $insertQuery2);
        if ($insertResult) {
            
            // echo 'Application confirmed check your mail for further proceeding.';
            echo '<script>
            Swal.fire({
                title: "Great job!",
                text: "Application confirmed check your mail for further proceeding.",
                icon: "success"
            });
          </script>';
        } else {
            // echo 'Error confirming application and inserting data.';
            echo '<script>
            Swal.fire({
                
                
                title: "Error",
                text: "There was an error confirming the application and inserting data.",
                icon: "error"
            });
          </script>';
        }
    } else {
        // echo 'Already applied. Check your mail';
        echo '<script>
        Swal.fire({
            title: "Error",
            text: "Already applied. Check your mail.",
            icon: "error"
        });
      </script>';
    }
} else {
    // echo 'Invalid request.';
}
?>



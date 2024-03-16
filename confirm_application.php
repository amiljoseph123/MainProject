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

    // Check if the data already exists in the new table
    $checkQuery = "SELECT * FROM `c` WHERE s_sponsor_id = '$sponsor_id'";
    $checkResult = mysqli_query($con, $checkQuery);

    if ($checkResult->num_rows === 0) {
        // Data does not exist, insert into the new table 'c'
        $insertQuery = "INSERT INTO `c`(`s_sponsor_id`, `s_name`, `s_email`, `s_phone`, `s_aadhar`,`status`) VALUES ('$sponsor_id', '$s_name', '$s_email', '$s_phone', '$s_aadhar','pending')";
        $insertResult = mysqli_query($con, $insertQuery);

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
    echo 'Invalid request.';
}
?>

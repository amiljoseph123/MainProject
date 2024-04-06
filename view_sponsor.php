<?php
// Include necessary files and start session if required
session_start();
include('config.php');
include('header.php');

// Check if sponsor ID is provided in the URL
if (isset($_GET['sponsor_id'])) {
    $s_sponsor_id = $_GET['sponsor_id'];
echo $s_sponsor_id;
    // Retrieve sponsor details from the database
    $sql = "SELECT * FROM sponsor WHERE s_sponsor_id  = '$s_sponsor_id'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $sponsor_details = mysqli_fetch_assoc($result);
        // Display sponsor details
        // You can use HTML to format and display the details
        echo "<h2>Sponsor Details</h2>";
        echo "Name: " . $sponsor_details['s_name'] . "<br>";
        echo "Email: " . $sponsor_details['s_email'] . "<br>";
        echo "Phone: " . $sponsor_details['s_phone'] . "<br>";
        echo "Aadhar: " . $sponsor_details['s_aadhar'] . "<br>";

        // Add more details as needed
    } else {
        echo "Sponsor not found.";
    }
} else {
    echo "Sponsor ID not provided.";
}

// Include footer or any additional code as needed
?>

<?php
session_start(); // Start the session
require_once 'config.php';
require_once 'phpqrcode/qrlib.php';

$path = '../QRCODE/images/'; // Adjusted path with correct directory separator
$qrimage = time() . ".png";

if (isset($_POST['sbt-btn'])) {
    $category = $_POST['category'];
    $item = $_POST['stationeryItem'];
    $district = $_POST['district'];

    // Check if "username" session variable is set
    if (isset($_SESSION['username'])) {
        $user = $_SESSION['username']; // Adjust according to your session variable name
        $sqlqw = "SELECT `s_sponsor_id` FROM `sponsor` WHERE `s_email` = '$user'";
        $resultqw = mysqli_query($con, $sqlqw);
        $rowqw = mysqli_fetch_assoc($resultqw);
        $s_sponsor_id = $rowqw['s_sponsor_id'];
        // Debugging: Output the value of sponsor ID to check if it's set correctly
        var_dump($s_sponsor_id);

        // Generate QR code data including sponsor details
        $sponsor_details = "Sponsor ID: $s_sponsor_id\n";
        $qr_data = "$sponsor_details Category: $category\nItem: $item\nDistrict: $district";

        // Add error handling
        $query = mysqli_query($con, "INSERT INTO sponsored_itemsqr (s_sponsor_id, category, item, district, qrimage) VALUES ('$s_sponsor_id', '$category', '$item', '$district', '$qrimage')");

        if ($query) {
            echo "<script>alert('Data saved successfully');</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
        }
    } else {
        // Handle case where "username" session variable is not set
        echo "Session variable 'username' is not set.";
    }
}

// Assuming you've already connected to your database
$id = 50; // Assuming $id is an integer
// Fetch the qrimage data
$query = "SELECT qrimage FROM sponsored_itemsqr WHERE id = $id";
$result = $con->query($query);

if ($result) {
    // Check if the query was successful
    $row = $result->fetch_assoc(); // Fetch a row as an associative array
    $qrimageData = $row['qrimage']; // Access the 'qrimage' column from the row
    // Output the qrimage data within an <img> tag
    echo '<img src="' . $qrimageData . '" />';
} else {
    // Handle the case where the query failed
    echo "Error: " . $con->error;
}




// // Fetch the qrimage data
// $qrimageData = $stmt->fetchColumn();

// // Output the qrimage data within an <img> tag
// echo '<img src="' . $qrimageData . '" />';
// // Generate and display QR code
// QRcode::png($qr_data, $path . $qrimage, 'H', 4, 4);
// echo "<img src='" . $path . $qrimage . "'>";
?>

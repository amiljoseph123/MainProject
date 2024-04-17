<?php
session_start(); // Start the session
require_once 'config.php';
require_once 'phpqrcode/qrlib.php';

$path = '../qrcode/images/'; // Adjusted path with correct directory separator
$qrimage = time() . ".png";

if (isset($_POST['sbt-btn'])) {
    $category = $_POST['category'];
    $item1 = $_POST['stationeryItem'];
    $item2 = $_POST['gadgetsItem'];

    $quantity = $_POST['quantity'];
    $district = $_POST['district'];
    $place = $_POST['place'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];

    // Check if "username" session variable is set
    if (isset($_SESSION['username'])) {
        // $user = $_SESSION['usernamImagereatee']; // Adjust according to your session variable name
        $user = $_SESSION['username'];
        $sqlqw = "SELECT `s_sponsor_id` FROM `sponsor` WHERE `s_email` = '$user'";
        $resultqw = mysqli_query($con, $sqlqw);
        $rowqw = mysqli_fetch_assoc($resultqw);
        $s_sponsor_id = $rowqw['s_sponsor_id'];
        // Debugging: Output the value of sponsor ID to check if it's set correctly
        var_dump($s_sponsor_id);

        // Generate QR code data including sponsor details
        $sponsor_details = "Sponsor ID: $s_sponsor_id\n";
        $qr_data = " Item Detiails\n ..Please Collect..\n\n Category: $category\nItem: $item1\nItem2: $item2\nquantity: $quantity\nDistrict: $district\ncity: $city\nplace: $place\npincode: $pincode";
        

        // Add error handling
        $query = mysqli_query($con, "INSERT INTO sponsored_itemsqr (s_sponsor_id, category, item,item2,quantity, district,place,city,pincode, qrimage,status) VALUES ('$s_sponsor_id', '$category', '$item1','$item2', '$quantity','$district','$place','$city','$pincode', '$qrimage','Pending')");

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

if ($result && $result->num_rows > 0) {
    // Check if the query was successful and if there are rows returned
    $row = $result->fetch_assoc(); // Fetch a row as an associative array
    $qrimageData = $row['qrimage']; // Access the 'qrimage' column from the row

    // Output the qrimage data within an <img> tag
    echo '<img src="' . $qrimageData . '" />';
} else {
    // Handle the case where the query failed or no rows were returned
    // echo "Error: QR image data not found.";
}

// Generate and display QR code
QRcode::png($qr_data, $path . $qrimage, 'H', 4, 4);
echo "<img src='" . $path . $qrimage . "'>";
?>

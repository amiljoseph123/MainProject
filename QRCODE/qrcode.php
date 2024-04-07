<?php
require_once 'config.php';
require_once 'phpqrcode/qrlib.php';

$path = 'images/';
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

        // Add error handling
        $query = mysqli_query($con, "INSERT INTO sponsored_itemsqr (s_sponsor_id, category, item,district ,qrimage) VALUES ('$s_sponsor_id', '$category', '$item','$district', '$qrimage')");

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

QRcode::png($qrimage, $path . $qrimage, 'H', 4, 4);
echo "<img src='" . $path . $qrimage . "'>";
?>

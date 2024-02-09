<?php
session_start();
require 'header.php';

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
}

include "config.php";

// Retrieve volunteer data based on the logged-in user's email
$email = $_SESSION['email'];
$result = mysqli_query($con, "SELECT * FROM `volunteer` WHERE `email`='$email'") or die("error");
if ($row = mysqli_fetch_assoc($result)) {
    // Display volunteer information
    echo "<h2>Volunteer Profile</h2>";
    echo "<p>Name: " . $row['name'] . "</p>";
    echo "<p>Email: " . $row['email'] . "</p>";
    echo "<p>Phone: " . $row['phone'] . "</p>";
    echo "<p>Aadhar Number: " . $row['aadhar'] . "</p>";
    echo "<p>District: " . $row['district'] . "</p>";
    // Add more fields as needed

    // You can also provide an option to edit or update the information
    echo "<a href='edit_profile.php'>Edit Profile</a>";
} else {
    echo "Volunteer not found.";
}

require 'footer.php';
?>

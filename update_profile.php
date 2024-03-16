<?php
session_start();
include "config.php";

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    // Retrieve more fields as needed

    // Update volunteer information in the database
    $email = $_SESSION['email'];
    $updateResult = mysqli_query($con, "UPDATE `volunteer` SET `name`='$name' WHERE `email`='$email'") or die("error");

    if ($updateResult) {
        echo "Profile updated successfully!";
    } else {
        echo "Error updating profile.";
    }
} else {
    echo "Invalid request.";
}
?>

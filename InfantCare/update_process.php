<?php
include "config.php"; // Include the database connection

$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$aadhar = $_POST['aadhar'];

// SQL query to update sponsor details
$sql = "UPDATE sponsor SET s_name='$name', s_phone='$phone', s_aadhar='$aadhar' WHERE s_email='$id'"; // Assuming 's_email' is the unique identifier

if ($con->query($sql) === TRUE) {
    echo "Sponsor details updated successfully!";
} else {
    echo "Error updating sponsor details: " . $con->error;
}

// Close the database connection after the operation
$con->close();
?>

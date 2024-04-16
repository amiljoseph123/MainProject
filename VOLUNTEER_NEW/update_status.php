<?php
session_start();
include('../config.php');

if (isset($_SESSION['username']) && isset($_POST['itemId'])) {
    $vol = $_SESSION['username'];
    $itemId = $_POST['itemId'];

    // Update status to 'collected' in the database
    $sql = "UPDATE `sponsored_itemsqr` SET `status` = 'collected' WHERE `id` = $itemId AND `status` = 'pending'";
    if ($con->query($sql) === TRUE && $con->affected_rows > 0) {
        // Redirect back to the page after status update
        header("Location: duty.php");
        exit();
    } else {
        echo 'Error updating status or status is already collected.';
    }
} else {
    echo 'Error: Invalid request.';
}
?>

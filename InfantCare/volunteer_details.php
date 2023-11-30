<?php
// volunteer_details.php

// require_once 'config.php';

// // Check if the ID parameter is set in the URL
// if (isset($_GET['id'])) {
//     // Sanitize the input to prevent SQL injection
//     $volunteer_id = mysqli_real_escape_string($con, $_GET['id']);

//     // Fetch details of the selected volunteer using the ID
//     $query = "SELECT * FROM `volunteer` WHERE id = '$volunteer_id'";
//     $result = mysqli_query($con, $query) or die("Error fetching data");

//     // Check if a matching record is found
//     if (mysqli_num_rows($result) > 0) {
//         // Fetch the volunteer's details
//         $volunteer_details = mysqli_fetch_assoc($result);

//         // Display the details as needed (e.g., echo $volunteer_details['column_name'])
//         // You can use these details to populate HTML elements or display them as required
//     } else {
//         echo "Volunteer not found";
//     }
// } else {
//     echo "No volunteer ID provided";
// }
?>

<?php
// Retrieve orphanage ID from URL
$orphanage_id = $_GET['id'];

if (isset($_POST['apply_button'])) {
    // Collect volunteer details
    $volunteer_name = $_POST['volunteer_name']; // Retrieve these values from your form
    $volunteer_email = $_POST['volunteer_email'];

    // Insert into volunteer_applications table
    $insert_query = "INSERT INTO volunteer_applications (orphanage_id, volunteer_name, volunteer_email, status) VALUES ('$orphanage_id', '$volunteer_name', '$volunteer_email', 'Pending')";
    
    // Execute query and handle errors if any

    // Redirect back to orphanage profile page after insertion
    header("Location: orphanage_profile.php?id=$orphanage_id");
    exit();
}
?>
<!-- Your HTML form to collect volunteer details -->
<form method="POST">
    <input type="text" name="volunteer_name" placeholder="Your Name">
    <input type="email" name="volunteer_email" placeholder="Your Email">
    <button type="submit" name="apply_button">Apply</button>
</form>


<?php
// Include your database configuration file or establish a database connection here
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['apply_button'])) {
    // Retrieve volunteer and orphanage details from the form
    $volunteer_id = $_POST['id']; 
    $orphanage_id = $_POST['o_email']; 

    // Insert the application into the vapplication table
    $insert_query = "INSERT INTO vapplication (volunteerid, orphanageid, status) VALUES ('$volunteer_id', '$email', 'pending')"; // Assuming 'pending' is the initial status
    
    // Execute the query
    if ($conn->query($insert_query) === TRUE) {
        // Application successfully added to the vapplication table
        echo "Application submitted successfully!";
    } else {
        // Error occurred while inserting application
        echo "Error: " . $insert_query . "<br>" . $conn->error;
    }
} else {
    // Redirect to an error page or handle the scenario where form data is not submitted properly
    echo "Form data not submitted.";
}

?>

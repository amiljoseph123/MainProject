<?php
// Print out all parameters passed in the URL for debugging
echo "Parameters in URL: ";
var_dump($_GET);

// Assuming you have established your database connection
include 'config.php';

// Check if the "id" parameter is set in the URL
if(isset($_GET['id'])) {
    // Retrieve the item_id from the URL parameter
    $id = $_GET['id'];

    // Perform a database query to retrieve the location of the item
    $query = "SELECT location FROM cloth WHERE id = $id";

    // Execute the query
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch the location
        $row = mysqli_fetch_assoc($result);
        $item_location = $row['location'];

        // Output the item's location
        echo "The location of the item with ID $id is: $item_location";
    } else {
        // Handle the case where the query fails or no matching item found
        echo "Error: Unable to retrieve item location or item not found.";
    }
} else {
    // Handle the case where "id" parameter is not set
    echo "Error: Item ID parameter is missing.";
}

// Close the database connection
mysqli_close($con);
?>

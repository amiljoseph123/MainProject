<?php
include "config.php";
// include "config.php";


//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         $gender = $_POST['gender'];
//         $age = $_POST['age'];
//         $quantity2 = $_POST['quantity2'];
//         $district2 = $_POST['district'];
//         $pincode = $_POST['pincode'];
//         $city = $_POST['city'];
//         $place= $_POST['place'];
       
    

//     $query = "INSERT INTO `cloth` (`id`, `gender`, `age`, `quantity`,`district`,`pin`,`city`,`place`,`status`) 
//               VALUES (default, '$gender', '$age', '$quantity2','$district2','$pincode','$city','$place','pending')";

//     mysqli_query($con, $query) or die(mysqli_error($con));
//     echo "Record inserted successfully!";
//     header("Location: sponsor_items.php");
//     exit(); 
    

// }
// else {
//     die("Error: " . mysqli_error($con));
// }

?>  


<?php
include "config.php";
session_start(); // Ensure session is started

// Debugging: Output the value of sponsor ID to check if it's set correctly
var_dump($_SESSION['s_sponsor_id']);

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $quantity2 = $_POST['quantity2'];
    $district2 = $_POST['district'];
    $pincode = $_POST['pincode'];
    $city = $_POST['city'];
    $place = $_POST['place'];
    
    // Assuming you have the sponsor ID available in a session variable
    $sponsor_id = $_SESSION['s_sponsor_id']; // Adjust this according to your session variable name
    
    // Debugging: Output the value of sponsor ID to check if it's set correctly
    var_dump($sponsor_id);

    // Insert data into the cloth table including the sponsor ID
    $query = "INSERT INTO `cloth` (`id`, `sponsor_id`, `gender`, `age`, `quantity`, `district`, `pin`, `city`, `place`, `status`) 
              VALUES (default, '$sponsor_id', '$gender', '$age', '$quantity2', '$district2', '$pincode', '$city', '$place', 'pending')";

    // Execute the query
    mysqli_query($con, $query) or die(mysqli_error($con));

    // Redirect to a different page after insertion
    header("Location: sponsor_items.php");
    exit(); 
} else {
    // If the request method is not POST, display an error message
    die("Error: Invalid request method");
}
?>

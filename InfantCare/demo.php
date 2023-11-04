<?php
// require_once 'config.php';
// $result = mysqli_query($con, "SELECT * FROM `orphanage` ") or die("error");
?>


<?php 

//   session_start();
//    //echo $_SESSION["username"];
//   if (isset($_SESSION['username'])) {
//       // User is logged in
//       echo "Welcome, " . $_SESSION['username'];}
//       ?>

<?php

// $email = $_SESSION['username'];

// // Prepare and execute the SQL query
// $sql = "SELECT o_id FROM login WHERE email = '$email'";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // Assuming there is only one row for a given email
//     $row = $result->fetch_assoc();
//     $o_id = $row['o_id'];
    
//     // Use $o_id as needed
// } else {
//     echo "No results found";
// }

// // Close the database connection
// $conn->close();
?>
<?php 
    require_once 'config.php';

    $email = $_SESSION['username'];

    // Prepare and execute the SQL query
    $sql = "SELECT o_id FROM orphanage WHERE email = '$email";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $o_id = $row['o_id'];
        echo "o_id: " . $o_id; // Use $o_id as needed
    } else {
        echo "No results found";
    }
    

    // Close the database connection
    $con->close();

?>

<?php
include "config.php";
// include "config.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $quantity2 = $_POST['quantity2'];
        $district2 = $_POST['district'];
       
    

    $query = "INSERT INTO `cloth` (`id`, `gender`, `age`, `quantity`,`district`) 
              VALUES (default, '$gender', '$age', '$quantity2','$district2')";

    mysqli_query($con, $query) or die(mysqli_error($con));
    echo "Record inserted successfully!";
    header("Location: sponsor_items.php");
    exit(); 
    

}
else {
    die("Error: " . mysqli_error($con));
}

?>  

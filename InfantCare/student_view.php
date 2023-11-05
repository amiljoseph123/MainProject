<?php
include "config.php";
?>

<?php

require 'header.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orphanage Details</title>
    <style>
        .card {
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 300px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .title {
            /* font-weight: bold; */
            margin-bottom: 5px;
        }

        p {
            /* margin-bottom: 5px; */
        }
    </style>
</head>
<body>

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $id = $_POST["id"]; // Get the ID from the form
// }

// $sql = "SELECT * FROM student WHERE orpnanage_id = ".$_SESSION['username'];
// $result = $con->query($sql);

// $sql = "SELECT * FROM student WHERE orpanage_id = '".$_SESSION['username']."'";
// $result = $con->query($sql);



// if ($result->num_rows > 0) {
//     // Display user details
//     $row = $result->fetch_assoc();
    
//     $first = $row["firstname"];
//     $lastname = $row["lastname"];
//     $age = $row["age"];
//     $gender = $row["gender"];
   
    ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET["id"];

    $sql = "SELECT * FROM student WHERE id = '$id' AND orpanage_id = '".$_SESSION['username']."'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $first = $row["firstname"];
        $lastname = $row["lastname"];
        $age = $row["age"];
        $gender = $row["gender"];
        $photo = $row["photo"];
?>
       
<?php
    } else {
        echo "User not found";
    }
} else {
    echo "Invalid request";
}

$con->close();
?>




    <div class="card">
        <h6>Firstname : <?php echo $first; ?></h6>
        <!-- <p class="title"><?php echo $email; ?></p> -->
        <h6> <p>Last Name : <?php echo $lastname; ?></p></h6>
        <h2> <p>Age : <?php echo $age; ?></p></h2>
        <h2> <p>Gender : <?php echo $gender; ?></p></h2>
        <h2> <p>photo : <?php echo $photo; ?></p></h2>
</div>
    
    <?php
// } else {
//     echo "User not found";
// }

// $con->close();
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php

// require 'footer.php';
?> 
</body>
</html>

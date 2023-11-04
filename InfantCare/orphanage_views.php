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
            font-weight: bold;
            margin-bottom: 5px;
        }

        p {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"]; // Get the ID from the form
}

$sql = "SELECT * FROM orphanage WHERE o_id = $id";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Display user details
    $row = $result->fetch_assoc();
    
    $name = $row["o_name"];
    $id = $row["o_id"];
    $email = $row["o_email"];
    $phone = $row["o_phone"];
    $district = $row["o_district"];
    $city = $row["o_city"];
    $pincode = $row["o_pincode"];
    ?>

    <div class="card">
        <h3><?php echo $name; ?></h3>
        <p class="title"><?php echo $email; ?></p>
        <p><?php echo $phone; ?></p>
        <p><?php echo $district; ?></p>
        <p><?php echo $city; ?></p>
        <p><?php echo $pincode; ?></p>
    </div>
    
    <?php
} else {
    echo "User not found";
}

$con->close();
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php

require 'footer.php';
?> 
</body>
</html>

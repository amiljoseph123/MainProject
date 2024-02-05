<?php
include "config.php";
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

        
    </style>

    <style>
        button {
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        /* Education button style */
        button.education {
            background-color: #4CAF50; /* Green */
        }

        /* Health button style */
        button.health {
            background-color: #f44336; /* Red */
        }
    </style>
</head>
<body>

<?php
// include "o.php";
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET["id"];
    echo $id;
    $sql = "SELECT * FROM volunteer WHERE id = '$id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $name = $row["name"];
        $email = $row["email"];
        
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
        <h6>Firstname : <?php echo $name; ?></h6>
        <!-- <p class="title"><?php echo $email; ?></p> -->
        
       
        <img src="<?php echo $photo; ?>">
        <br><br>

        <!-- <button >Education </button><br> -->
        <!-- <button>Health </button> -->

        <!-- <div class="card"> -->
    <!-- Your existing code here -->

</div>

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

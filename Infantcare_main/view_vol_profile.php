<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>volunteer Details</title>
    <style>
        .card {
            border: 1px solid #ccc;
            padding: 90px;
            max-width: 600px;
            margin: 60px auto;
            background-color: #fff;
            border-radius: 12px;
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

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET["id"];
    echo $id;
    $sql = "SELECT * FROM volunteer WHERE id = '$email'";
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
        <h3>name : <?php echo $name; ?></h3>
        
        <h3> <p>email : <?php echo $email; ?></p></h3>
        

        <!-- <button >Education </button><br> -->
        <!-- <button>Health </button> -->

        
    

    
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

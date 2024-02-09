<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Details</title>
    <style>
        .card {
            border: 1px solid #ccc;
            padding: 30px;
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

$name = $row["name"];
$email = $row["email"];

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
        <div class="card">
            <div class="title">Name:</div>
            <?php echo $name; ?>

            <div class="title">Email:</div>
            <?php echo $email; ?>
        </div>
    <?php
    } else {
        echo "User not found";
    }
} else {
    echo "Invalid request";
}

$con->close();
?>
</body>
</html>






    <div class="card">
        <h3>name : <?php echo $name; ?></h3>
        
        <h3> <p>email : <?php echo $email; ?></p></h3>
        

        
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Data</title>
    <!-- Add any additional styles or meta tags as needed -->
</head>
<body>
<?php

if (isset($_GET['id'])) {
    
    $volunteer_id = mysqli_real_escape_string($con, $_GET['id']);

    $result = mysqli_query($con, "SELECT * FROM `volunteer` WHERE id = '$volunteer_id'") or die("Error in query");

    if ($result->num_rows > 0) {
        echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Aadhar</th>
                <th>District</th>
                <th>Status</th>
            </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['aadhar']}</td>
                <td>{$row['district']}</td>
                <td>{$row['status']}</td>
            </tr>";
        }

        echo "</table>";
    } else {
        echo "No records found for ID: $volunteer_id";
    }

    if ($con) {
        $con->close();
    }
} else {
    echo "No ID parameter provided.";
}

?>

</body>
</html>

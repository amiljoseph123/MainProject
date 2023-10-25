
<?php
session_start(); // Start the session

include "config.php";

if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    // $sponsor_email = $user["email"];

    // Fetch existing sponsor data
    $sql = "SELECT * FROM sponsor WHERE s_email = '$user'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['s_name'];
        $email = $row['s_email'];
        $phone = $row['s_phone'];
        $aadhar = $row['s_aadhar'];
    } else {
        echo "Sponsor not found.";
        $con->close();
        exit();
    }
} else {
    echo "Sponsor ID not provided.";
    $con->close();
    exit();
}
?>

<?php
require 'header.php';
?> 




 
<!DOCTYPE html>
<html>
<head>
    <title>Update Sponsor Details</title>
</head>
<body><br>
    <h3 class="heading">Update your Details</h3>
    <form action="update_process.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $email; ?>">
    <label for="name">Name</label>
    <input type="text" name="name" value="<?php echo $name; ?>" required>

    <label for="email">Email</label>
    <input type="text" name="email" value="<?php echo $email; ?>" required>

    <label for="phone">Phone Number</label>
    <input type="text" name="phone" value="<?php echo $phone; ?>" required>

    <label for="aadhar">Aadhar Number</label>
    <input type="text" name="aadhar" value="<?php echo $aadhar; ?>" required><br>

    <input type="submit" name="update" value="Update">

</form>


 <!-- <style>
    form {
        max-width: 400px;
        margin: 0 auto;
        background-color: #f9f9f9;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label,
    input {
        display: block;
        margin-bottom: 10px;
       
    }

    input[type="text"] {
        width: calc(100% - 20px);
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;

        
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style> 




</body>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }

        .form-container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-container label,
        .form-container input {
            display: block;
            width: 50%;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .form-container input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-container input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 18px;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style> -->



<!-- 
    <style>
    form {
        max-width: 400px;
        margin: 0 auto;
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label,
    input {
        display: inline-block;
        vertical-align: middle;
    }

    label {
        width: 120px; /* Adjust the width as needed */
    }

    input[type="text"] {
        width: calc(100% - 120px); /* Adjust the width as needed */
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        display: block; /* Make the submit button full width */
        margin-top: 10px; /* Add some spacing between button and inputs */
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style> -->

<style>
    .heading{
        text-align:center;
        text-size-adjust: 10px;
    }
    form {
        max-width: 400px;
        margin: 0 auto;
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label,
    input {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"] {
        width: calc(100% - 20px);
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
<br><br><br><br><br><br><br><br><br>


</html> 


<?php
 require 'footer.php';
?> 
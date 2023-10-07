<?php

include "config.php";
?>



<!DOCTYPE html>
<html>
<head>
    <title>Update Sponsor Details</title>
</head>
<body>
    <h1>Update Sponsor Details</h1>

  <?php
    if (isset($_SESSION["username"])) {

        $user=$_SESSION["username"];
        $sponsor_email=$user["email"];
        // Fetch existing sponsor data
        $sql = "SELECT name, phone, aadhar FROM sponsors WHERE email = $sponsor_email";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $phone = $row['phone'];
            $aadhar = $row['aadhar'];
        } else {
            echo "Sponsor not found.";
            $conn->close();
            exit();
        }
    } else {
        echo "Sponsor ID not provided.";
        $conn->close();
        exit();
    }

    // Close the database connection
    $conn->close();
    ?>

    <form action="dsponsor.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $sponsor_email; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>" required><br>
        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" value="<?php echo $phone; ?>" required><br>
        <label for="aadhar">Aadhar Number:</label>
        <input type="text" name="aadhar" value="<?php echo $aadhar; ?>" required><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>



update_process.php
<?php
$id=$_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$aadhar = $_POST['aadhar'];

// SQL query to update sponsor details
$sql = "UPDATE sponsors SET name='$name', phone='$phone', aadhar='$aadhar' WHERE id=$id"; // You may need to adjust the WHERE clause based on your needs

if ($conn->query($sql) === TRUE) {
    echo "Sponsor details updated successfully!";
} else {
    echo "Error updating sponsor details: " . $conn->error;
}
?>
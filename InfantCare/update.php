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
    <form action="#" method="GET">
        <input type="hidden" name="id" value="<?php echo $s_email; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $s_name; ?>" required><br>
        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" value="<?php echo $s_phone; ?>" required><br>
        <label for="aadhar">Aadhar Number:</label>
        <input type="text" name="aadhar" value="<?php echo $s_aadhar; ?>" required><br>
        <input type="submit"name="submit" id="submit" value="Update">
    </form>
</body>
  <?php
    if (isset($_SESSION["submit"])) {

        $user=$_SESSION["username"];
        $sponsor_email=$user["email"];
        // Fetch existing sponsor data
        $sql = "SELECT s_name, s_phone, s_aadhar FROM sponsor WHERE s_email = $sponsor_email";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $phone = $row['phone'];
            $aadhar = $row['aadhar'];
        } 
        else {
            echo "Sponsor not found.";
            $conn->close();
            exit();
        }
    } 
    else {
        echo "Sponsor ID not provided.";
        $con->close();
        exit();
    }

    // Close the database connection
    $con->close();
    ?>
<!--
    <form action="#" method="POST">
        <input type="hidden" name="id" value="<?php echo $sponsor_email; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>" required><br>
        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" value="<?php echo $phone; ?>" required><br>
        <label for="aadhar">Aadhar Number:</label>
        <input type="text" name="aadhar" value="<?php echo $aadhar; ?>" required><br>
        <input type="submit"name="submit" id="submit" value="Update">
    </form>
</body>-->
</html>



<!-- update_process.php -->
<?php
$id=$_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$aadhar = $_POST['aadhar'];

// SQL query to update sponsor details
$sql = "UPDATE sponsor SET s_name='$name', s_phone='$phone', s_aadhar='$aadhar' WHERE s_id=$id"; // You may need to adjust the WHERE clause based on your needs

if ($con->query($sql) === TRUE) {
    echo "Sponsor details updated successfully!";
} else {
    echo "Error updating sponsor details: " . $con->error;
}
?>
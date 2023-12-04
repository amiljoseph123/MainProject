<?php
include "config.php";

$amount = $_POST['amount'];
$name = $_POST['name'];
$email = $_POST['email'];
$payment_id = $_POST['payment_id'];

$sql = "INSERT INTO donation3 (amount, name, email, payment_id) VALUES ('$amount', '$name', '$email', '$payment_id')";

if ($con->query($sql) === TRUE) {
 echo "Data inserted successfully";
} else {
 echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

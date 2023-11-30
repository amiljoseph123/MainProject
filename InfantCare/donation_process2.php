<?php
include 'config.php';

// Get the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $amount = $_POST["amount"];
    $razorpay_payment_id = $_POST["razorpay_payment_id"];
    $razorpay_order_id = $_POST["razorpay_order_id"];

    // Prepare and execute SQL insert statement
    $sql = "INSERT INTO donation2 (name, email, amount, razorpay_payment_id, razorpay_order_id)
    VALUES ('$name', '$email', '$amount', '$razorpay_payment_id', '$razorpay_order_id')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

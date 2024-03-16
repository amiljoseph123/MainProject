<?php
include('config.php');

$sender = $_POST['sender'];
$receiver = $_POST['receiver'];
$message = $_POST['message'];

$sql = "INSERT INTO messages (sender, receiver, message) VALUES ('$sender', '$receiver', '$message')";
$result = $conn->query($sql);

if ($result) {
    echo "Message sent successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

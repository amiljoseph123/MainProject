<?php
include "o.php"
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Application</title>
</head>
<body>
    <h2>View Application</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['apply'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            
            // Display the application information
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Message:</strong> $message</p>";
        }
    } else {
        echo "<p>No application submitted.</p>";
    }
    ?>
</body>
</html>

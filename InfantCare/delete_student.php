<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $student_id = $_POST["id"];

    $sql = "DELETE FROM student WHERE id = '$student_id' AND orpanage_id = '".$_SESSION['username']."'";
    if ($con->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $con->error;
    }
} else {
    echo "Invalid request";
}

$con->close();
?>

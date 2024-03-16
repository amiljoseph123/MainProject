<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $student_id = $_GET["id"];
    echo $student_id;
    $sql = "DELETE FROM student WHERE id = '$student_id'";
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

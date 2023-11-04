<?php
// require_once 'config.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
//     $student_id = $_POST["id"];

//     $sql = "DELETE FROM student WHERE id = '$student_id' AND orpanage_id = '".$_SESSION['username']."'";
//     if ($con->query($sql) === TRUE) {
//         echo "Record deleted successfully";
//     } else {
//         echo "Error deleting record: " . $con->error;
//     }
// } else {
//     echo "Invalid request";
// }

// $con->close();
?>
<?php
require_once 'config.php';

$sql = "SELECT id FROM student ORDER BY RAND() LIMIT 1";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $student_id = $row['id'];

    $delete_sql = "DELETE FROM student WHERE id = '$student_id' AND orpanage_id = '".$_SESSION['username']."'";
    if ($con->query($delete_sql) === TRUE) {
        echo "Record with ID $student_id deleted successfully";
    } else {
        echo "Error deleting record: " . $con->error;
    }
} else {
    echo "No students found";
}

$con->close();
?>

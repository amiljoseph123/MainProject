
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
// require 'header.php';
?> 

<?php
include('navbars/sponsor.php');
?>


<?php
// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }
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
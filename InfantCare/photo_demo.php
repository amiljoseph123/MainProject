<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>
    <form action="photo_demo.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" required>
        </div>
        <div>
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required>
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="text" id="age" name="age" required>
        </div>
        <div>
            <label for="gender">Gender:</label>
            <input type="text" id="gender" name="gender" required>
        </div>
        <div>
            <label for="photo">Student Photo:</label>
            <input type="file" id="photo" name="photo" accept="image/*" required>
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>


<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $photoPath = "."; 


    // Handle file upload
    $targetDirectory = "imageupload/";
    $targetFile = $targetDirectory . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["photo"]["size"] > 500000) {
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
            $photoPath = $targetFile;
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit; // Exit the script if there's an error
        }
    }$user=$_SESSION["username"];

    // Insert data into the database
    $result = mysqli_query($con, "INSERT INTO `student`(`firstname`, `lastname`, `age`, `gender`,`orpanage_id`, `photo`) VALUES ('$first', '$lastname', '$age', '$gender','$user', '$photoPath')") or die(mysqli_error($con));

    if ($result) {
        echo "Data inserted successfully";
        //location
        $script = "<script> window.location = 'student_view`.php';</script>";
    } else {
        echo "Error inserting data";
    }
}
?>

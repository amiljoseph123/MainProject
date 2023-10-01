
<?php
require 'header.php';
?> 

<?php
include "config.php";
if (isset($_POST["submit"])) {
    $name= $_POST["name"];
    $orphanageId= $_POST["orphanageId"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];

    $establishedDate= $_POST["establishedDate"];
    $district= $_POST["district"];
    $city = $_POST["city"];
    $pincode = $_POST["pincode"];

    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    
    
    
    if ($password == $confirmPassword) {
        $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);
        //$sql = "INSERT INTO `orphanage_reg`(`o_id`, `o_name`, `o_govtid`, `o_email`, `o_contact`, `o_date`, `o_district`, `o_city`, `o_pincode`, `o_password`, `o_confirmpassword`, `o_status`) VALUES ('$name','$orphanageId','$email','$mobile','$establishedDate','$district','$city','$pincode','$password','$confirmPassword')";
        $sql="INSERT INTO `orphanage_reg` (`o_name`, `o_govtid`, `o_email`, `o_contact`, `o_date`, `o_district`, `o_city`, `o_pincode`, `o_password`, `o_confirmpassword`, `o_status`) VALUES ('$name','$orphanageId','$email','$mobile','$establishedDate','$district','$city','$pincode','$password','$confirmPassword')";

        $result = mysqli_query($conn, $sql);
        // header("location:Login.php");
        $script = "<script> window.location = 'Login.php';</script>";
        echo $script;
    } else {
        echo "Password mismatch. Registration not successful.";
    }
}

?>
<?
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Error: " . mysqli_error($conn);
}
?>



    
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Page</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    .container1 {
        max-width: 500px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }
    .form-group input, .form-group select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .form-group button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .error-message {
        color: #ff0000;
        font-size: 12px;
    }
</style>
<!-- <script> -->
    <!-- function validateForm() { -->
        <!-- var orphanageId = document.getElementById("orphanageId").value; -->
        <!-- var district = document.getElementById("district").value; -->
        <!-- var email = document.getElementById("email").value; -->
        <!-- var name = document.getElementById("name").value; -->
        <!-- var mobile = document.getElementById("mobile").value; -->
        <!-- var city = document.getElementById("city").value; -->
        <!-- var pincode = document.getElementById("pincode").value; -->
        <!-- var establishedDate = document.getElementById("establishedDate").value; -->

        <!-- // Simple validations -->
        <!-- if (orphanageId.trim() == "" || district == "" || email.trim() == "" || name.trim() == "" || mobile.trim() == "" || city.trim() == "" || pincode.trim() == "" || establishedDate.trim() == "") { -->
            <!-- document.getElementById("errorMessage").innerHTML = "All fields are required."; -->
            <!-- return false; -->
        <!-- } -->

        <!-- // Email validation -->
        <!-- var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; -->
        <!-- if (!emailRegex.test(email)) { -->
            <!-- document.getElementById("errorMessage").innerHTML = "Please enter a valid email address."; -->
            <!-- return false; -->
        <!-- } -->

        <!-- // Mobile number validation -->
        <!-- var mobileRegex = /^[0-9]{10}$/; -->
        <!-- if (!mobileRegex.test(mobile)) { -->
            <!-- document.getElementById("errorMessage").innerHTML = "Please enter a 10-digit mobile number."; -->
            <!-- return false; -->
        <!-- } -->

        <!-- // Pincode validation -->
        <!-- var pincodeRegex = /^[0-9]{6}$/; -->
        <!-- if (!pincodeRegex.test(pincode)) { -->
            <!-- document.getElementById("errorMessage").innerHTML = "Please enter a 6-digit pincode."; -->
            <!-- return false; -->
        <!-- } -->

        <!-- // Clear error message -->
        <!-- document.getElementById("errorMessage").innerHTML = ""; -->

        <!-- return true; -->
    <!-- } -->
<!-- </script> -->


<script>
    function validateEmail() {
        var email = document.getElementById("email").value;
        var emailError = document.getElementById("emailError");

        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (emailRegex.test(email)) {
            emailError.innerHTML = ""; // Clear error message
            return true; // Email is valid
        } else {
            emailError.innerHTML = "Please enter a valid email address.";
            return false; // Email is not valid
        }
    }
</script>


</head>
<body>
    <div class="container1">
        <h2>Registration Form</h2>
        <form method="POST" onsubmit="return validateForm()">


        <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name">
            </div>



            <div class="form-group">
                <label for="orphanageId">Orphanage ID</label>
                <input type="text" id="orphanageId" name="orphanageId">
            </div>
           
            <!-- <div class="form-group"> -->
                <!-- <label for="email">Email</label> -->
                <!-- <input type="email" id="email" name="email"> -->
            <!-- </div> -->
			        <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" onkeyup="validateEmail()">
                <div id="emailError" class="error-message"></div>
            </div>
			
			
			
			
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" id="mobile" name="mobile">
            </div>

            <div class="form-group">
                <label for="establishedDate">Established Date</label>
                <input type="date" id="establishedDate" name="establishedDate">
            </div>

            <div class="form-group">
                <label for="district">District</label>
                <select id="district" name="district">
                    <option value="">Select District</option>
                    <option value="Trivandrum">Trivandrum</option>
                    <option value="Kollam">Kollam</option>
                    <option value="Pathanamthitta">Pathanamthitta</option>
                    <option value="Alappuzha">Alappuzha</option>
                    <option value="Kottayam">Kottayam</option>
                    <option value="Idukki">Idukki</option>
                    <option value="Ernakulam">Ernakulam</option>
                    <option value="Thrissur">Thrissur</option>
                    <option value="Palakkad">Palakkad</option>
                    <option value="Malappuram">Malappuram</option>
                    <option value="Kozhikode">Kozhikode</option>
                    <option value="Wayanad">Wayanad</option>
                    <option value="Kannur">Kannur</option>
                    <option value="Kasaragod">Kasaragod</option>
                </select>
            </div>


            <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" name="city">
            </div>
            <div class="form-group">
                <label for="pincode">Pincode</label>
                <input type="text" id="pincode" name="pincode">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>

            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPasssword">
            </div>
          
            <div class="form-group">
                <!-- <button type="submit">Register</button> -->
                <button type="submit" id="submit" name="submit" class="btn btn-primary">Register</button>
            </div>
            <div id="errorMessage" class="error-message"></div>
        </form>
    </div>
</body>
</html>



<?php
require 'footer.php';
?> 



    









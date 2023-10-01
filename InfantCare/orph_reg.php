
<?php
require 'header.php';
?> 

    
<!-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kind Heart Charity - Donation</title>

    CSS FILES -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> --> 





<!-- <!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<!-- <title>Registration Page</title> -->
<style>
    /* body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    } */
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
    .form-group input {
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
</style>
<!-- <script> -->
    <!-- function validateForm() { -->
        <!-- var orphanageId = document.getElementById("orphanageId").value; -->
        <!-- var districtId = document.getElementById("districtId").value; -->
        <!-- var email = document.getElementById("email").value; -->
        <!-- var name = document.getElementById("name").value; -->
        <!-- var mobile = document.getElementById("mobile").value; -->
        <!-- var city = document.getElementById("city").value; -->
        <!-- var pincode = document.getElementById("pincode").value; -->
        <!-- var establishedDate = document.getElementById("establishedDate").value; -->

        <!-- // Simple validations (you can add more complex validations) -->
        <!-- if (orphanageId == "" || districtId == "" || email == "" || name == "" || mobile == "" || city == "" || pincode == "" || establishedDate == "") { -->
            <!-- alert("All fields are required."); -->
            <!-- return false; -->
        <!-- } -->

        <!-- // Add more complex validations if needed -->

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


<!-- </head> -->
<main>
    <div class="container1">
        <h2>Registration Form</h2>
        <form onsubmit="return validateForm()">
            <div class="form-group">
                <label for="orphanageId">Orphanage ID</label>
                <input type="text" id="orphanageId" name="orphanageId">
            </div>
            <div class="form-group">
                <label for="districtId">District ID</label>
                <input type="text" id="districtId" name="districtId">
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
                <label for="name">Name</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" id="mobile" name="mobile">
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
                <label for="establishedDate">Established Date</label>
                <input type="date" id="establishedDate" name="establishedDate">
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</main>
</html>


<?php
require 'footer.php';
?> 



    









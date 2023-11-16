<?php
session_start();

// echo $_SESSION["username"];
if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to the login page
    header("Location: login.php");
    exit(); // Make sure to stop execution after the redirect
}

require 'config.php';
require 's.php';

$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$aadhar = $_POST['aadhar'];

// SQL query to update sponsor details
$sql = "UPDATE sponsor SET s_name='$name', s_phone='$phone', s_aadhar='$aadhar' WHERE s_email='$id'"; // Assuming 's_email' is the unique identifier

if ($con->query($sql) === TRUE) {
    echo "Sponsor details updated successfully!";
} else {
    echo "Error updating sponsor details: " . $con->error;
}

// Close the database connection after the operation
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Sponsor</title>
    <style>
        .error-message {
            color: red;
        }
    </style>
</head>
<body>

    <form action="update_process.php" method="POST" class="forms-sample">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="<?php echo $name; ?>" required>
            <div id="nameError" class="error-message"></div>
        </div>

        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" class="form-control" name="phone" value="<?php echo $phone; ?>" required>
            <div id="phoneError" class="error-message"></div>
        </div>

        <div class="form-group">
            <label for="aadhar">Aadhar Number</label>
            <input type="text" id="aadhar" name="aadhar" class="form-control" value="<?php echo $aadhar; ?>" required>
            <div id="aadharError" class="error-message"></div>
        </div>
        <input type="submit" name="update" value="Update" class="btn btn-success btn-sm">
    </form>

    <script>
        window.onload = function () {
            document.getElementById('name').addEventListener('input', validateName);
            document.getElementById('phone').addEventListener('input', validatePhone);
            document.getElementById('aadhar').addEventListener('input', validateAadhar);

            function validateName() {
                var nameInput = document.getElementById('name');
                var nameError = document.getElementById('nameError');

                var nameRegex = /^[A-Z][a-zA-Z\s]*$/;

                if (!nameRegex.test(nameInput.value)) {
                    nameError.textContent = 'Please enter a valid name (first letter should be capital, no numbers or special characters allowed)';
                } else {
                    nameError.textContent = '';
                }
            }

            function validatePhone() {
                var phoneInput = document.getElementById('phone');
                var phoneError = document.getElementById('phoneError');

                // Regular expression to validate a 10-digit Indian mobile number
                var indianPhoneRegex = /^[6-9]\d{9}$/;

                if (!indianPhoneRegex.test(phoneInput.value) || phoneInput.value[0] === '0' || /\D/.test(phoneInput.value)) {
                    phoneError.textContent = 'Please enter a valid Indian mobile number.';
                } else {
                    phoneError.textContent = '';
                }
            }

        //     function validateAadhar() {
        //         var aadharInput = document.getElementById('aadhar');
        //         var aadharError = document.getElementById('aadharError');

        //         // Regular expression to validate a 12-digit Aadhar number
        //         var aadharRegex = /^\d{12}$/;

        //         if (!aadharRegex.test(aadharInput.value)) {
        //             aadharError.textContent = 'Please enter a valid 12-digit Aadhar number.';
        //         } else {
        //             // Additional checks for the year and month of birth
        //             var yearOfBirth = parseInt(aadharInput.value.substr(0, 4));
        //             var monthOfBirth = parseInt(aadharInput.value.substr(4, 2));

        //             if (yearOfBirth < 1900 || yearOfBirth > 2099 || monthOfBirth < 1 || monthOfBirth > 12) {
        //                 aadharError.textContent = 'Invalid year or month of birth in Aadhar number.';
        //             } else {
        //                 // Reset error message if everything is valid
        //                 aadharError.textContent = '';
        //             }
        //         }
        //     }
        };
    </script>

</body>
</html>

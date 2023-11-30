<?php
include 'connect.php';

$paymentType = "";
$paymentDetails = "";

if (isset($_POST["sub"])) {
    $f = $_POST["firstName"];
    $l = $_POST["lastName"];
    $p = $_POST["phoneNumber"];
    $a = $_POST["address"];
    $paymentType = $_POST["payment"];
    $pi = $_POST["p"];
    $at = $_POST["atmNumber"];
    $c = $_POST["cv"];
    $g = $_POST["gpayNumber"];
    $q = $_POST["quantity"];
    $t = $_POST["totalAmount"];

    // Get payment details based on the selected payment option
   /* if ($paymentType === "ATM") {
        $paymentDetails = $_POST["atmNumber"];
    } elseif ($paymentType === "GPay") {
        $paymentDetails = $_POST["gpayNumber"];
    }

    // Fetch book price from the database based on the book ID
    $priceQuery = mysqli_query($con, "SELECT price FROM `bookadd` WHERE bid = '$bookId'");
    $priceRow = mysqli_fetch_assoc($priceQuery);

    if ($priceRow) {
        $bookPrice = $priceRow['price'];
    } else {
        $bookPrice = 0; // Set a default value or handle the situation accordingly
    }

    // Calculate total amount
    $totalAmount = $q * $bookPrice;*/

    // Insert data into the database
    $sql = "INSERT INTO `book`(`first name`, `last name`, `ph`, `address`, `pincode`, `pay`, `stastus`, `atmno`, `cv`, `quantity`, `total amount`, `gpaydetails`) 
            VALUES ('$f', '$l', '$p', '$a', '$pi', '$paymentType', '[status-value]', '$at', '$c', '$q', '$t', '$g')";

    $result = mysqli_query($con, $sql);

    // Check if the query was successful
    if ($result) {
        // Redirect to details.php after successful insertion
        header("location: details.php");
        exit; // Ensure no further code execution after the redirection
    } else {
        echo "Error: " . mysqli_error($con); // Print the error message for debugging purposes
    }
}
?>

<html>
<!DOCTYPE HTML>
<html>
<head>
    <title>PHPJabbers.com | Free Book Online Store Website Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="main.css" />
    <noscript><link rel="stylesheet" href="noscript.css" /></noscript>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <style>
        /* Add your CSS styles here */
        body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.form-container {
    background-color: #ffffff;
    border: 1px solid #e1e1e1;
    border-radius: 8px;
    padding: 40px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-size: 18px;
    margin-bottom: 10px;
}

.form-group input[type="text"] {
    width: calc(100% - 22px);
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.form-group input[type="submit"] {
    width: 100%;
    background-color: #4caf50;
    color: #ffffff;
    border: none;
    padding: 15px;
    font-size: 18px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.form-group input[type="submit"]:hover {
    background-color: #45a049;
}

.payment-methods {
    margin-top: 20px;
}

.payment-methods label {
    display: inline-block;
    margin-right: 20px;
    font-size: 16px;
}

.payment-details {
    margin-top: 20px;
}

.payment-details input[type="text"] {
    width: calc(100% - 22px);
}

@media (max-width: 768px) {
    .form-container {
        padding: 20px;
    }
}

    </style>
</head>
<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Header and Nav sections go here -->

        <!-- Form Section -->
        <div class="form-container">
            <form action="#" method="post" onsubmit="calculateTotalAmount()">
            <input type="hidden" id="bookId" name="bookId" value="<?php echo $bookId; ?>">

                <div class="form-group">
                    <label for="firstName">Student Name:</label>
                    <input type="text" id="firstName" name="firstName" required>
                </div>
                <div class="form-group">
                    <label for="lastName">Student Batch:</label>
                    <input type="text" id="lastName" name="lastName" required>
                </div>
                <div class="form-group">
                    <label for="phoneNumber">Phone Number:</label>
                    <input type="text" id="phoneNumber" name="phoneNumber" required>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="address">Pincode:</label>
                    <input type="text" id="pin" name="p" required>
                </div>
                <div class="form-group">
            <label for="payment">Payment Information:</label>
            <select id="payment" name="payment" required onchange="togglePaymentDetails()">
                <option value="ATM">ATM</option>
                <option value="GPay">GPay</option>
                <option value="CashOnDelivery">Cash on Delivery</option>
            </select>
        </div>
        <div class="form-group" id="atmDetails" style="display: none;">
            <label for="atmNumber">ATM Number:</label>
            <input type="text" id="atmNumber" name="atmNumber" placeholder="Enter the 16-digit ATM number">
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" placeholder="Enter CVV">
        </div>
        <div class="form-group" id="gpayDetails" style="display: none;">
            <label for="gpayNumber">GPay Number:</label>
            <input type="text" id="gpayNumber" name="gpayNumber" placeholder="Enter GPay number">
        </div>
                <div class="form-group">
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" min="1" value="1" required>
</div>
<div class="form-group">
    <label for="totalAmount">Total Amount:</label>
    <input type="text" id="totalAmount" name="totalAmount" value="10" readonly>
</div>

                <div class="form-group">
                    <input type="submit" value="Place Order" name="sub">
                </div>
            </form>
        </div>

        <!-- Your existing JavaScript and other script links go here -->
    </div>

   
    <script src="jquery.min.js"></script>
			<script src="bootstrap.bundle.min.js"></script>
			<script src="jquery.scrolly.min.js"></script>
			<script src="jquery.scrollex.min.js"></script>
			<script src="main.js"></script>
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

            

    <!-- Your existing JavaScript and other script links go here -->
</body>

    <script>
    document.addEventListener('DOMContentLoaded', function() {

function calculateTotalAmount() {
    // Get the quantity and book price
    var quantity = document.getElementById('quantity').value;
    var bookPrice = <?php echo $bookPrice; ?>; // Retrieve the book price from PHP variable

    // Calculate the total amount
    var totalAmount = quantity * bookPrice;

    // Update the total amount input field
    document.getElementById('totalAmount').value = totalAmount;
}});
</script>
<script>
    function togglePaymentDetails() {
    var paymentMethod = document.getElementById("payment").value;
    var atmDetails = document.getElementById("atmDetails");
    var gpayDetails = document.getElementById("gpayDetails");

    if (paymentMethod === "ATM") {
        atmDetails.style.display = "block";
        gpayDetails.style.display = "none";
    } else if (paymentMethod === "GPay") {
        atmDetails.style.display = "none";
        gpayDetails.style.display = "block";
    } else {
        atmDetails.style.display = "none";
        gpayDetails.style.display = "none";
    }
}
</script>

</html>
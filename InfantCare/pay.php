<?php
include "config.php";
require './razorpay/Razorpay.php'; // Include Razorpay PHP SDK file outside the conditional block

use Razorpay\Api\Api; // Import the namespace outside the conditional block

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $amount = $_POST['amount'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo $amount;

    // Check if all data is available before proceeding
    if (!empty($amount) && !empty($name) && !empty($email)) {
        // Prepare and execute SQL query to insert data into the database
        $sql = "INSERT INTO donation3 (amount, name, email) VALUES ('$amount', '$name', '$email')";

        if ($con->query($sql) === TRUE) {
            // Initialize Razorpay
            $keyId = 'rzp_test_rV45cYN1u5Evk7';
            $keySecret = 'E6cBLbYiL9WaG4jKy8jyWcqI';
            $api = new Api($keyId, $keySecret);

            // Create order in Razorpay
            $orderData = [
                'receipt'   => 'rcptid_11',
                'amount'    => 200* 100, // Convert to paise
                'currency'  => 'INR'
            ];

            $order = $api->order->create($orderData);
            $order_id = $order->id;

            echo json_encode(['orderId' => $order_id]);
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }

        $con->close();
    } else {
        echo "Please fill in all the fields.";
    }
}
?>

<!-- HTML code -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kind Heart Charity-Donation</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/bootstrap-icons.css" rel="stylesheet">

<link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <!-- ... -->
</head>
<body>

<style>#rzp-button1 {
    background-color: #5ac1bc; /* Change 'blue' to the desired color */
    color: white; /* Optionally change text color */
    /* Other styles like padding, border-radius, etc. */
}
</style>

    <header class="site-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        infantcare management system
                    </p>

                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@company.com">
                            infantcare@gmail.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-youtube"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        
    </header>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="receipt.php">
                <img src="images/logo.png" class="logo img-fluid" alt="">
                <span>
                    Infantcare Charity
                    <small>Non-profit Organization</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.html#section_1">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.html#section_2">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.html#section_3">Causes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.html#section_4">Volunteer</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link click-scroll dropdown-toggle" href="index.html#section_5"
                            id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">News</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="news.html">News Listing</a></li>

                            <li><a class="dropdown-item" href="news-detail.html">News Detail</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.html#section_6">Contact</a>
                    </li>

                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="donate.php">Donate</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>

        <section class="donate-section">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mx-auto">
   
                    <form class="custom-form donate-form" method="POST" role="form">
                        <!-- Form Fields -->
                        <!-- ... -->



                        <div class="col-lg-6 col-12 mt-2">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="name" required>
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="email" name="email" id="email"
                                        pattern="[^ @]*@[^ @]*" class="form-control" placeholder="email"
                                        required>
                                </div>

                        <div class="col-lg-6 col-12 mt-2">
                            <input type="text" name="amount" id="amount" class="form-control" placeholder="Enter amount" required>
                        </div>
                        <!-- ... -->
                        <button id="rzp-button1" class="form-control mt-4">Pay</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Razorpay Script -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        // PHP variable to JavaScript variable conversion
        var amount = <?php echo isset($amount) ? $amount : 0; ?>;
        
        // Rest of your Razorpay configuration
        var options = {
            "key": "rzp_test_rV45cYN1u5Evk7",
            "amount": 200, // Convert amount to paise
            "currency": "INR",
            // ... (other options) ...
        };
        
        var rzp1 = new Razorpay(options);
        rzp1.on('payment.success', function(response) {
            // Handle success
            alert("Payment successful. Payment ID: " + response.razorpay_payment_id);
        });
        rzp1.on('payment.error', function(response) {
            // Handle error
            alert("Payment failed. Error: " + response.error.description);
        });
        
        // Open Razorpay payment modal on button click
        document.getElementById('rzp-button1').addEventListener('click', function(e) {
            rzp1.open();
            e.preventDefault();
        });
    </script>
</body>
</html>

<?php
// Include the Razorpay PHP library
require 'razorpay-php/Razorpay.php';

use Razorpay\Api\Api;

// Your Razorpay API key and secret key
$apiKey = 'rzp_test_lE5KPjjzg7OJlO';
$apiSecret = 'wNWFXqa5b1vIzRTW8TsK5RF8';

// Initialize Razorpay with your API keys
$api = new Api($apiKey, $apiSecret);

// Your payment amount in paisa (e.g., ₹100 should be 100 * 100)
$amount = 10000; // ₹100

// Create a Razorpay order
$order = $api->order->create(array(
    'amount' => $amount,
    'currency' => 'INR', // Change currency as required
    'payment_capture' => 1  
));

$orderId = $order->id; // Get the order ID

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Razorpay Payment</title>
    <!-- Include the Razorpay checkout JavaScript library -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>

    <h1>Pay with Razorpay</h1>

    <button id="rzp-button">Pay ₹100</button>

    <script>
        var options = {
            "key": "<?php echo $apiKey; ?>",
            "amount": "<?php echo $amount; ?>",
            "currency": "INR",
            "name": "Your Company Name",
            "description": "Payment for Product",
            "order_id": "<?php echo $orderId; ?>",
            "handler": function(response){
                // Handle the payment success here
                alert('Payment successful! Payment ID: ' + response.razorpay_payment_id);
            },
            "prefill": {
                "name": "John Doe",
                "email": "john@example.com",
                "contact": "9999999999"
            },
            "theme": {
                "color": "#F37254"
            }
        };

        var rzp = new Razorpay(options);

        document.getElementById('rzp-button').onclick = function(e){
            rzp.open();
            e.preventDefault();
        }
    </script>

</body>
</html>

// Include Razorpay PHP SDK
require 'path/to/razorpay-php/Razorpay.php';

use Razorpay\Api\Api;

$keyId = 'YOUR_KEY_ID';
$keySecret = 'YOUR_KEY_SECRET';

// Initialize Razorpay API
$api = new Api($keyId, $keySecret);

// Step 1: Create an Order
$orderData = [
    'amount'    => 39900, // Amount in paise
    'currency'  => 'INR',
    'receipt'   => 'rcptid_11'
];

$order = $api->order->create($orderData);
$orderId = $order->id;

// Step 3: Integrate Razorpay Checkout
?>
<button id="rzp-button1">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "<?php echo $keyId; ?>",
    "amount": "<?php echo $order->amount; ?>",
    "currency": "<?php echo $order->currency; ?>",
    "name": "Acme Corp",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "order_id": "<?php echo $orderId; ?>",
    "handler": function (response){
        // Handle payment response here
        alert(response.razorpay_payment_id);
        alert(response.razorpay_order_id);
        alert(response.razorpay_signature);
    },
    // ... other options ...
};

var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
    // Handle failed payment here
    // ...
});

document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
<?php
// Step 5: Verify Payment Signature (after payment response is received)
$razorpayPaymentId = $_POST['razorpay_payment_id'];
$razorpayOrderId = $_POST['razorpay_order_id'];
$razorpaySignature = $_POST['razorpay_signature'];

$expectedSignature = hash_hmac('sha256', $razorpayOrderId . '|' . $razorpayPaymentId, $keySecret);

if ($expectedSignature === $razorpaySignature) {
    // Payment is successful
    // Handle success logic here
} else {
    // Payment verification failed
    // Handle failure logic here
}

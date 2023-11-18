<?php 
// include "Razorpay.php"; // Include Razorpay PHP SDK file

// $orderData = [
//     'receipt'   => 'rcptid_11',
//     'amount'    => 39900, // 39900 rupees in paise
//     'currency'  => 'INR'
// ];

// $api = new Api("rzp_test_lE5KPjjzg7OJlO", "wNWFXqa5b1vIzRTW8TsK5RF8");


// $api->utility->verifyPaymentSignature(array('razorpay_order_id' => $razorpayOrderId, 'razorpay_payment_id' => $razorpayPaymentId, 'razorpay_signature' => $razorpaySignature));

?>
<?php
require 'Razorpay.php'; // Include Razorpay PHP SDK file

use Razorpay\Api\Api;

$keyId = 'rzp_test_lE5KPjjzg7OJlO';
$keySecret = 'wNWFXqa5b1vIzRTW8TsK5RF8';

$api = new Api($keyId, $keySecret);

$orderData = [
    'receipt'   => 'rcptid_11',
    'amount'    => 39900, // 39900 rupees in paise
    'currency'  => 'INR'
];

$order = $api->order->create($orderData);
$order_id = $order->id;

echo json_encode(['orderId' => $order_id]);
?>



<html>
<button id="rzp-button1">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_lE5KPjjzg7OJlO", // Enter the Key ID generated from the Dashboard
    "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Acme Corp",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "order_id": "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        alert(response.razorpay_payment_id);
        alert(response.razorpay_order_id);
        alert(response.razorpay_signature)
    },
    "prefill": {
        "name": "Gaurav Kumar",
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
</html>

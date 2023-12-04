<?php
require './razorpay/Razorpay.php'; 

use Razorpay\Api\Api;

$api = new Api('rzp_test_rV45cYN1u5Evk7', 'E6cBLbYiL9WaG4jKy8jyWcqI');

$amount = $_POST['amount'];

$order = $api->order->create(array(
 'receipt'      => 'order_rcptid_11',
 'amount'       => $amount, // amount in the smallest currency unit
 'currency'     => 'INR',
 'payment_capture' => 1 // auto capture
));

$orderId = $order['id'];

echo $orderId;
?>

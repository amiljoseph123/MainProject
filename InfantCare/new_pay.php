<?php

require './razorpay/Razorpay.php'; // Include Razorpay PHP SDK file

use Razorpay\Api\Api;

$keyId = 'rzp_test_rV45cYN1u5Evk7';
$keySecret = 'E6cBLbYiL9WaG4jKy8jyWcqI';

$api = new Api($keyId, $keySecret);

$orderData = [
    'receipt'   => 'rcptid_11',
    'amount'    => 50000, // 39900 rupees in paise
    'currency'  => 'INR'
];

$order = $api->order->create($orderData);
$order_id = $order->id;

echo json_encode(['orderId' => $order_id]);
?>



<html>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kind Heart Charity-Donation</title>

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->
</head>

<body>

<style>#rzp-button1 {
    background-color: #5ac1bc; /* Change 'blue' to the desired color */
    color: white; /* Optionally change text color */
    /* Other styles like padding, border-radius, etc. */
}
</style>



<form class="custom-form donate-form" method="POST" role="form">
                            <h3 class="mb-4">Make a donation</h3>
<div class="col-lg-6 col-12 mt-2">
                                    <input type="int" name="amount" id="amount" class="form-control"
                                        placeholder="custom amount" required>
                                </div>

                        

                                 <div class="col-lg-12 col-12">
                                    <h5 class="mt-1">Personal Info</h5>
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="name" required>
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="email" name="email" id="email"
                                        pattern="[^ @]*@[^ @]*" class="form-control" placeholder="email"
                                        required>
                                </div>
                                <br><br><br>
                                <button id="rzp-button1"class="form-control mt-4">Pay</button>

                         
                                </div>
                            </div>
                        </form>  


                        

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_rV45cYN1u5Evk7", // Enter the Key ID generated from the Dashboard
    "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Infantcare",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    // "order_id": "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "order_id": "<?php echo $order_id; ?>",

    
    "handler": function (response){
        alert(response.razorpay_payment_id);
        alert(response.razorpay_order_id);
        alert(response.razorpay_signature)
    },
    "prefill": {
        "name": "Gaurav Kumar",
         "email": "gaurav.kumar@example.com",
        "contact": "9000"
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
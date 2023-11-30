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

    <header class="site-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        Akershusstranda 20, 0150 Oslo, Norway
                    </p>

                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@company.com">
                            info@company.com
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
                    Kind Heart Charity
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


                         <form class="custom-form donate-form" action="donation_process2.php" method="POST" role="form">
                            <h3 class="mb-4">Make a donation</h3>

                            <div class="row">
                                <div class="col-lg-12 col-12">
                                     <h5 class="mb-3">Donation Frequency</h5> 
                                </div>

                                <div class="col-lg-6 col-6 form-check-group form-check-group-donation-frequency">
                                    <div class="form-check form-check-radio">
                                        <input class="form-check-input" type="radio" name="DonationFrequency"
                                            id="DonationFrequencyOne" checked>

                                        <label class="form-check-label" for="DonationFrequencyOne">
                                            One Time
                                        </label>
                                    </div>
                                </div> 

                                 <div class="col-lg-6 col-6 form-check-group form-check-group-donation-frequency">
                                    <div class="form-check form-check-radio">
                                        <input class="form-check-input" type="radio" name="DonationFrequency"
                                            id="DonationFrequencyMonthly">

                                        <label class="form-check-label" for="DonationFrequencyMonthly">
                                            Monthly
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-2 mb-3">Select an amount</h5>
                                </div>

                            

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

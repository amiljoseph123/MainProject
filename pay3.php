<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kind Heart Charity-Donation</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-icons.css" rel="stylesheet">
  <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
  <!-- Your existing HTML code goes here -->
  <?php
  include "config.php";
require './razorpay/Razorpay.php'; 

use Razorpay\Api\Api;

$api = new Api('rzp_test_rV45cYN1u5Evk7', 'E6cBLbYiL9WaG4jKy8jyWcqI');
if(isset($_POST["pay_btn"]))
{
    $a=$_POST["amount"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $sql = "INSERT INTO donation3 (amount, name, email) VALUES ('$a', '$name', '$email')";
    $con->query($sql);
    $order = $api->order->create(array(
        'receipt'       => 'order_rcptid_11',
        'amount'        => $a*100, // amount in the smallest currency unit
        'currency'      => 'INR',
        'payment_capture' => 1 // auto capture
      ));
      
      $orderId = $order['id'];
      
      echo $orderId,$a;
}


?>

  <header class="site-header">
      <!-- ... -->
  </header>

  <nav class="navbar navbar-expand-lg bg-light shadow-lg">
      <!-- ... -->
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
                         <INPUT type="submit" value="pay"class="form-control t-4" name="pay_btn">
                     </form>
                     <button id="rzp-button1" class="form-control mt-4">Confirm Donation</button>
                 </div>
              </div>
          </div>
          
      </section>
  </main>
  
  <script>
 var options = {
  "key": "rzp_test_rV45cYN1u5Evk7", // Enter your Key ID
  "currency": "INR",
  "name": "Infantcare",
  "description": "Test Transaction",
  "order_id": "<?php echo $orderId; ?>", //This is a sample Order ID. Pass the `id` obtained in the response of the previous API call
  "handler": function (response){
    
      document.getElementById('rzp_test_rV45cYN1u5Evk7').value = response.razorpay_payment_id;
      document.getElementById('E6cBLbYiL9WaG4jKy8jyWcqI').value = response.razorpay_signature;
      document.razorpayform.submit();
      alert('Payment successful!');
      alert('Thank you for your donation!');
      window.location.href = 'index.php';
  },
  "prefill": {
      "name": "Gaurav Kumar",
      "email": "gaurav.kumar@example.com",
      "contact": "9999999999"
  },
  "notes": {
      "address": "Razorpay Corporate Office"
  },
  "theme": {
      "color": "#F37254"
  }
 };
 var rzp = new Razorpay(options);

 document.getElementById('rzp-button1').onclick = function(e){
  options.amount = document.getElementById('amount').value * 100; // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 5000 INR
  rzp.open();
  e.preventDefault();
 }
</script>

</body>
</html>

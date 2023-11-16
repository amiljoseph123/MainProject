<?php
// session start();

require 'config.php';
require 'vendor/autoload.php';

use Razorpay\Api\Api;

if(!empty($_POST['amount']))
{
    $name=$_POST['name'];
    $name=$_POST['email'];
    $name=$_POST['amount'];
    $api=new Api(Api_KEY, API_SECRET);
    $api=$api->order->create(
        array(
            'receipt' => '123',
            'amount' => $amount.'00',
            'currency' => 'INR',
            'notes' => array('key1' => 'value3','key2'=> 'value2')

        )
        );
        if(!empty($res['id'];))
        {
            $_SESSION['order_id']=$res['id'];
            ?>

            <form action="<?php echo BASE_URL?>pay_success.php"method="POST">
            <script
            src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="<?php echo API_KEY?>"
            data-amount="<?php echo $amount;?>"
            data-currency="INR"
            data-order_id="<?php echo $res['id'];?>"
            data-buttontext="pay <?php echo $amount;?> with Razorpay"
            data-name="<?php echo COMPANY_NAME;?>"
            data-description="company Description"
            data-image="<?php echo COMPANY_LOGO_URL;?>"
            data-prefill.name="<?php echo $name;?>"
            data-prefill.email="<?php echo $email;?>"
            data-theme.color="#F37254"
        </script>
        <input type="hidden" custom="Hidden Element" name="hidden"/>
        

        </form>
        <?php
        }

}

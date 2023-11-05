


<?php
require 'config.php';

require 'header.php';


if (isset($_GET['email'])) {
    $email = $_GET['email'];
    

    $result = $con->query("SELECT * FROM donation WHERE email='$email'");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $donationAmount = $row['amount'];
    } else {
        $name = "No Name Found";
        $donationAmount = "No Amount Found";
    }

    $con->close();
 
}

// else {
//     header("Location:"); // Redirect if email parameter is not provided
//     exit();
// }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Receipt - Kind Heart Charity</title>
    <!-- Add your CSS and JS files as needed -->
</head>

<body>


<style>
    .receipt-section {
        text-align: center;
    }

    .receipt-section p {
        font-size: 18px;
        margin: 10px 0;
    }

    .download-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
        margin-top: 20px;
    }
</style>


    <header>
        <!-- Add header content here -->
    </header>

    <main>
        <section class="receipt-section">
            <div class="container">
                <h1>Donation Receipt</h1>
                <p>Name: <?php echo $name; ?></p>
                <p>Email: <?php echo $email; ?></p>
                <p>Donation Amount: <?php echo $donationAmount; ?></p>

                <a href="download_receipt.php?email=<?php echo $email; ?>" class="download-button">Download Receipt</a>

            </div>
        </section>
    </main>

    <footer>
        <!-- Add footer content here -->
    </footer>

    <!-- Add your CSS and JS files as needed -->
</body>

</html>

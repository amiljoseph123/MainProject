<?php
// Include database connection code here
// Fetch sponsor details from the database based on parameters
$sponsorName = "Example Sponsor"; // Replace with fetched sponsor name
$sponsorEmail = "sponsor@example.com"; // Replace with fetched sponsor email

// Generate QR code containing sponsor details
$qrData = "Sponsor: $sponsorName\nEmail: $sponsorEmail";
$qrImage = 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=' . urlencode($qrData);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sponsor QR Code</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Sponsor QR Code</h2>
        <div class="text-center">
            <img src="<?php echo $qrImage; ?>" alt="Sponsor QR Code" class="img-fluid">
        </div>
        <div class="text-center mt-4">
            <p>Sponsor: <?php echo $sponsorName; ?></p>
            <p>Email: <?php echo $sponsorEmail; ?></p>
        </div>
    </div>
</body>
</html>

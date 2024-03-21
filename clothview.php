<?php 
session_start();
$vol = "" ;
$dist ="";
if (isset($_SESSION['username'])) {
    $vol = $_SESSION['username'];
} else {
    header("Location: login.php");
    exit(); 
}
include('config.php');

// Check if the 'id' parameter is set in the URL
if(isset($_GET['id'])) {
    $item_id = $_GET['id'];
    
    // Fetch details of the item using its ID
    $sql = "SELECT * FROM `cloth` WHERE `id`='$item_id'";
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        // Display the details of the item
        $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Infant Care</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
  
  <p>Cloth Details</p>
  <!-- Display details of the item -->
  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">PIN: <?php echo $row["pin"]; ?></h5>
      <p class="card-text">City: <?php echo $row["city"]; ?></p>
      <p class="card-text">Place: <?php echo $row["place"]; ?></p>
    </div>
  </div>
</div>
</body>
</html>
<?php
    } else {
        echo "Item not found.";
    }
} else {
    echo "Item ID not provided.";
}
?>

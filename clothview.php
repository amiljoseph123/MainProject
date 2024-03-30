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
include('header.php');

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
  
 
  <!-- Display details of the item -->
  <style>
  .container {
    max-width: 800px; /* Set maximum width for better responsiveness */
    margin: 0 auto; /* Center the container horizontally */
    padding: 20px; /* Add some padding for spacing */
    
  }

  p {
    font-size: 24px; /* Increase font size for section heading */
    font-weight: bold; /* Make section heading bold */
    color: #333333; /* Set color for section heading */
    margin-bottom: 20px; /* Add spacing after section heading */
  }

  .card {
    width: 100%; /* Take full width of the container */
    background-color: #ffffff; /* Background color */
    border: 1px solid #dddddd; /* Border color */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Box shadow for depth */
    margin-bottom: 20px; /* Spacing between cards */
    overflow: hidden; /* Hide overflow content */
    transition: all 0.3s ease; /* Smooth transition on hover */
  }

  .card:hover {
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2); /* Adjusted box shadow on hover */
    transform: translateY(-5px); /* Move the card slightly up on hover */
  }

  .card-body {
    padding: 20px; /* Padding inside the card */
  }

  .card-title {
    font-size: 20px; /* Title font size */
    margin-bottom: 15px; /* Spacing between title and other content */
    color: #333333; /* Title color */
  }

  .card-text {
    font-size: 16px; /* Text font size */
    margin-bottom: 10px; /* Spacing between paragraphs */
    color: #666666; /* Text color */
    text-align: center;
  }
</style>

<
<?php
    } else {
        echo "Item not found.";
    }
} else {
    echo "Item ID not provided.";
}
?>





<?php
// Check if item ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve item details from the database
    $sql = "SELECT * FROM `cloth` WHERE `id` = '$id'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        
        // Check if the form is submitted to update the status
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['collect'])) {
            // Update status to "on collect"
            $update_query = mysqli_query($con, "UPDATE `cloth` SET `status`='on collect' WHERE `id`='$id'");
            if ($update_query) {
                echo '<script>alert("Status updated to \'On Collect\'")</script>';
                // You can add additional logic here if needed
            } else {
                echo '<script>alert("Error updating status")</script>';
            }
        }
    } else {
        echo "Item not found.";
    }
} else {
    echo "Item ID not provided.";
}
?>

<div class="container">
  <p><center><b>Cloth Location Details</b></center></p>
  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-text">PIN: <?php echo $row["pin"]; ?></h5>
      <p class="card-text">City: <?php echo $row["city"]; ?></p>
      <p class="card-text">Place: <?php echo $row["place"]; ?></p>
      <div class="text-center"> <!-- Center align content -->
        <form method="post">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <button type="submit" name="collect" class="btn btn-primary" style="background-color: #5ac1bc;"><?php echo ($row['status'] == 'on collect') ? 'On Collect' : 'Collect'; ?></button>
          <a href="vol_duty.php" class="btn btn-secondary">Back</a>
          <a href="" class="btn btn-primary">contact sponsor</a>
          
      

        </form>
      </div>
    </div>
  </div>
</div>


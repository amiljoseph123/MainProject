<?php
include "config.php";
?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"]; // Get the ID from the form
    // Do something with the $id variable
}

$sql = "SELECT * FROM orphanage WHERE o_id = $id";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Display user details
        $row = $result->fetch_assoc();
    
    
        
          $name = $row["o_name"];
          $id = $row["o_id"];
          $email = $row["o_email"];
          $phone = $row["o_phone"];
          $district = $row["o_district"];
          $city = $row["o_city"];
          $pincode = $row["o_pincode"];
        
        ?>

        <?php echo $name; ?></h3>
         <p class="title"><?php echo $email; ?></p>
                    <P><?php echo $phone; ?></P>
                    <p><?php echo $district; ?></p>
                    <p><?php echo $city; ?></p>
                    <P><?php echo $pincode; ?></P>
        
        <?php
        } else {
        echo "User not found";
        }

        $conn->close();
     ?>

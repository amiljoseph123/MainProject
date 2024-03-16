<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
</head>
<body>
    <h2>View Data from Database</h2>
    <div>
        <?php
       
       // Include the database configuration file
       include 'config.php';
       
       // Query to fetch data from the database table
       $sql = "SELECT * FROM cloth";
       $result = $con->query($sql);
       
       if ($result->num_rows > 0) {
           // Output data of each row
           while($row = $result->fetch_assoc()) {
               echo "ID: " . $row["id"]. " - Age: " . $row["age"]. " - Gender: " . $row["gender"]. " - Quantity: " . $row["quantity"]. "<br>";
               // Output more fields as needed
           }
       } else {
           echo "0 results";
       }
       // Close the database connection
       $con->close();
       ?>
    </div>
</body>
</html>

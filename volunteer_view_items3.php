<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin: 10px;
            width: 300px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h2 class="text-center mt-3">Stationary</h2>
    <div class="container">
        <div class="row">
            <?php
            // Include the database configuration file
            include 'config.php';

            // Query to fetch data from the database table
            $sql = "SELECT * FROM stationary";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">ID: <?php echo $row["id"]; ?></h5>
                                <p class="card-text">item: <?php echo $row["sitem"]; ?></p>
                                <p class="card-text">Quantity: <?php echo $row["squantity"]; ?></p>

                                <a href="#" class="btn btn-primary">View Location</a>
                                <!-- Button for pick up -->
                                <a href="#" class="btn btn-success">Collect</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "0 results";
            }
            // Close the database connection
            $con->close();
            ?>
        </div>
    </div>
</body>
</html>

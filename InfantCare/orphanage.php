<?php
require_once 'config.php';
$result = mysqli_query($con, "SELECT * FROM `orphanage` ") or die("error");
?>

<?php
include('navbars/sponsor.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orphanage Details</title>

    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: 20px;
            text-align: center;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        img {
            max-width: 100%;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover,
        a:hover {
            opacity: 0.7;
        }
    </style>

</head>

<body>

    <div class="card-container">
        <?php
        while ($row = $result->fetch_assoc()) {
            $name = $row["o_name"];
            $email = $row["o_email"];
            $phone = $row["o_phone"];
            $district = $row["o_district"];
            $city = $row["o_city"];
            $pincode = $row["o_pincode"];
        ?>

            <div class="card">
                <img src="img.jpg" alt="">
                <h3><?php echo $name; ?></h3>
                <p class="title"><?php echo $email; ?></p>
                <P><?php echo $phone; ?></P>
                <p><?php echo $district; ?></p>
                <p><?php echo $city; ?></p>
                <P><?php echo $pincode; ?></P>
            </div>

        <?php
        }
        ?>
    </div>

</body>

</html>

<?php
require 'footer.php';
?>

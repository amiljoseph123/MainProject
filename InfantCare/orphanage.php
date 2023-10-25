<?php
require_once 'config.php';
$result = mysqli_query($con, "SELECT * FROM `orphanage` ") or die("error");
?> 

<?php
require 'header.php';
?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orphanage Table</title>

    <style>
        .table-data {
            max-width: 800px;
            margin: 0 auto;
        }

        .order {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 10px;
        }

        .order i {
            font-size: 24px;
            margin-left: 10px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ccc;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <div class="table-data">
        <div class="order">
            <div class="head">
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th> 
                    <th>Name</th>
                    <!-- <th>Government ID</th> -->
                    <!-- <th>Established date</th> -->
                    <th>Email</th>
                    <th>Phone</th>
                    <th>District</th>
                    <th>City</th>
                    <th>Pincode</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $c=0;
                    while ($row = $result->fetch_assoc()) {
                        $name=$row["o_name"];
                        // $id=$row["o_govtid"];
                        // $date=$row["o_edate"];
                        $email=$row["o_email"];
                        $phone=$row["o_phone"];
                        $district=$row["o_district"];
                        $city=$row["o_city"];
                        $pincode=$row["o_pincode"];
                        $c++;
                ?>
                <tr>
                    <td><?php echo $c; ?></td>
                    <td><?php echo $name; ?></td>
                    <!-- <td><?php echo $id; ?></td> -->
                    <!-- <td><?php echo $date; ?></td> -->
                    <td><?php echo $email; ?></td>
                    <td><?php echo  $phone; ?></td>
                    <td><?php echo $district; ?></td>
                    <td><?php echo $city; ?></td>
                    <td><?php echo $pincode; ?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <br><br> <br><br> <br><br> <br><br> <br><br> <br><br>
</body>

</html>
<?php
 require 'footer.php';
?> 
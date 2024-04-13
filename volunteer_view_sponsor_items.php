<?php
session_start();
$vol = "";
$dist = "";

if (isset($_SESSION['username'])) {
    $vol = $_SESSION['username'];
} else {
    header("Location: login.php");
    exit();
}

include('config.php');
// include('header.php');
include('volunteer_sidebar.php');

$sql = "SELECT * FROM `volunteer` WHERE `email`='$vol'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $name = $row["id"];
    $dist = $row["district"];

    // Query for sponsored items
    $sql1 = "SELECT * FROM `sponsored_itemsqr` WHERE `district` = '$dist'";
    $result1 = $con->query($sql1);

    if ($result1) { // Check if query was successful
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Infant Care</title>
            <!-- Bootstrap CSS -->
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
            <!-- DataTables CSS -->
            <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        </head>

        <body>
            <!--Main Navigation-->
            <header>
                <!-- Navbar -->
                <nav id="main-navbar" class="navbar navbar-expand-lg bg-body">
                    <!-- Container wrapper -->
                </nav>
                <!-- Heading -->
                <div class="p-5 bg-body-tertiary mb-4">
                    <center>
                    <h1 class="">Collection Requests</h1>
    </center>
                    <!-- Breadcrumb -->
                    <nav class="d-flex">
                        <h6 class="mb-0">
                            <a href="http://localhost/infantcare_main/volunteer_homepage.php" class="text-reset">Home</a>
                            <span>/</span>
                            <a href="vol_duty.php" class="text-reset"><u>Dashboard</u></a>
                        </h6>
                    </nav>
                    <!-- Breadcrumb -->
                </div>
                <!-- Heading -->
            </header>
            <!--Main Navigation-->
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p>Cloth</p>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-lg">
                                <thead>
                                    <tr>
                                        <th>category</th>
                                        <th>item</th>
                                        <th>qrimage</th>
                                        <!-- Add another table heading -->
                                        <th>Additional Heading</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row1 = $result1->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row1["category"]; ?></td>
                                            <td><?php echo $row1["item"]; ?></td>
                                            <td><?php echo $row1["qrimage"]; ?></td>
                                            <!-- Add corresponding table data -->
                                            <td>Additional Data</td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap JS and jQuery (optional, for certain components and functionalities) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <!-- DataTables JavaScript -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

            <script>
                jQuery(document).ready(function($) {
                    $('#example').DataTable();
                });
            </script>

        </body>

        </html>
<?php
    } else {
        echo "Error: " . $con->error;
    }
} else {
    echo "No volunteer found for the provided email.";
}
?>

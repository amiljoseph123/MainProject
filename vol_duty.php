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
$sql = "SELECT * FROM `volunteer` WHERE `email`='$vol'";
echo $vol;
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $name = $row["id"];
    $dist = $row["district"];
}
$sql1 = "SELECT * FROM `cloth` WHERE `district` = '$dist'";
$result1 = $con->query($sql1);


?>
<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Infant Care</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- DataTables CSS -->
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables JavaScript -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>


</head>
<body>
<!--Main Navigation-->
<header>

  <!-- Navbar -->
  <nav id="main-navbar" class="navbar navbar-expand-lg bg-body">
    <!-- Container wrapper -->
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

  <!-- Heading -->
  <div class="p-5 bg-body-tertiary mb-4">
    <h1 class="">Collection Requests</h1>
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
  
  <p>Cloth</p>
  <!-- Make sure to include Bootstrap CSS in your HTML -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div class="row">
    <div class="col-6">
<table id="example" class="table table-striped">
    <thead>
        <tr>
            <th>Gender</th>
            <th>Age</th>
            <th>Quantity</th>
            <th>view</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result1->num_rows > 0) {
            while ($row1 = $result1->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row1["gender"]; ?></td>
                    <td><?php echo $row1["age"]; ?></td>
                    <td><?php echo $row1["quantity"]; ?></td>
                    <td><a href="clothview.php?id=<?php echo $row1['id']; ?>" class="btn btn-primary" style="background-color: #5ac1bc;">View Location details</a></td>

                    <!-- <td><a href="collect.php?id=<?php echo $row1['id']; ?>" class="btn btn-success" style="background-color: #5ac1bc;">Collect</a></td> -->
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>
    </div>
    
        <?php
        if ($result1->num_rows > 0) {
            while ($row1 = $result1->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row2["item"]; ?></td>
                   
                    <td><?php echo $row2["quantity"]; ?></td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>

    </div>
    </div>
<script>
    jQuery(document).ready(function($) {
        $('#example').DataTable();
    });
</script>

</div>

<!-- Bootstrap JS and jQuery (optional, for certain components and functionalities) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>


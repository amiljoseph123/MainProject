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

include('../config.php');
// include('header.php');
// include('volunteer_sidebar.php');


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
      $rows = [];
while ($row1 = $result1->fetch_assoc()) {
    $rows[] = $row1;
}
?>
<?php 

// Check if the 'id' parameter is set in the URL
// if(isset($_GET['id'])) {
//     $item_id = $_GET['id'];
    
//     // Fetch details of the item using its ID
//     $sql = "SELECT * FROM `sponsored_itemsqr` WHERE `id`='$item_id'";
//     $result = $con->query($sql);
    
//     if ($result->num_rows > 0) {
//         // Display the details of the item
//         $row = $result->fetch_assoc();
//         $id =$row['s_sponsor_id'];
//      echo $id;
?>


<?php
include 'a.php';
?>
  <!-- ##################### -->
  
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

        
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection Requests</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <center><h1>Collection Requests</h1></center>
                <!-- <a href="http://localhost/infantcare_main/volunteer_homepage.php" class="btn btn-primary">Home</a> -->
                <table id="example" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Item</th>
                            <th>QR Image</th>
                            <th>View Location</th> 
                            <th>Contact Sponsor</th>
                             <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $row) : ?>
                          <tr>
                              <td><?php echo $row["category"]; ?></td>
                              <td><?php echo $row["item"]; ?></td>
                              <td><?php echo $row["qrimage"]; ?></td>

                              <td>
        <button class="btn btn-success">View Location</button>
    </td>
    <td>
        <!-- <button class="btn btn-info">Contact Sponsor</button> -->
        <a href="sponsor_details.php?s_sponsor_id=<?php echo $row['s_sponsor_id']; ?>" class="btn btn-primary">Contact Sponsor</a>
    </td>
    <td>
        <button class="btn btn-warning">Collect</button>
    </td>
</tr>
                             
   
</tr>
                                
                                
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>
                        </div>
                    </div>
  </section>
  
    </div>
  </section>
  
  
  
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Toggle submenu visibility when arrow is clicked
      let arrows = document.querySelectorAll(".arrow");
      arrows.forEach((arrow) => {
        arrow.addEventListener("click", () => {
          let arrowParent = arrow.parentElement.parentElement;
          arrowParent.classList.toggle("showMenu");
        });
      });

      // Toggle sidebar visibility when menu button is clicked
      let sidebar = document.querySelector(".sidebar");
      let menuButton = document.querySelector(".bx-menu");

      menuButton.addEventListener("click", () => {
        sidebar.classList.toggle("close");
        sidebar.classList.remove("showMenu"); // Ensure submenu is hidden when sidebar is closed
      });
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

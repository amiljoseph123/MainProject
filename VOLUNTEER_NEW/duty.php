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


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&family=Tinos&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&family=Tinos&display=swap');
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Tinos', serif;
}
.sidebar {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 260px;
  background: #5ac1bc; 
  background: -webkit-linear-gradient(to right, #5ac1bc, #5ac1bc); 
  background: linear-gradient(to right, #5ac1bc, #5ac1bc);
  z-index: 100;
  transition: all 0.5s ease;
}
.sidebar.close {
  width: 78px;
}
.sidebar .logo-details {
  height: 60px;
  width: 100%;
  display: flex;
  align-items: center;
}
.sidebar .logo-details i {
  font-size: 30px;
  color: #fff;
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
}
.sidebar .logo-details .logo_name {
  font-size: 22px;
  color: #fff;
  font-weight: 600;
  transition: 0.3s ease;
  transition-delay: 0.1s;
}
.sidebar.close .logo-details .logo_name {
  transition-delay: 0s;
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links {
  height: 100%;
  padding: 0 0 150px 0;
  overflow: auto;
}
.sidebar.close .nav-links {
  overflow: visible;
}
.sidebar .nav-links::-webkit-scrollbar {
  display: none;
}
.sidebar .nav-links li {
  position: relative;
  list-style: none;
  transition: all 0.4s ease;
}
.sidebar .nav-links li:hover {
  background: #1d1b31;
}
.sidebar .nav-links li .icon-link {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.sidebar.close .nav-links li .icon-link {
  display: block;
}
.sidebar .nav-links li i {
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
  color: #fff;
  font-size: 20px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.sidebar .nav-links li.showMenu i.arrow {
  transform: rotate(-180deg);
}
.sidebar.close .nav-links i.arrow {
  display: none;
}
.sidebar .nav-links li a {
  display: flex;
  align-items: center;
  text-decoration: none;
}
.sidebar .nav-links li a .link_name {
  font-size: 18px;
  font-weight: 400;
  color: #fff;
  transition: all 0.4s ease;
}
.sidebar.close .nav-links li a .link_name {
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links li .sub-menu {
  padding: 6px 6px 14px 80px;
  margin-top: -10px;
  background: #1d1b31;
  display: none;
}
.sidebar .nav-links li.showMenu .sub-menu {
  display: block;
}
.sidebar .nav-links li .sub-menu a {
  color: #fff;
  font-size: 15px;
  padding: 5px 0;
  white-space: nowrap;
  opacity: 0.6;
  transition: all 0.3s ease;
}
.sidebar .nav-links li .sub-menu a:hover {
  opacity: 1;
}
.sidebar.close .nav-links li .sub-menu {
  position: absolute;
  left: 100%;
  top: -10px;
  margin-top: 0;
  padding: 10px 20px;
  border-radius: 0 6px 6px 0;
  opacity: 0;
  display: block;
  pointer-events: none;
  transition: 0s;
}
.sidebar.close .nav-links li:hover .sub-menu {
  top: 0;
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
}
.sidebar .nav-links li .sub-menu .link_name {
  display: none;
}
.sidebar.close .nav-links li .sub-menu .link_name {
  font-size: 18px;
  opacity: 1;
  display: block;
}
.sidebar .nav-links li .sub-menu.blank {
  opacity: 1;
  pointer-events: auto;
  padding: 3px 20px 6px 16px;
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links li:hover .sub-menu.blank {
  top: 50%;
  transform: translateY(-50%);
}
.sidebar .profile-details {
  position: fixed;
  bottom: 0;
  width: 260px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background : skyblue;
  padding: 12px 0;
  transition: all 0.5s ease;
}
.sidebar.close .profile-details {
  background: none;
}
.sidebar.close .profile-details {
  width: 78px;
}
.sidebar .profile-details .profile-content {
  display: flex;
  align-items: center;
}
.sidebar .profile-details img {
  height: 52px;
  width: 52px;
  object-fit: cover;
  border-radius: 16px;
  margin: 0 14px 0 12px;
  background: #1d1b31;
  transition: all 0.5s ease;
}
.sidebar.close .profile-details img {
  padding: 10px;
}
.sidebar .profile-details .profile_name,
.sidebar .profile-details .job {
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  white-space: nowrap;
}
.sidebar.close .profile-details i,
.sidebar.close .profile-details .profile_name,
.sidebar.close .profile-details .job {
  display: none;
}
.sidebar .profile-details .job {
  font-size: 12px;
}
.home-section {
  position: relative;
  background: #e4e9f7;
  height: 100vh;
  left: 260px;
  width: calc(100% - 260px);
  transition: all 0.5s ease;
}
.sidebar.close ~ .home-section {
  left: 78px;
  width: calc(100% - 78px);
}
.home-section .home-content {
  height: 60px;
  display: flex;
  align-items: center;
}
.home-section .home-content .bx-menu,
.home-section .home-content .text {
  color: #11101d;
  font-size: 35px;
}
.home-section .home-content .bx-menu {
  margin: 0 15px;
  cursor: pointer;
}
.home-section .home-content .text {
  font-size: 26px;
  font-weight: 600;
}
@media (max-width: 420px) {
  .sidebar.close .nav-links li .sub-menu {
    display: none;
  }
}
/* ############################################## */animation


/* ########################################### */
  </style>
</head>
<body>
    <!-- ################################ -->

    <!-- ################## ######################################-->
    
    
  <div class="sidebar close">
    
    <div class="logo-details">
      <i class='bx bxl-bitcoin'></i>
      <span class="logo_name">Menu</span>
    </div>
    
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-home'></i>
          <span class="link_name">Home</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="../volunteer_new/home.php">Home</a></li>
        </ul>
      </li>
      <li>
        <div class="icon-link">
          <a href="../volunteer_new/profile.php">
            <i class='bx bx-bulb'></i>
            <span class="link_name">Profile</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="../volunteer_new/profile.php">Profile</a></li>
          <li><a href="#">Update Profile</a></li>
          <li><a href="#">Change Password</a></li>
          
        </ul>
      </li>
      <!-- <li>
        <div class="icon-link">
          <a href="#">
            <i class='bx bx-news'></i>
            <span class="link_name">Posts</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Posts</a></li>
          <li><a href="#">Recent</a></li>
          <li><a href="#">Trending</a></li>
          <li><a href="#">Most Visited</a></li>
        </ul>
      </li>
       <li>
        <div class="icon-link">
          <a href="#">
            <i class='bx bx-file-find'></i>
            <span class="link_name">Insights</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Insights</a></li>
          <li><a href="#">Money Movement</a></li>
          <li><a href="#">Enterprise Spotlight</a></li>
          <li><a href="#">Financial Burnout</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-credit-card' ></i>
          <span class="link_name">Pricing</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Pricing</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-bar-chart'></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Chart</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-compass'></i>
          <span class="link_name">Explore</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Explore</a></li>
        </ul>
      </li> -->

      
      <li>
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="link_name">Logout</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="../logout.php">Logout</a></li>
        </ul>
      </li>
      <!-- Other sidebar menu items -->
    </ul>
    <div class="profile-details">
      <div class="profile-content">
        <img src="https://sachinsamal.netlify.app/static/media/sachin-samal.d451ea9b3c53ed984bf7.png" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name"></div>
        <span class="text"><?php echo "Welcome, " . $_SESSION['username'];?></span>
        <div class="job">Infantcare Volunteer</div>
      </div>
      <i class='bx bx-log-out'></i>
    </div>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
      <span class="text">InfantCare</span>

      </div>
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
        <a href="../view_sponsor.php?s_sponsor_id=<?php echo $row['s_sponsor_id']; ?>" class="btn btn-primary">Contact Sponsor</a>
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

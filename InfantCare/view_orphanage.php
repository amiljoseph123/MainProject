<?php
require_once 'config.php';
$result = mysqli_query($con, "SELECT * FROM `orphanage` ") or die("error");
?>




<!DOCTYPE html>

<?php
session_start();
if (isset($_SESSION['username'])) {
    // User is logged in
   //echo "Welcome, " . $_SESSION['username'];
}
?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>View Orphanage</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <style>
    .col-md-4 {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }

    .card {
        border: none;
        border-radius: .50rem;
        margin: 1px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, .1);
    }

    .card img {
        max-width: 10%;
        height: auto;
    }

    .card-body {
        text-align: center;
        color: #555;
    }

    .card h3 {
        font-size: 1.25rem;
        font-weight: bold;
        margin-top: 10px;
        margin-bottom: 5px;
    }

    .card p {
        font-size: 1rem;
        color: #555;
        margin-bottom: 5px;
    }

    /* .card.bg-gradient-secondary {
        background: #f794a4;
        background: -webkit-linear-gradient(to right, #f794a4, #fdd6bd);
        background: linear-gradient(to right, #f794a4, #fdd6bd);
        color: #fff;
    } */
  
    #sidebar {
   
    background-color: #5bc1ac;
}

.navbar-menu-wrapper {
    background-color: #5bc1ac; 
}

.container-fluid.page-body-wrapper {
    background-color: #5bc1ac; 
}

.navbar.default-layout-navbar {
    background-color: #5bc1ac; 
}

.text-center.navbar-brand-wrapper {
    background-color:#5bc1ac ; 
}

span.mdi.mdi-menu {
    color: black; 
}

i.input-group-text.border-0.mdi.mdi-magnify {
    color: black; 
}
li.nav-item.d-none.d-lg-block.full-screen-link {
    color: black;
}
i.mdi.mdi-email-outline {
    color: black; 
}
i.mdi.mdi-bell-outline {
    color: black;
}
a.navbar-brand.brand-logo img {
    filter: invert(1); /* This will invert the colors of the image. */
    /* Additional styles can be added as needed */
}

.form-control::placeholder {
    color: black; 
}







    
</style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search Orphanage">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="assets/images/faces/face1.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">


                  <!-- <p class="mb-1 text-black">David Greymaax</p>
                </div>
              </a> -->
              <p class="mb-1 text-black"><?php
                  if (isset($_SESSION['username'])) {
                  echo $_SESSION['username'];
                  }?></p>
                </div>
              </a>


              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Login.php">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <!-- <span class="font-weight-bold mb-2">David Grey. H</span> -->


                  <span class="font-weight-bold mb-2"><?php
                  if (isset($_SESSION['username'])) {
                  echo $_SESSION['username'];
                  }?></span>


                  <span class="text-secondary text-small">Sponsor</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sponsor_dash.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">
                <span class="menu-title">View Orphanage</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="Login.php">
                <span class="menu-title">Signout</span>
                <i class="mdi mdi-logout menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <!-- <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">

              <div class="col-12 grid-margin stretch-card">
                <div class="card ">
                  <div class="card-body">
                    <h4 class="card-title">Orphanage List</h4>
                    <div class="row">
           <div class="container-scroller">
      <!-- Add your navbar and sidebar content here -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <?php
            while ($row = $result->fetch_assoc()) {
              $name = $row["o_name"];
              $id = $row["o_id"];
              $email = $row["o_email"];
              $phone = $row["o_phone"];
              $district = $row["o_district"];
              $city = $row["o_city"];
              $pincode = $row["o_pincode"];
            ?>
            <div class="col-md-4 stretch-card grid-margin">
               <div class="card bg-gradient-secondary card-img-holder"> 
                
              

                <div class="card-body">
                    <!-- <img src="img.jpg" alt=""> -->
                    <h3><?php echo $name; ?></h3>
<p class="title"><?php echo $email; ?></p>
                    <P><?php echo $phone; ?></P>
                    <p><?php echo $district; ?></p>
                    <p><?php echo $city; ?></p>
                    <P><?php echo $pincode; ?></P>
                    <button type="button" class="btn btn-success btn-sm">View Orphanage</button>
                </div>
              </div>
            </div>
            <?php
            }
            ?>
          </div>
        </div>
                      
                      <!-- While start-->
                      <!-- <div class="col-md-4 stretch-card grid-margin">
                        <div class="card bg-gradient-secondary card-img-holder">
                          <div class="card-body">
 -->


<!--                           
                            <h2 class="mb-5">Orphanage Name</h2>
                            <h4 class="font-weight-normal mb-3">Weekly Sales </h4>
                            
                            <h6 class="card-text"> <i class="mdi mdi-map-marker"></i>Place</h6>
                            <h6 class="card-text"> <i class="mdi mdi-phone-classic"></i> </i>Phone</h6>
                            <h6 class="card-text"> <i class="mdi mdi-email"></i>Email</h6>
                            <button type="button" class="btn btn-success btn-sm"><a href="orphanage_views.php">View Orphanage</a></button> -->


<!-- 
                            <form method="post" action="orphanage_views.php">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">  Replace 123 with your desired ID -->
                            
                            <!-- <input type="submit" name="submit" value="View "> -->
                            
                            <!-- </form> --> 
                          
                          
        


                          </div>
                        </div>
                      </div>
                      <!--while end -->
                      <!-- Add Php code here -->
      
             
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Infantcare.com 2023</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>




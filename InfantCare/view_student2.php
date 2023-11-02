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
    <title>Purple Admin</title>
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
   #sidebar {
    /* background-color: #ff6600; This sets the background color to a shade of orange. Replace with your desired color. */
    background-color: #5bc1ac;
}

.navbar-menu-wrapper {
    background-color: #5bc1ac; /* This sets the background color to a shade of blue. Replace with your desired color. */
    /* Additional styles can be added as needed */
}

.container-fluid.page-body-wrapper {
    background-color: #5bc1ac; /* This sets the background color to a shade of pink. Replace with your desired color. */
    /* Additional styles can be added as needed */
}

.navbar.default-layout-navbar {
    background-color: #5bc1ac; /* This sets the background color to a shade of blue. Replace with your desired color. */
    /* Additional styles can be added as needed */
}

.text-center.navbar-brand-wrapper {
    background-color:#5bc1ac ; /* This sets the background color to a shade of pink. Replace with your desired color. */
    /* Additional styles can be added as needed */
}

span.mdi.mdi-menu {
    color: black; /* This sets the color to a shade of orange. Replace with your desired color. */
    /* Additional styles can be added as needed */
}

i.input-group-text.border-0.mdi.mdi-magnify {
    color: black; /* This sets the color to a shade of orange. Replace with your desired color. */
    /* Additional styles can be added as needed */
}
li.nav-item.d-none.d-lg-block.full-screen-link {
    color: black; /* This sets the color to a shade of orange. Replace with your desired color. */
    /* Additional styles can be added as needed */
}
i.mdi.mdi-email-outline {
    color: black; /* This sets the color to a shade of orange. Replace with your desired color. */
    /* Additional styles can be added as needed */
}
i.mdi.mdi-bell-outline {
    color: black; /* This sets the color to a shade of orange. Replace with your desired color. */
    /* Additional styles can be added as needed */
}


a.navbar-brand.brand-logo img {
    filter: invert(1); /* This will invert the colors of the image. */
    /* Additional styles can be added as needed */
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
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
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
                <a class="dropdown-item" href="logout.php">
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
                  <span class="font-weight-bold mb-2"><?php
                  if (isset($_SESSION['username'])) {
                  echo $_SESSION['username'];
                  }?></span>
                  <span class="text-secondary text-small">Orphanage</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="orphanage_dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>


            <li class="nav-item active">
              <a class="nav-link" href="#">
                <span class="menu-title">Profile</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>


            <li class="nav-item active">
              <a class="nav-link" href="add_student.php">
                <span class="menu-title">Add Students</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>



            <li class="nav-item">
              <a class="nav-link" href="view_student2.php">
                <span class="menu-title">View students</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="Login.php">
                <span class="menu-title">Signout</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
              </li>
            
          </ul>
        </nav>
        <!-- partial -->
        




        <div class="main-panel"> 
          <!-- <div class="content-wrapper"> -->
            <div class="page-header">
              <!-- <h3 class="page-title"> Form elements </h3> -->
              <!-- <nav aria-label="breadcrumb"> -->
                <!-- <ol class="breadcrumb"> -->
                  <!-- <li class="breadcrumb-item"><a href="#">Forms</a></li> -->
                  <!-- <li class="breadcrumb-item active" aria-current="page">Form elements</li> -->
                </ol>
              </nav>
            </div>
            <!-- <div class="row"> -->
              <div class="col-md-6 grid-margin stretch-card">
                <!-- <div class="card"> -->
                  <div class="card-body">
                    <!-- <h4 class="card-title">Default form</h4> -->
                    <!-- <p class="card-description"> Basic form layout </p> --> 
                    <!-- <form 



 


                    <!-- </form> -->
                  </div>
                </div>
              </div>                        





              <!-- <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Striped Table</h4>
                    <p class="card-description"> Add class <code>.table-striped</code>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                        <th>Sl.No</th>
                                <th>firstname</th>
                                <th>lastname</th>
                                <th>age</th>
                                <th>gender</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
                            <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                          </td>
                </table> -->



                <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Striped Table</h4>
                    <p class="card-description"> Add class <code>.table-striped</code>
                    </p>



                <table class="table table-striped">
  <thead>
    <tr>
      <th>Sl.No</th>
      <th>firstname</th>
      <th>lastname</th>
      <th>age</th>
      <th>gender</th>
    </tr>
  </thead>
  <tbody>



  <?php
                require_once 'config.php';
                $result = mysqli_query($con, "SELECT * FROM `student` ") or die("error");
            ?> 
    <?php
      $c=0;
      while ($row = $result->fetch_assoc()) {
        $firstname=$row["firstname"];
        $lastname=$row["lastname"];
        $age=$row["age"];
        $gender=$row["gender"];
        $c++;
    ?>
    <tr>
      <td><?php echo $c; ?></td>
      <td><?php echo $firstname; ?></td>
      <td><?php echo $lastname; ?></td>
      <td><?php echo $age; ?></td>
      <td><?php echo $gender; ?></td>
    </tr>
    <?php
      }
    ?>
    <!-- <tr>
      <td><?php echo $c + 1; ?></td>
      <td><input type="text" class="form-control" id="inputFirstname" name="firstname" placeholder="First Name"></td>
      <td><input type="text" class="form-control" id="inputLastname" name="lastname" placeholder="Last Name"></td>
      <td><input type="text" class="form-control" id="inputAge" name="age" placeholder="Age"></td>
      <td><input type="text" class="form-control" id="inputGender" name="gender" placeholder="Gender"></td>
    </tr> -->
  </tbody>
</table>




        <br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br>
        <br><br>
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">infantcare@gmail.com</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
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
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->



    <!--

<?php
                            // $c=0;
                            // while ($row = $result->fetch_assoc()) {
                            //     $firstname=$row["firstname"];
                            //     $lastname=$row["lastname"];
                            //     $age=$row["age"];
                               
                            //     $gender=$row["gender"];
                            //     // $dob=$row["dob"];

                                


                            // $c++;
                        ?>
                <tr>
                    <td><?php echo $c; ?></td>
                    <td><?php echo $firstname; ?></td>
                    <td><?php echo $lastname; ?></td>
                    <td><?php echo $age; ?></td>
                    <td><?php echo $gender; ?></td>
                    <!-- <td><?php echo  $dob; ?></td> -->
                    
                </tr>
                <?php
                // }
                ?>
					
 -->

 
  </body>
</html>


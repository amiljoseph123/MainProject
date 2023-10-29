
<?php
include('config.php');
?>

<?php 
 session_start();
//  //echo $_SESSION["username"];
 if (isset($_SESSION['username'])) {
     // User is logged in
    // echo "Welcome, " . $_SESSION['username'];
 }
     // You can display user-specific content here
//  } else {
//      // User is not logged in, redirect to the login page
//      header("Location: login.php");
//      exit(); // Make sure to stop execution after the redirect
//  }
?>  


<body><centre>

<?php
include('navbars/sponsor.php');
?>

    <br><br><br><br><br>
<div class="heading">
     <h4>    WELCOME<BR>
<?php
         echo $_SESSION['username']; 
         ?>
         </h4></centre>
</div>
</body>

<style>
    .heading{
        text-align:center;
        text-size-adjust: 10px;
    }
    </style>
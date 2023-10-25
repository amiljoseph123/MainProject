<!-- 

// @include 'config.php';

// session_start();
// session_unset();
// session_destroy();

// header('location:Login.php');


<?php
session_start();
session_unset();
session_destroy();
header("location: index.php");
//$script = "<script> window.location = 'index.php';</script>";
    // echo $script;
?>

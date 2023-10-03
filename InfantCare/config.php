<?php
$con = mysqli_connect('localhost', 'root', '', 'Infant_care2') or die("error");   
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
?>

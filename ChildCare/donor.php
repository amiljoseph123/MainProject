<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['donor_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>donor page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hi, <span>donor</span></h3>
      <h1>welcome <span><?php echo $_SESSION['donor_name'] ?></span></h1>
       <p>Donate here</p>
      <!-- <a href="login.php" class="btn">login</a> -->
      <!-- <a href="register.php" class="btn">register</a> -->
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>


<style>
body {
  background-image: url('o3.jpg'); 
}
</style>
</style>

</html>
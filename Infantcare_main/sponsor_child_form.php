<?php include "sponsor_sidebar2.php";?>

!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="child_apln_style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Application</div>
    <div class="content">
      <form action="#" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" id="first" name="first" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" id="last" name="last" placeholder="Enter your lastname" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" id="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" id="pphone" name="pphone" placeholder="Enter your phone number" required>
          </div>
          <div class="input-box">
            <span class="details">Aadhar</span>
            <input type="text" id="aaadhar" name="aaadhar" placeholder="Enter your aadhar" required>
          </div>
          <div class="input-box">
            <span class="details">District</span>
            <input type="text" id="district" name="district" placeholder="Enter your district" required>
          </div>
          <div class="input-box">
            <span class="details">address</span>
            <input type="text" id="address" name="address" placeholder="Enter your address" required>
          </div>
          <div class="input-box">
            <span class="details">Dob</span>
            <input type="date" id="dob" name="dob" placeholder="date of birth" required>
          </div>
          
          <!-- <div class="input-box">
            <span class="details">marital status</span>
            <input type="text" placeholder="enter marital status" required>
          </div> -->
          <div class="input-box">
    <span class="details">Marital Status</span>
    <select class="details" id="marital" name="marital"required>
        <option value="" disabled selected>Select Marital Status</option>
        <option value="single">Single</option>
        <option value="married">Married</option>
        <option value="divorced">Divorced</option>
        <option value="widowed">Widowed</option>
    </select>
</div>

<div class="gender-details">
    <input type="radio" name="gender" id="dot-1" value="Male">
    <input type="radio" name="gender" id="dot-2" value="Female">
    <!-- <input type="radio" name="gender" id="dot-3" value="Prefer not to say"> -->
    <span class="gender-title">Gender</span>
    <div class="category">
        <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
        </label>
        <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
        </label>
        <!-- <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
        </label> -->
    </div>
</div>

<!-- 
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender"name="gender" id = "gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender" name="gender" id = "gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender" name="gender" id = "gender">Prefer not to say</span>
            </label>
          </div> -->
        </div>
        <div class="button">
        <input type="submit" name="submit" value="Apply">
        </div>
      </form>
    </div>
  </div>

</body>
</html>



<?php


// include "config.php";

// if (isset($_POST['submit'])) {
//     $fname = $_POST['first'];
//     $lname = $_POST['last'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $aadhar = $_POST['aadhar'];
//     $district = $_POST['district'];
//     $address = $_POST['address'];
//     $dob = $_POST['dob'];
//     $marital = $_POST['marital'];
//     $gender = $_POST['gender'];

//     $query = "INSERT INTO `sponsor_child` (`id`, `fname`, `lname`, `email`, `phone`, `aadhar`, `district`, `address`, `dob`, `marital`, `gender`, `status`) 
//               VALUES (default, '$fname', '$lname', '$email', '$phone', '$aadhar', '$district', '$address', '$dob', '$marital', '$gender', '')";

//     mysqli_query($con, $query) or die(mysqli_error($con));
// }





include "config.php";

if (isset($_POST['submit'])) {
    $fname = mysqli_real_escape_string($con, $_POST['first']);
    $lname = mysqli_real_escape_string($con, $_POST['last']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pphone = mysqli_real_escape_string($con, $_POST['pphone']);
    $aaadhar = mysqli_real_escape_string($con, $_POST['aaadhar']);
    $district = mysqli_real_escape_string($con, $_POST['district']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $marital = mysqli_real_escape_string($con, $_POST['marital']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);

    $query = "INSERT INTO `sponsor_child` (`id`, `fname`, `lname`, `email`, `pphone`, `aaadhar`, `district`, `address`, `dob`, `marital`, `gender`,`status`) 
              VALUES (default, '$fname', '$lname', '$email', '$pphone', '$aaadhar', '$district', '$address', '$dob', '$marital', '$gender','pending')";

    mysqli_query($con, $query) or die(mysqli_error($con));
    echo "Record inserted successfully!";
}


?>

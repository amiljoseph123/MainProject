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
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" placeholder="Enter your lastname" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your phone number" required>
          </div>
          <div class="input-box">
            <span class="details">Aadhar</span>
            <input type="text" placeholder="Enter your aadhar" required>
          </div>
          <div class="input-box">
            <span class="details">address</span>
            <input type="text" placeholder="Enter your address" required>
          </div>
          <div class="input-box">
            <span class="details">Dob</span>
            <input type="date" placeholder="date of birth" required>
          </div>
          <!-- <div class="input-box">
            <span class="details">marital status</span>
            <input type="text" placeholder="enter marital status" required>
          </div> -->
          <div class="input-box">
    <span class="details">Marital Status</span>
    <select class="details" required>
        <option value="" disabled selected>Select Marital Status</option>
        <option value="single">Single</option>
        <option value="married">Married</option>
        <option value="divorced">Divorced</option>
        <option value="widowed">Widowed</option>
    </select>
</div>

        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
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
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Apply">
        </div>
      </form>
    </div>
  </div>

</body>
</html>

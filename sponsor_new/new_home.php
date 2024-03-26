<?php include 'header.php' ?>
<?php include 'sidebar.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Three Cards</title>
<style>
  /* Flex Container */
  .container {
    display: flex;
    flex-direction: column; /* Stack elements vertically */
    align-items: flex-start; /* Align items to the start */
    height: 100vh; /* Full height of viewport */
  }

  /* Sidebar Styles */
  .sidebar {
    background-color: #f8f9fa; /* Light gray background */
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Box shadow for depth */
    width: 20%; /* Adjust sidebar width as needed */
    overflow-y: auto; /* Add vertical scrollbar if content exceeds sidebar height */
  }

  .sidebar h5 {
    color: #333; /* Dark gray text color */
    margin-bottom: 15px;
  }

  .sidebar .nav-link {
    color: #007bff; /* Blue link color */
    transition: all 0.3s ease; /* Smooth transition for hover effect */
  }

  .sidebar .nav-link:hover,
  .sidebar .nav-link:active {
    color: #0056b3; /* Darker blue color on hover and when clicked */
  }

  .sidebar .nav-link.active {
    font-weight: bold; /* Bold font for active link */
  }

  /* Card Container Styles */
  .card-container {
    display: flex;
    flex-wrap: wrap; /* Ensure cards wrap to next line if they exceed container width */
    justify-content: flex-start; /* Align cards at the start of the container */
    width: 80%; /* Adjust card container width as needed */
    padding: 20px;
  }

  /* Card Styles */
  .card {
    flex: 0 0 calc(33.33% - 20px); /* Set card width to 1/3 of container width minus margins */
    margin: 10px; /* Margin between cards */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    height: 200px; /* Adjust card height as needed */
  }

  .card-title {
    font-size: 16px;
    color: #333;
    margin-bottom: 5px;
  }

  .card-description {
    font-size: 14px;
    color: #666;
    margin-bottom: 10px;
  }

  .btn {
    display: inline-block;
    padding: 6px 12px;
    font-size: 14px;
    background-color: #007bff;
    color: #fff;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }

  .btn:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>

<div class="container">
  <!-- Header -->


  <!-- Card Container -->
  <div class="card-container">
    <div class="card">
      <h2 class="card-title">Card 1</h2>
      <p class="card-description">This is the description for Card 1.</p>
      <a href="#" class="btn">Button</a>
    </div>

    <div class="card">
      <h2 class="card-title">Card 2</h2>
      <p class="card-description">This is the description for Card 2.</p>
      <a href="#" class="btn">Button</a>
    </div>

    <div class="card">
      <h2 class="card-title">Card 3</h2>
      <p class="card-description">This is the description for Card 3.</p>
      <a href="#" class="btn">Button</a>
    </div>
  </div>
</div>

</body>
</html>

<!-- Sidebar -->
<div class="sidebar">
  <h5>Username </h5>
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link active" href="#" hx-get="content.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" hx-get="/path/to/second_content.php">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" hx-get="/path/to/third_content.php">Update Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" hx-get="/path/to/second_content.php">Change Pssword</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" hx-get="/path/to/third_content.php">Logout</a>
    </li>
    <!-- Add more sidebar links as needed -->
  </ul>
</div>
<style>
/* Sidebar Styles */
.sidebar {
  background-color: #f8f9fa; /* Light gray background */
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Box shadow for depth */
  width: 20%; /* Adjust sidebar width as needed */
  height: 100vh; /* Make sidebar full height of viewport */
  overflow-y: auto; /* Add vertical scrollbar if content exceeds viewport height */
}

.sidebar h5 {
  color: #333; /* Dark gray text color */
  margin-bottom: 15px;
  font-size: 18px; /* Adjust font size */
  text-transform: uppercase; /* Uppercase text */
  letter-spacing: 1px; /* Increase letter spacing */
}

.sidebar .nav-link {
  color: #007bff; /* Blue link color */
  transition: all 0.3s ease; /* Smooth transition for hover effect */
  font-size: 16px; /* Adjust font size */
}

.sidebar .nav-link:hover,
.sidebar .nav-link:active {
  color: #0056b3; /* Darker blue color on hover and when clicked */
}

.sidebar .nav-link.active {
  font-weight: bold; /* Bold font for active link */
}

</style>

<style>
/* Sidebar Styles */
.sidebar {
  background-color: #5ac1bc; /* Light gray background */
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Box shadow for depth */
  width: 20%; /* Make sidebar full width */
  height: 100vh; /* Make sidebar full height of viewport */
  overflow-y: auto; /* Add vertical scrollbar if content exceeds viewport height */
}

.sidebar h5 {
  color:  #5ac1bc; /* Dark gray text color */
  margin-bottom: 15px;
}

.sidebar .nav-link {
  color: #007bff; /* Blue link color */
  transition: all 0.3s ease; /* Smooth transition for hover effect */
}

.sidebar .nav-link:hover,
.sidebar .nav-link:active {
  color: #5ac1bc; /* Darker blue color on hover and when clicked */
}

.sidebar .nav-link.active {
  font-weight: bold; /* Bold font for active link */
}

</style>

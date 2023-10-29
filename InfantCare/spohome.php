

<?php 
 session_start();
//  //echo $_SESSION["username"];
 if (isset($_SESSION['username'])) {
     // User is logged in
    //  echo "Welcome, " . $_SESSION['username'];
 }
     // You can display user-specific content here
//  } else {
//      // User is not logged in, redirect to the login page
//      header("Location: login.php");
//      exit(); // Make sure to stop execution after the redirect
//  }
?>  
<?php
require 'header.php';
?> 


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sponsor's Home Page</title>
    <style>
        

         body {
        font-family: Arial, sans-serif;
         /* margin: 0;
        padding: 0;  */
        background-image: url(o6.jpg);
        background-size: contain;
    } 

        header {
            background-color: #2c7f52;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        h1 {
            margin: 0;
        }

        section {
            padding: 2em;
            text-align: center;
        }

        .sponsor-logo {
            max-width: 200px;
            margin-bottom: 1em;
        }

        .sponsor-description {
            font-size: 1.2em;
            margin-bottom: 2em;
        }

        .cta-button {
            padding: 1em 2em;
            font-size: 1em;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .cta-button:hover {
            background-color: #555;
        }

        footer {
            background-color: #2c7f52;
            color: #fff;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome </h1>
        <?php
         echo $_SESSION['username']; 
         ?>
        
    </header>
    

    <section>
        <!-- <img class="sponsor-logo" src="sponsor-logo.png" alt="Sponsor's Logo"> -->
        <!-- <h1><p class="sponsor-description">..Be a sponsor We are proud to support..</p></h1><br><br><br><br><br>
        <a class="cta-button" href="#">Learn More</a><br><br><br>
        <a class="cta-button" href="update.php?username=<?php echo $_SESSION['username'];?>">Edit</a>

        <a class="cta-button"href="Login.php">Logout</a>
        
    </section>

    

    <footer>
        &copy; 2023 Sponsor's Name
    </footer>
</body>
</html>  -->
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <body>
        
        <?php
//include('navbar/navbar.php');
?> 




    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sponsor Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .profile-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            text-align: center;
        }

        .profile-info {
            margin-bottom: 20px;
        }

        .profile-info label {
            font-weight: bold;
        }

        .button-container {
            text-align: center;
        }

        .button-container button {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .edit-btn {
            background-color: #4caf50;
            color: #fff;
        }

        .logout-btn {
            background-color: #f44336;
            color: #fff;
        }
    </style>
</head>

<body>
    <br><br><br><br><br>
<div class="profile-container">
    <centre> <H4>    WELCOME<BR>
<?php
         echo $_SESSION['username']; 
         ?>
         </H4></centre>
        
    <!-- <div class="profile-container">
        <div class="profile-info">
            <label for="sponsor-name">Name:</label>
            
            <span id="sponsor-name"><?php echo $_SESSION['name'];?></span>
        </div>
        <div class="profile-info">
            <label for="sponsor-email">Email:</label>
             <span id="sponsor-email">john@example.com</span> -->

            <!-- <span id="sponsor-email"><?
            // php echo $_SESSION['email'];
            ?></span>
        </div>
        <div class="profile-info">
            <label for="sponsor-address">Address:</label>
            <span id="sponsor-address">123 Main Street, Cityville</span>
        </div>  -->
    
        <div class="button-container">
            <button class="edit-btn" onclick="editProfile()">Edit Profile</button>
           
            <button onclick="viewOrphanage()">View Orphanage</button>

            <button class="logout-btn" onclick="logout()">Logout</button>
           
        
        </div>
    </div>

    <script>
        function editProfile() {
            alert("Do you want to edit your page ?");
            
            window.location.href = 'update.php';
        }

        function logout() {
            alert("Logout successful");
            
            window.location.href = 'Login.php';
        }

        function viewOrphanage() {
            alert("Redirect to orphanage details page");
            window.location.href = 'orphanage.php';
          
        }
    </script>
    <br><br><br><br><br><br><br><br><br>
</body>

</html>

<?php
 require 'footer.php';
?> 
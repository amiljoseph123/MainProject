<!-- <?php 
  session_start();
 //  //echo $_SESSION["username"];
  if (isset($_SESSION['username'])) {
      // User is logged in
      echo "Welcome, " . $_SESSION['username'];
      // You can display user-specific content here
  } else {
      // User is not logged in, redirect to the login page
      header("Location: login.php");
      exit(); // Make sure to stop execution after the redirect
 }
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orphanage's Home Page</title>
    <style>
        

         body {
        font-family: Arial, sans-serif;
         /* margin: 0;
        padding: 0;  */
        background-image: url(o1.jpg) ;
        background-size: cover;
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
        <h1><p class="sponsor-description">.. We are proud to support..</p></h1><br><br><br><br><br>
        <a class="cta-button" href="#">Learn More</a><br><br><br>
        <a class="cta-button"href="Login.php">Logout</a>
    </section>

    

    <footer>
        &copy; 2023 Orphanage's Name
    </footer>
</body>
</html>

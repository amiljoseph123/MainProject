<?php
// Include necessary files and start session if required
session_start();
include('../config.php');
include('a.php');

// Check if sponsor ID is provided in the URL
if (isset($_GET['s_sponsor_id'])) {
    $s_sponsor_id = $_GET['s_sponsor_id'];
// echo $s_sponsor_id;
    // Retrieve sponsor details from the database
    $sql = "SELECT * FROM sponsor WHERE s_sponsor_id  = '$s_sponsor_id'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $sponsor_details = mysqli_fetch_assoc($result);
        // Display sponsor details
        // You can use HTML to format and display the details
        // echo "<h2>Sponsor Details</h2>";
         $sponsor_details['s_name'] ;
         $sponsor_details['s_email'] ;
         $sponsor_details['s_phone'] ;
         $sponsor_details['s_aadhar'];

        // Add more details as needed
    } else {
        echo "Sponsor not found.";
    }
} else {
    echo "Sponsor ID not provided.";
}

// Include footer or any additional code as needed
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sponsor's Details</title>
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 10px;
            padding: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

      
        .card-body {
            padding: 10px;
            text-align: center; 
        }

        .card p {
            margin: 5px 0;
        }
        .cards-list {
  z-index: 0;
  width: 100%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.card {
  margin: 30px auto;
  width: 500px;
  height: 500px;
  border-radius: 40px;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
  align-items: center;
}

.card .card_image {
  width: inherit;
  height: inherit;
  border-radius: 40px;
}

.card .card_image img {
  width: inherit;
  height: inherit;
  border-radius: 40px;
  object-fit: cover;
}

.card .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 30px;
  margin-top: -80px;
  height: 40px;
}

.card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}

.title-white {
  color: white;
}

.title-black {
  color: black;
}
.card-header{
  text-align: center; 
}
/* .card img {
            max-width: 100%; /* Ensure the image does not exceed the card width */
            border-radius: 5px; /* Optional: Apply border-radius to the image */
        /* } */ */

@media all and (max-width: 500px) {
  .card-list {
    /* On small screens, we are no longer using row direction but column */
    flex-direction: column;
  }
}


        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            max-width: 400px;
            width: 100%;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .card-body {
            padding: 20px;
        }

        .card-body p {
            margin: 10px 0;
        }

        .card-body img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .card-body p strong {
            font-weight: bold;
        }
    

    </style>
</head>
<body>
<div class="card">
    <div class="card-header">
        <h2>Sponsor's Details</h2>
    </div>
    <div class="card-body">
        <p><strong>Name:</strong> <?php echo $sponsor_details['s_name']; ?></p>
        <p><strong>Email:</strong> <?php echo $sponsor_details['s_email']; ?></p>
        <p><strong>Phone:</strong> <?php echo $sponsor_details['s_phone']; ?></p>
        <p><strong>Aadhar:</strong> <?php echo $sponsor_details['s_aadhar']; ?></p>
        <!-- <img src="https://via.placeholder.com/150" alt="Sample Image"> -->
        
        <!-- <img src="hand.jpg" alt="Sponsor's Image"> -->
        <!-- <img src="https://in.images.search.yahoo.com/images/view;_ylt=Awr1SVKfEiBm9fAp6Tm9HAx.;_ylu=c2VjA3NyBHNsawNpbWcEb2lkAzMwOTkzNWUzN2Q3YzA3ZGI0NTk3ZDRhZjQ0Y2VlZGM3BGdwb3MDOQRpdANiaW5n?back=https%3A%2F%2Fin.images.search.yahoo.com%2Fsearch%2Fimages%3Fp%3Dholding%2Bhand%2Bimages%2Bof%2Ba%2Bchildren%2Blove%26ei%3DUTF-8%26type%3DE210IN826G0%26fr%3Dmcafee%26fr2%3Dsa-gp-search%26tab%3Dorganic%26ri%3D9&w=800&h=534&imgurl=thumbs.dreamstime.com%2Fb%2Fmother-holding-hand-her-child-isolated-mother-holding-hand-her-child-isolated-white-background-love-family-togetherness-109269444.jpg&rurl=https%3A%2F%2Fwww.dreamstime.com%2Fmother-holding-hand-her-child-isolated-mother-holding-hand-her-child-isolated-white-background-love-family-togetherness-image109269444&size=19.5KB&p=holding+hand+images+of+a+children+love&oid=309935e37d7c07db4597d4af44ceedc7&fr2=sa-gp-search&fr=mcafee&tt=Mother+Holding+Hand+Of+Her+Child+Isolated+Stock+Photo+-+Image+of+love+...&b=0&ni=90&no=9&ts=&tab=organic&sigr=V.v2fo1Iw19I&sigb=9v8bLy.R_KSR&sigi=.LWjVTQhldSM&sigt=GLQFWpCXrmOB&.crumb=doTFD7VKUGg&fr=mcafee&fr2=sa-gp-search&type=E210IN826G0" alt="Sample Image"> -->
    </div>
</div>
</body>
</html>



 </section>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Toggle submenu visibility when arrow is clicked
      let arrows = document.querySelectorAll(".arrow");
      arrows.forEach((arrow) => {
        arrow.addEventListener("click", () => {
          let arrowParent = arrow.parentElement.parentElement;
          arrowParent.classList.toggle("showMenu");
        });
      });






      // Toggle sidebar visibility when menu button is clicked
      let sidebar = document.querySelector(".sidebar");
      let menuButton = document.querySelector(".bx-menu");

      menuButton.addEventListener("click", () => {
        sidebar.classList.toggle("close");
        sidebar.classList.remove("showMenu"); // Ensure submenu is hidden when sidebar is closed
      });
    });
  </script>

</body>
</html>
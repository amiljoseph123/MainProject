<?php
 include "sponsor_sidebar2.php";?>
 






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Convent Foundation
    </title>
    <link rel="stylesheet" href="donation_css/styles.css">
    <link rel="stylesheet" href="donation_css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<style>
    .don-box {
        margin-bottom: 20px; /* Adjust the margin as needed */
    }

    .don-box img {
        max-width: 100%; /* Ensure images don't exceed the container width */
        height: auto; /* Maintain aspect ratio */
    }
    .btn1 {
    background-color: #5bc1ac;
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
}

</style>
<style>
.btn2 {
    /* width: 220px;
    height: 50px; */
    border: none;
    outline: none;
    color: #fff;
    background:#5bc1ac;
    cursor: pointer;
    position: relative;
    z-index: 0;
    text-decoration: none;
    /* border-radius: 10px; */
    padding: 10px 20px;
    border-radius: 5px;
}

.btn2:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.btn2:active {
    color: #000
}

.btn2:active:after {
    background: transparent;
}

.btn2:hover:before {
    opacity: 1;
}

.btn2r:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
</style>
<style>
       
       

        /* Style for the modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            max-width: 400px;
            width: 100%;
            text-align: center; /* Center the content within the modal */
        }

        /* Close button style */
        .close {
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        select, input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
<body>
    <!-- <div class="fixed-top"> -->
        <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sponsor Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="sponsorForm" method="post">
            <label for="gender">Choose Gender:</label>
            <select id="gender" name="gender">
                <option value="gents">Boys</option>
                <option value="ladies">Girls</option>
            </select>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="1" max="100" required>

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>

            <!-- <input type="submit" class="btn2"id="btn2" value="Submit"> -->
            <input type="submit" class="btn2" name="btn2" id="btn2" value="Submit">

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal 2-->
<div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sponsor Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="sponsorForm" method="post">
    <label for="sitem">Select Item:</label>
    <select id="sitem" name="sitem">
        <option value="pen">Pen</option>
        <option value="pencil">Pencil</option>
        <option value="notebook">Notebook</option>
        <!-- Add more options as needed -->
    </select>


    <label for="quantity">Quantity:</label>
    <input type="number" id="squantity" name="squantity" min="1" max="1000" required>

    <input type="submit" class="btn2" name="btn2" id="btn2" value="Submit">
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal 3-->
<div class="modal fade" id="exampleModa3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sponsor Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="sponsorForm" method="post">
    <label for="item">Select Gadget:</label>
    <select id="item" name="item">
        <option value="smartphone">Smartphone</option>
        <option value="tablet">Tablet</option>
        <option value="laptop">Laptop</option>
        <!-- Add more options as needed -->
    </select>

    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" min="1" max="1000" required>

    <input type="submit" class="btn2" name="btn2" id="btn2" value="Submit">
</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>





        <header>
                </div>
  

    <section class="don-sec" id="donation">
        <div class="container">
            <div class="heading">
                <h2>&nbsp;Sponsor...</h2>
                
            </div>
            <div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-lg-4">
            <div class="don-box">
                <img src="donation_img/don/clothing.png" alt="Clothes">
                <h3>Clothes</h3>
                <p>"Wear kindness, sponsor bright tomorrows,help to create better future"</p>
                <!-- <a href="#contact" class="btn1">Sponsor Now</a> -->
                
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Sponsor Now..
                </button>
            </div>
        </div>



        <div class="col-lg-4">
            <div class="don-box">
                <img src="donation_img/don/gadgets.png" alt="Gadgets">
                <h3>Gadgets</h3>
                <p>"Gift gadgets, empower young souls,help to create better future"</p>
                <!-- <a href="#contact" class="btn1">Sponsor Now</a> -->
                <!-- <a href="#" class="btn2" onclick="openModal2()">Sponsor Now</a> -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModa3">
                    Sponsor Now..
                </button>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="don-box">
                <img src="donation_img/don/book.png" alt="Stationary">
                <h3>Stationary</h3>
                <p>"Sponsor hope, gift the magic of stationery,help to create better future"</p>
                <!-- <a href="#contact" class="btn1">Sponsor Now</a> -->
                <!-- <a href="#" class="btn2" onclick="openModal3()">Sponsor Now</a> -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModa2">
                    Sponsor Now..
                </button>

            </div>
        </div>
    </div>
</div>
        </div>
</section>
  
    
<!-- The Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal1()">&times;</span>
        <h2>Let's Sponsor</h2>
        <form id="sponsorForm" method="post">
            <label for="gender">Choose Gender:</label>
            <select id="gender" name="gender">
                <option value="gents">Boys</option>
                <option value="ladies">Girls</option>
            </select>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="1" max="100" required>

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>

            <!-- <input type="submit" class="btn2"id="btn2" value="Submit"> -->
            <input type="submit" class="btn2" name="btn2" id="btn2" value="Submit">

        </form>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- 



<?php
include "config.php";
if (isset($_POST['btn2'])) {
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $quantity = $_POST['quantity'];
    $query = "INSERT INTO `cloth`(`gender`, `age`, `quantity`) VALUES ('$gender','$age','$quantity')";
    mysqli_query($con, $query);
}

?>



<!-- The Modal -->
<div id="myModal2" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal2()">&times;</span>
        <h2>Let's Sponsor</h2>
        <!-- <form id="sponsorForm">
            <label for="item">Item Name:</label>
            <input type="text" id="item" name="item" required> -->
            <form id="sponsorForm1">
    <label for="item">Choose Gadget Item:</label>
    <select id="item" name="item" required>
        <option value="smartphone">Smartphone</option>
        <option value="laptop">Laptop</option>
        <option value="smartwatch">Smartwatch</option>
        <option value="headphones">Headphones</option>
        <!-- Add more gadget items as needed -->
    </select>

    

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>

            <!-- <input type="submit" class="btn3" id = "btn3"value="Submit"> -->
            <!-- <input type="submit" class="btn3"id="btn3" value="Submit"> -->
            <input type="submit" class="btn3" id="btn3" value="Submit">
            
        </form>
    </div>
</div>





<!-- The Modal -->
<div id="myModal3" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal3()">&times;</span>
        <h2>Let's Sponsor</h2>
        

            <form id="sponsorForm2">
            <!-- <label for="item">Item:</label>
            <input type="text" id="item" name="item" required>  -->

            <select id="item" name="item">
                <option value="stationary">Bag</option>
                <option value="clothing">Book</option>
                <option value="toys">Toys</option>
            </select>

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Sponsor Now..
                </button>
        </form>
    </div>
</div>



</body>
    <script src="js/script.js"></script>
</body>




<?php
include "config.php";
// include "config.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $quantity = $_POST['quantity'];
       
    

    $query = "INSERT INTO `cloth` (`id`, `gender`, `age`, `quantity`) 
              VALUES (default, '$gender', '$age', '$quantity')";

    mysqli_query($con, $query) or die(mysqli_error($con));
    echo "Record inserted successfully!";
    // echo "Query: $query";

}
else {
    die("Error: " . mysqli_error($con));
}

?>  

<?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $item = $_POST['item'];
        $quantity = $_POST['quantity'];
       
    

    $query = "INSERT INTO gadgets (id, item,quantity) 
              VALUES (default, '$item','$quantity')";

    mysqli_query($con, $query) or die(mysqli_error($con));
    echo "Record inserted successfully!";
    // echo "Query: $query";

}
else {
    die("Error: " . mysqli_error($con));
}

?>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sitem = $_POST['sitem'];
    $squantity = $_POST['squantity'];
   


$query = "INSERT INTO stationary (id, sitem,squantity) 
          VALUES (default, '$sitem','$squantity')";

mysqli_query($con, $query) or die(mysqli_error($con));
echo "Record inserted successfully!";
// echo "Query: $query";

}
else {
die("Error: " . mysqli_error($con));
}

?>

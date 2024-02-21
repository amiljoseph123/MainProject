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

        <header>
            <!-- <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="#home">Code Convent Foundation</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <!-- <li class="nav-item active">
                                <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#donation">Donations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mission-id">Missions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li> -->
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <!-- <div class="cont-sec"> -->
            <!-- <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>Contact No : <a href="tel: +9198659****59">+91 98659****59</a></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="social">
                            <a href="#"><img src="donation_img/icons/facebook.png" alt="facebook"></a>
                            <a href="#"><img src="donation_img/icons/instagram.png" alt="inatagram"></a>
                            <a href="#"><img src="donation_img/icons/youtube.png" alt="youtube"></a>
                            <a href="#"><img src="donation_img/icons/linkedin.png" alt="linkedin"></a>
                            <a href="#"><img src="donation_img/icons/gmail.png" alt="gnail"></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- <section class="home-sec" id="home">
        <div class="container">
            <div class="home-content">
                <div class="row"> -->
                    <!-- <div class="col-lg-6 align-item-center"> -->
                        <!-- <div class="home-info">
                            <h1>Alone we can do little, together we can do so much</h1>
                            <h2>We <span>Code Convent foundation</span> manage wastage for needy peoples</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nobis voluptates modi.</p>
                            <div class="buttons">
                                <a href="#contact" class="btn1">Donate now</a>
                            </div> -->
                        <!-- </div> -->
                    </div>
                    <!-- <div class="col-lg-6 order-first order-lg-last">
                        <div class="img-sec">
                            <img src="donation_img/img-1.png" alt="home-image">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                <a href="#" class="btn2" onclick="openModal1()">Sponsor Now..</a>
            </div>
        </div>



        <div class="col-lg-4">
            <div class="don-box">
                <img src="donation_img/don/gadgets.png" alt="Gadgets">
                <h3>Gadgets</h3>
                <p>"Gift gadgets, empower young souls,help to create better future"</p>
                <!-- <a href="#contact" class="btn1">Sponsor Now</a> -->
                <a href="#" class="btn2" onclick="openModal2()">Sponsor Now</a>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="don-box">
                <img src="donation_img/don/book.png" alt="Stationary">
                <h3>Stationary</h3>
                <p>"Sponsor hope, gift the magic of stationery,help to create better future"</p>
                <!-- <a href="#contact" class="btn1">Sponsor Now</a> -->
                <a href="#" class="btn2" onclick="openModal3()">Sponsor Now</a>
                

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


<script>
    // Open the modal
    function openModal1() {
        document.getElementById('myModal').style.display = 'flex';
    }

    // Close the modal
    function closeModal1() {
        document.getElementById('myModal').style.display = 'none';
    }

    // Close the modal if the user clicks outside the modal content
    window.onclick = function(event) {
        var modal = document.getElementById('myModal');
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }

    // Form submission handling (you can customize this part)
    document.getElementById('sponsorForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // You can access form values using the following:
        var gender = document.getElementById('gender').value;
        var age = document.getElementById('age').value;
        var quantity = document.getElementById('quantity').value;

        // Add your logic here to handle the form data (e.g., submit it via AJAX)
        // For this example, we'll just log the values to the console
        console.log("Gender: " + gender);
        console.log("Age: " + age);
        console.log("Quantity: " + quantity);

        // Close the modal after form submission
        closeModal1();
    });
</script>


<?php
include "config.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['btn2'])) {
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);

    $query = "INSERT INTO `cloth` (`id`, `gender`, `age`, `quantity`) VALUES (default, '$gender', '$age', '$quantity')";

    if (mysqli_query($con, $query)) {
        echo '<script>alert("Registration is successful");</script>';
    } else {
        echo '<script>alert("Registration failed: ' . mysqli_error($con) . '");</script>';
    }
} else {
    // echo '<script>alert("Form not submitted");</script>';
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


<script>
document.getElementById("sponsorForm1").addEventListener("submit", function(event) {
    // Prevent the default form submission
    event.preventDefault();

    // Show SweetAlert on form submission
    Swal.fire({
        title: "Thank you!",
        text: "we are greatful to receive this !",
        icon: "success",
        timer: 10000, // Set the timer to 10 seconds (in milliseconds)
        showConfirmButton: false // Hide the "OK" button
    });
});
</script>



<script>
    // Open the modal
    function openModal2() {
        document.getElementById('myModal2').style.display = 'flex';
    }

    // Close the modal
    function closeModal2() {
        document.getElementById('myModal2').style.display = 'none';
    }

    // Close the modal if the user clicks outside the modal content
    window.onclick = function (event) {
        var modal = document.getElementById('myModal2');
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }

    // Form submission handling (you can customize this part)
    document.getElementById('sponsorForm').addEventListener('submit', function (event) {
        event.preventDefault();

        // You can access form values using the following:
        var itemName = document.getElementById('item').value;
        var quantity = document.getElementById('quantity').value;

        // Add your logic here to handle the form data (e.g., submit it via AJAX)
        // For this example, we'll just log the values to the console
        console.log("Item Name: " + itemName);
        console.log("Quantity: " + quantity);

        // Close the modal after form submission
        closeModal2();
    });
</script>





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

            <input type="submit" id="btn3" class= "btn3" value="Submit">
        </form>
    </div>
</div>


<script>
document.getElementById("sponsorForm2").addEventListener("submit", function(event) {
    // Prevent the default form submission
    event.preventDefault();

    // Show SweetAlert on form submission
    Swal.fire({
        title: "Thank you!",
        text: "we are greatful to receive this !",
        icon: "success",
        timer: 10000, // Set the timer to 10 seconds (in milliseconds)
        showConfirmButton: false // Hide the "OK" button
    });
});
</script>


<script>
    // Open the modal
    function openModal3() {
        document.getElementById('myModal3').style.display = 'flex';
    }

    // Close the modal
    function closeModal3() {
        document.getElementById('myModal3').style.display = 'none';
    }

    // Close the modal if the user clicks outside the modal content
    window.onclick = function(event) {
        var modal = document.getElementById('myModal1');
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }

    // Form submission handling (you can customize this part)
    document.getElementById('sponsorForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // You can access form values using the following:
        var item = document.getElementById('item').value;
        var quantity = document.getElementById('quantity').value;

        // Add your logic here to handle the form data (e.g., submit it via AJAX)
        // For this example, we'll just log the values to the console
        console.log("Item: " + item);
        console.log("Quantity: " + quantity);

        // Close the modal after form submission
        closeModal3();
    });
</script>

<script>
document.getElementById("sponsorForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevents the default form submission

    // Add your form processing logic here if needed
    
    // Show SweetAlert on form submission
    Swal.fire({
        title: "Great job!",
        text: "Thanks for your contribution!",
        icon: "success"
    });
});
</script>


</body>
    <script src="js/script.js"></script>
</body>



<?php
// include "footer.php";?>

<?php

// include "config.php";


//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         $gender = $_POST['gender'];
//         $age = $_POST['age'];
//         $quantity = $_POST['quantity'];
       
    

//     $query = "INSERT INTO `cloth` (`id`, `gender`, `age`, `quantity`) 
//               VALUES (default, '$gender', '$age', '$quantity')";

//     mysqli_query($con, $query) or die(mysqli_error($con));
//     echo "Record inserted successfully!";
//     // echo "Query: $query";

// }
// else {
//     die("Error: " . mysqli_error($con));
// }



?>


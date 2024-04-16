<?php 
session_start();
 //echo $_SESSION["username"];
if (isset($_SESSION['username'])) {
    // User is logged in
    // echo "Welcome, " . $_SESSION['username'];
    // You can display user-specific content here
} else {
    // User is not logged in, redirect to the login page
    header("Location: login.php");
    exit(); // Make sure to stop execution after the redirect
}
?>
<?php
include 'a.php';
?>


<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  max-width: 100vw;
  max-height: 100vh;
}
body{
  background-color: #111111;
  display: flex;
  align-items: center;
  justify-conter: center;
  font-family: 'Poppins', sans-serif;
}
#container{
  width: 90%;
  margin: 5%;
  height: 10vh;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  gap: 3%;
  transition: flex-wrap 0.5s ease;
}
.element{
  width: 300px;
  height: 200px;
  background-color: #000;
  border-radius: 15px;
  cursor: pointer;
  transition: 0.5s all;
  display: flex;
  align-items: center;
  justify-content: center;
}
.element:hover{
  width: 330px;
  height: 230px;
}
.element:hover p{
  display: block;
}
.element p{
  font-size: 2rem;
  background-color: #fff;
  padding: 40px;
  border-radius: 15px;
  display: none;
  transition: 0.5s all;
}
#first{
  background-image: url(https://img.freepik.com/free-vector/gradient-podium-background_52683-76369.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
#second{
  background-image: url(https://img.freepik.com/premium-photo/3d-rendering-podium-realistic-background_743950-255.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
#third{
  background-image: url(https://img.freepik.com/free-vector/realistic-podium-background_52683-77824.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
</style>


</head>

<!-- ########################content############### -->


<div id="container">
  <div id="second" class="element">
    <p><a href="../volunteer_new/duty.php">DUTIES</a></p>
  </div>


<div id="first" class="element">
  <p><a href="../volunteer_new/aevent.php">Events</a></p>
</div>
<div id="third" class="element">
  <p>CHAT</p>
</div>
</div>

<!-- ##################################### -->
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
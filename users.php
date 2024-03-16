<?php 
  session_start();
  include_once "config.php";
  if(!isset($_SESSION['username'])){
    header("location: login.php");
  }
?>
<?php 
include_once "c_header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            // $sql = mysqli_query($con, "SELECT * FROM sponsor WHERE s_email = {$_SESSION['username']}");
            $email = mysqli_real_escape_string($con, $_SESSION['username']);
            $sql = mysqli_query($con, "SELECT * FROM sponsor WHERE s_email = '{$email}'");
            
           
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <!-- <img src="php/images/<?php echo $row['img']; ?>" alt=""> -->
          <div class="details">
            <span><?php echo $row['s_name']. " "  ?></span>
            <!-- <p><?php echo $row['status']; ?></p> -->
          </div>
        </div>
        <!-- <a href="logout.php?logout_id=<?php echo $row['username']; ?>" class="logout">Logout</a> -->
      </header>
      <div class="search">
        
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>

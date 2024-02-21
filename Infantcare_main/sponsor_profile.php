<?php
include "config.php";
// include "header.php"
?>
<?php
 include "sponsor_sidebar2.php";?>

<?php

// Check if the user is logged in
if (isset($_GET['s_sponsor_id'])) { // Check if ID is provided in the URL
    $id = $_GET['s_sponsor_id'];

    // Fetch existing volunteer data
    $sql = "SELECT * FROM sponsor WHERE s_sponsor_id = '$id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $name = $row['s_name'];
    $email = $row['s_email'];
    $phone = $row['s_phone'];
    $aadhar = $row['s_aadhar'];
	$district = $row['district'];
	$gender = $row['gender'];
	$marital = $row['marital'];
	// $dis = $row['s_district'];
	$photo = $row["photo"];
    } else {
        echo "sponsornot found.";
        $con->close();
        exit();
    }
} else {
    echo "ID not provided.";
    $con->close();
    exit();
}

?>



<body>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css'>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js'></script>

<script>
    function logout() {
        // Redirect to logout.php
        window.location.href = "logout.php";
    }
</script>
<style>
        .custom-back-button {
            margin-right: 10px;
            background-color: #5ac1bc;
            color: #fff;
            border-color: #007bff;
        }
    </style>
</body>
<br><br><br><br><br><br><br><br>
<div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								
							<!-- <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110"> -->
							<img src="<?php echo $photo; ?>" alt="Admin" class="rounded-circle p-1 bg-primary" width="110"> 	
							<div class="mt-3">
									<h4><?php echo $name; ?></h4>
									<!-- <p class="text-secondary mb-1">Full Stack Developer</p>
									<p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                    <!-- <button class="btn btn-outline-primary">Back</button>  -->
                                    <form action="sponsor_sidebar.php" method="POST">
                                   <!-- <button class="btn btn-outline-primary" type="submit">Back</button> -->
								   <button class="btn btn-outline-primary custom-back-button" type="submit">Back</button>
                                    </form>
                                    <br>
									<button class="btn btn-primary" style="background-color: #5ac1bc;" onclick="logout()">logout</button>
									
								</div>
							</div>
							<hr class="my-4">
							
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?php echo $name; ?>">


						





									

								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?php echo $email; ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Phone</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?php echo $phone; ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Aadhar</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?php echo $aadhar; ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">District</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?php echo $district; ?>">
								</div>
							</div>

							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Gender</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?php echo $gender; ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Marital Status</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?php echo $marital; ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<!-- <input type="button" class="btn btn-primary px-4" style="background-color: #5ac1bc;" value="Save Changes"> -->
								</div>
							</div>
						</div>
					</div>
					
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php
// include "footer.php"
?>






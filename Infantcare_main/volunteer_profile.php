<?php
include "config.php";
include "volunteer_sidebar.php";

// include "header.php"
?>
<?php

// Check if the user is logged in
if (isset($_GET['id'])) { // Check if ID is provided in the URL
    $id = $_GET['id'];

    // Fetch existing volunteer data
    $sql = "SELECT * FROM volunteer WHERE id = '$id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $aadhar = $row['aadhar'];
        $district = $row['district'];
    } else {
        echo "Volunteer not found.";
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
</body>
<br><br><br><br>
<div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4><?php echo $name; ?></h4>
									<!-- <p class="text-secondary mb-1">Full Stack Developer</p>
									<p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                    <!-- <button class="btn btn-outline-primary">Back</button>  -->
                                    <form action="volunteer_homepage.php" method="post">
                                   <button class="btn btn-outline-primary" type="submit">Back</button>
                                    </form>
                                    
									<button class="btn btn-primary" onclick="logout()">logout</button>
									
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
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<!-- <input type="button" class="btn btn-primary px-4" value="Save Changes"> -->
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
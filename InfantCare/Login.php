



<?php
require_once 'config.php';
require_once 'header.php';

if (isset($_POST["login"])) {
	$email = $_POST["email"];
	$password = $_POST["password"];
	$hashed_password=md5($password);
	$result = mysqli_query($con, "SELECT * FROM login WHERE email='$email' AND password='$hashed_password'") or die("error");
	
	if (mysqli_num_rows($result) < 1) {
		echo "Login failure";
	} else {
		$user=$result->fetch_assoc();
		session_start();
		$_SESSION['username'] = $email;
		print_r( $user['user_type']);
		if($user["user_type"]=='Sponsor')
		{
			//header("location:dsponsor.php");
			$script = "<script> window.location = 'sponsor.php';</script>";
            echo $script;
		}
		elseif($user["user_type"]=='Orphanage')
		{
			//header("location:dorphanage.php");
			$script = "<script> window.location = 'orphanage_dashboard.php';</script>";
            echo $script;
		}

        elseif($user["user_type"]=='volunteer')
		{
			//header("location:dorphanage.php");
			$script = "<script> window.location = 'volunteer.php';</script>";
            echo $script;
		}


		elseif($user["user_type"]=='admin')
		{
			//header("location:dorphanage.php");
			$script = "<script> window.location = 'Dindex.php';</script>";
            echo $script;
		}
		echo "Login success";
		// header("location:index.php");

		
        exit();
	}
	
}
?>

<main>

	<section class="donate-section">
		<div class="section-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12 mx-auto">
					<form class="custom-form donate-form" action="" method="post" role="form" onsubmit="return validateForm()">
						<div class="form-group">
							<h2 class="mb-4">login Now</h2>
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" name="email" required>
						</div>

						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" required>
						</div> 
						<div class="mt-4">
						<a href="forgot_password.php" >Forgot password ?</a></div>
						<p style="font-size:15px;float:right;margin-bottom:-10px;" ><input type="submit" class="btn btn-success" name="login" value="login"></p>
						
			</div>
        </form>
		</div>

		</div>
		</div>
	</section>
</main>

<?php
	require_once 'footer.php';
?>
</body>
</html>
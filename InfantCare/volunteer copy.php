<?php  require_once 'config.php';
		   require_once 'v_dash.php';?>

<!DOCTYPE html>

<?php 
    $uid = $_SESSION['username']; // Assigning session username to $uid
    $sql = "SELECT * FROM `vapplication` WHERE vol_id ='$uid'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$eoid= $row["orph_id"];
			$sql1 = "SELECT * FROM `orphanage` WHERE `o_email`='$eoid'";
			$result1 = $con->query($sql1);
			if ($result1->num_rows > 0) {
				while ($row1 = $result1->fetch_assoc()) {
		?>
		<h2>volunteer Application</h2>
		Orphanage         :<?php  echo $row1["o_name"];?><br>
		<?php  echo $row1["o_district"];?><br>
		<?php  echo $row1["o_city"];?><br>
		<?php  echo $row1["o_pincode"];?><br>
		<?php  echo $row1["o_email"];?><br>
		<?php  echo $row1["o_phone"];?><br>
		Application Status:<?php  echo $row["status"];?>

		<?php
				}
			}
		}
    } else {
        ?>

		<form action="volunteer copy.php" method="post">
        <label for="orphanage">Select Orphanage:</label>
        <select name="orphanage" id="orphanage">
            <?php
            // Fetching orphanage details from the database
            $sql = "SELECT `o_id`, `o_name`, `o_govtid`, `o_edate`, `o_email`, `o_phone`, `o_district`, `o_city`, `o_pincode` FROM `orphanage`";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<option value="'.$row['o_email'].'">'.$row['o_name'].'</option>';
                }
            } else {
                echo '<option value="">No orphanages found</option>';
            }
            ?>
        </select><br><br>
        
        <input type="submit" name="apply" value="Apply">
    </form>
		<?php
    }?>

</body>
</html>

<?php
if (isset($_POST["apply"])) {
    // Assuming the select field name for orphanage email is 'orphanage'
    $o_email = $_POST['orphanage']; // Retrieve the selected orphanage email

    // Assuming you have the user ID stored in $_SESSION['username']
    $u_id = $_SESSION['username'];
    $status = "pending";

    // Perform the database insertion
    $query = "INSERT INTO `vapplication`(`id`, `vol_id`, `orph_id`, `status`) VALUES (default, '$u_id', '$o_email', '$status')";
    
    // Execute the query
    mysqli_query($con, $query);
}
?>
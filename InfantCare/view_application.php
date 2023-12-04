<?php
// include "o.php"
?>

<!-- <!DOCTYPE html>
<html>
<head>
    <title>View Application</title>
</head>
<body>
    <h2>View Application</h2>
    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     if (isset($_POST['apply'])) {
    //         $name = $_POST['name'];
    //         $email = $_POST['email'];
    //         $message = $_POST['message'];
            
    //         // Display the application information
    //         echo "<p><strong>Name:</strong> $name</p>";
    //         echo "<p><strong>Email:</strong> $email</p>";
    //         echo "<p><strong>Message:</strong> $message</p>";
    //     }
    // } else {
    //     echo "<p>No application submitted.</p>";
    // }
    ?>
</body>
</html> -->

<?php
require_once 'config.php'; // Include your configuration file

// Fetch applied volunteer details from the database
$sql = "SELECT * FROM `vapplication`";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $volunteer_id = $row["vol_id"];
        $orphanage_id = $row["orph_id"];
        $status = $row["status"];

        // Fetch volunteer details based on volunteer ID from users table (assuming the volunteer details are in a table named 'users')
        $sql_volunteer = "SELECT * FROM `volunteer` WHERE `id`='$volunteer_id'";
        $result_volunteer = $con->query($sql_volunteer);

        // Fetch orphanage details based on orphanage ID from orphanage table
        $sql_orphanage = "SELECT * FROM `orphanage` WHERE `o_email`='$orphanage_id'";
        $result_orphanage = $con->query($sql_orphanage);

        if ($result_volunteer->num_rows > 0 && $result_orphanage->num_rows > 0) {
            $volunteer = $result_volunteer->fetch_assoc();
            $orphanage = $result_orphanage->fetch_assoc();

            // Display applied volunteer details
            echo "<h2>Applied Volunteer Details</h2>";
            echo "Volunteer Name: " . $volunteer["username"] . "<br>";
            echo "Volunteer Email: " . $volunteer["email"] . "<br>";
            echo "Orphanage Name: " . $orphanage["o_name"] . "<br>";
            echo "Application Status: " . $status . "<br><br>";
        }
    }
} else {
    echo "No applications found";
}
?>

<!-- HTML code for your page -->
<!DOCTYPE html>
<html>
<head>
    <title>View Applied Volunteers</title>
    <!-- Your CSS and other head elements -->
</head>
<body>
    <!-- Your HTML content -->

    <table>
						<thead>
							<tr>
                                <th>Sl.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>District</th>
                                <th>City</th>
                                
       

							</tr>
						</thead>
						<tbody>


                        <?php
                            $c=0;
                            while ($row = $result->fetch_assoc()) {
                                $name=$row["name"];
                                $email=$row["email"];
                                $phone=$row["phone"];
                                
                            $c++;
                            }?>
                <tr>
                    <td><?php echo $c; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $phone; ?></td>
                    
                </tr>
</body>
</html>
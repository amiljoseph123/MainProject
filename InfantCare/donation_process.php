<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Get form values
//     $donationFrequency = $_POST["DonationFrequency"];
//     $donationAmount = $_POST["flexRadioDefault"];
//     $name = $_POST["donation-name"];
//     $email = $_POST["donation-email"];
//     $paymentMethod = $_POST["DonationPayment"];

//     // Process the donation
//     // Add your donation processing code here (e.g., save to a database, send an email receipt, etc.)

//     // Redirect to a thank you page
//     header("Location: thank_you_page.html"); // Replace with the actual thank you page URL
//     exit();
// }
?>


<?php
 session_start();
 require 'config.php';
// echo"hello";
?> 

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Get form values
//      $donationFrequency = $_POST["DonationFrequency"];
//     $donationAmount = $_POST["flexRadioDefault"];
//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $paymentMethod = $_POST["amount"];



//     // SQL query to insert donation information into the database
//     $sql = "INSERT INTO donation (name, email, amount)
//     VALUES ('$name', '$email', '$donationAmount')";

//     if ($con->query($sql) === TRUE) {
//         // Donation saved successfully
//         header("Location: index.php"); // Redirect to thank you page
//         exit();
//     } else {
//         echo "Error: " . $sql . "<br>" . $con->error;
//     }

//     $con->close();
// }
?>
<?php
// session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values
    // $donationFrequency = $_POST["DonationFrequency"];
    // $donationAmount = $_POST["flexRadioDefault"];
  //  $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $donationAmount = $_POST["amount"];

    // SQL query to insert donation information into the database
    $sql = "INSERT INTO donation (name, email, amount) VALUES ('$name', '$email', '$donationAmount')";
    
    if ($con->query($sql) === TRUE) {
        // Donation saved successfully
        //header("Location: index.php"); // Redirect to thank you page
        echo "donation successfull";
        header("Location: receipt.php?email=$email");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}
?>


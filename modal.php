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
    // die("Error: " . mysqli_error($con));
}
?>  


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

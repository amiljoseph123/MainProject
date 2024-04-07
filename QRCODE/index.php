<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Selection Form</title>
    <style>
        .additional-fields {
            display: none;
        }
    </style>
</head>
<body>
    <h2>Select Item</h2>
    <form method="post" action="qrcode.php" id="itemForm">
        <label for="category">Choose a category:</label>
        <select name="category" id="category">
            <option value="clothing">Clothing</option>
            <option value="stationery">Stationery</option>
            <option value="gadgets">Gadgets</option>
        </select>
        <br><br>

        <div class="additional-fields" id="stationeryFields" style="display: none;">
            <label for="stationeryItem">Choose item:</label>
            <select name="stationeryItem" id="stationeryItem">
                <option value="pen">Pen</option>
                <option value="notebook">Notebook</option>
                <option value="pencil">Pencil</option>
            </select>
            <br><br>
        </div>

        <div class="additional-fields" id="gadgetsFields" style="display: none;">
            <label for="gadgetsItem">Choose item:</label>
            <select name="gadgetsItem" id="gadgetsItem">
                <option value="smartphone">Smartphone</option>
                <option value="tablet">Tablet</option>
                <option value="headphones">Headphones</option>
            </select>
            <br><br>
        </div>
        <label for="quantity">quantity:</label>
        <input type="text" name="quantity" id="quantity" required>
        <br><br>
        <label for="district">District:</label>
<select name="district" id="district" required>
  <option value="" disabled selected>Select District</option>
  <option value="Thiruvananthapuram">Thiruvananthapuram</option>
  <option value="Kollam">Kollam</option>
  <option value="Pathanamthitta">Pathanamthitta</option>
  <option value="Alappuzha">Alappuzha</option>
  <option value="Kottayam">Kottayam</option>
  <option value="Idukki">Idukki</option>
  <option value="Ernakulam">Ernakulam</option>
  <option value="Thrissur">Thrissur</option>
  <option value="Palakkad">Palakkad</option>
  <option value="Malappuram">Malappuram</option>
  <option value="Kozhikode">Kozhikode</option>
  <option value="Wayanad">Wayanad</option>
  <option value="Kannur">Kannur</option>
  <option value="Kasaragod">Kasaragod</option>
</select>

        <label for="place">Place:</label>
        <input type="text" name="place" id="place" required>
        <br><br>
        <label for="date">Date:</label>
        <input type="date" name="date" id="date" required>
        <br><br>
        <label for="city">City:</label>
        <input type="text" name="city" id="city" required>
        <br><br>
        <label for="pincode">Pincode:</label>
        <input type="text" name="pincode" id="pincode" required>
        <br><br>
        <input type="submit" name="sbt-btn" value="Submit">
    </form>

    <script>
        document.getElementById("category").addEventListener("change", function() {
            var category = this.value;
            var stationaryFields = document.getElementById("stationeryFields");
            var gadgetsFields = document.getElementById("gadgetsFields");

            if (category === "stationery") {
                stationaryFields.style.display = "block";
                gadgetsFields.style.display = "none";
            } else if (category === "gadgets") {
                stationaryFields.style.display = "none";
                gadgetsFields.style.display = "block";
            } else {
                stationaryFields.style.display = "none";
                gadgetsFields.style.display = "none";
            }
        });
    </script>
</body>
</html>

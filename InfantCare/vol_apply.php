
<?php
include "o.php"
?>
<!DOCTYPE html>
<html>
<head>
    <title>Application Form</title>
</head>
<body>
    <h2>Application Form</h2>
    <form action="view_application.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        
        <label for="message">Application Message:</label><br>
        <textarea name="message" id="message" rows="4" cols="30" required></textarea><br><br>
        
        <input type="submit" name="apply" value="Apply">
    </form>
</body>
</html>


<?php
include "o.php"
?>
<!DOCTYPE html>
<html>
<head>
    <title>Application Form</title>
</head>
<body>
    <?php
       $oid=$_POST["o_id"];
    ?> 
    <h2>Application Form</h2>
    <form action="view_application.php" method="post">
     
        
        <label for="message">please will the motive to become 
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        </label><br>
        <textarea name="message" id="message" rows="4" cols="30" required></textarea><br><br>
        
        <input type="submit" name="apply" value="Apply">
    </form>
</body>
</html>

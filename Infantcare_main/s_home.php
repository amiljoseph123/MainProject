<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

include "config.php";

$user = getElementById($_SESSION['id'], $con);


 ?>
 

<?php 

function getElementById($id, $db){
    $sql = "SELECT * FROM sponsor WHERE id = ?";
	$stmt = $db->prepare($sql);
	$stmt->execute([$id]);
    
    if($stmt->rowCount() == 1){
        $user = $stmt->fetch();
        return $user;
    }else {
        return 0;
    }
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
</head>
<body>
    <style>
.w-450 {
	width: 450px;
}
.vh-100 {
	min-height: 100vh;
}
.w-350 {
	width: 350px;
}
</style>
    <?php if ($user) { ?>
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<div class="shadow w-350 p-3 text-center">
    		<img src="upload/<?=$user['pp']?>"
    		     class="img-fluid rounded-circle">
            <h3 class="display-4 "><?=$user['fname']?></h3>
            <a href="s_edit.php" class="btn btn-primary">
            	Edit Profile
            </a>
             <a href="logout.php" class="btn btn-warning">
                Logout
            </a>
		</div>
    </div>
    <?php }else { 
    //  header("Location: login.php");
     exit;
    } ?>
</body>


</html>

<?php }else {
	// header("Location: login.php");
	exit;
} ?>



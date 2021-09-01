<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
    header("Location: ../admin_index.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>
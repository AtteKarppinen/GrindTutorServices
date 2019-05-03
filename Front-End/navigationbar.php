<?php
	session_start();
?>

<!DOCTYPE html>
<html>

	<head>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<title>Find a Grind</title>
		<link rel="stylesheet" type="text/css" href="design.css"> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="register.js"></script>
		<script type="text/javascript" src="login.js"></script>
		<script type="text/javascript" src="animate.js"></script>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<div id="navbar">
			<img src="Images/logo.png" id="logo">
			<div id="navbar-right">
				<a href="index.php">Home</a>
				<a href="about.php">About Us</a>
				<?php
				if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true) {
					echo "<a href='register.php'>Register</a>";
					echo "<a href='logout.php'>Logout</a>";
					echo "<a href='myAccount.php'>My Account</a>";
				}
				else {
					echo "<a href='login.php'>Login</a>";
				}
				?>
			</div>
		</div>
		<br><br><br>
		
	</head>	
	

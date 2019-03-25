<?php
	session_start();

	$username = "";
	$email = "";
	$errors = array();

	// connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// if register button is clicked
	if (isset($_POST['register'])) 
	{ 

		$username = mysqli_real_escape_string($db, $_POST['username']);

		$email = mysqli_real_escape_string($db, $_POST['email']);

		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);

		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		if (empty($username)) 
		{
			array_push($errors, "Username is required");
		}

		if (empty($email)) 
		{
			array_push($errors, "Email is required");
		}

		if (empty($password_1)) 
		{
			array_push($errors, "Password is required");
		}

		if ($password_1 != $password_2) 
		{
			array_push($errors, "The two passwords do not match");
		}

		// first check the database to make sure 
	  	// a user does not already exist with the same username and/or email
		  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
		  $result = mysqli_query($db, $user_check_query);
		  $user = mysqli_fetch_assoc($result);
		  
		  if ($user) { // if user exists
		    if ($user['username'] == $username) {
		      array_push($errors, "Username already exists");
		    }

		    if ($user['email'] == $email) {
		      array_push($errors, "Email already exists");
		    }
		  }

		// if no errors, save user to database
		if (count($errors) == 0) 
		{
			$password = md5($password_1);
			$sql = "INSERT INTO users (username, email, password)
			 VALUES ('$username', '$email', '$password')";

			mysqli_query($db, $sql);

			$sql2 = "SELECT * FROM users WHERE username='$username'";
			$result = mysqli_query($db, $sql2);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$userid = $row['id'];
					$sql = "INSERT INTO profileimg (userid, status) VALUES ('$userid', 1)";
					mysqli_query($db, $sql);
				}
			}

			$_SESSION['username'] = $username;
			$_SESSION['success'] = '';
			header('location: index.php');
		}
	}

	if (isset($_POST['login'])) 
	{
		$username = mysqli_real_escape_string($db, $_POST['username']);

		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) 
		{
			array_push($errors, "Username is required");
		}

		if (empty($password)) 
		{
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) 
		{
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username= '$username' AND password= '$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) 
			{
				$_SESSION['username'] = $username;
				$_SESSION['success'] = '';
				header('location: index.php');
			}
			else{
				array_push($errors, "Incorrect Username/Password");			
			}
		}
	}

	if (isset($_GET['logout'])) 
	{
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');
	}

	$firstname = "";
	$lastname = "";
	$address = "";
	$favgame = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$favgame = $_POST['favgame'];

		$new_query = "INSERT INTO profile (firstname, lastname, address, favgame) VALUES ('$firstname', '$lastname', '$address', '$favgame')";

		mysqli_query($db, $new_query);

		$

		$_SESSION['output'] = "Information saved"; 
		header('location: Profile.php');
	}

	if (isset($_POST['update'])) {
		$firstname = mysqli_real_escape_string($_POST['firstname']);
		$lastname = mysqli_real_escape_string($_POST['lastname']);
		$address = mysqli_real_escape_string($_POST['address']);
		$favgame = mysqli_real_escape_string($_POST['favgame']);
		$id = mysqli_real_escape_string($_POST['id']);
	}

	$new_results = mysqli_query($db, "SELECT * FROM profile");
?>
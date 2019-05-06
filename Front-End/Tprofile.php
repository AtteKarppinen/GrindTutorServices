<?php
	session_start();
	include("navigationbar.php");
	// I Need help selecting the row using the right tutor id ↓↓↓↓↓↓
	$query = "SELECT * FROM Tutor_table WHERE t_num = ";

	$TutorRecs = mysql_query($query);

	$Tutor = mysql_fetch_assoc($TutorRecs);
?> 

	<body>

		<head>
			<link rel="stylesheet" type="text/css" href="design.css">
		</head>
		<div class="row">
			<div class="leftcolumn">
				<div class="card">
					<div class="fakeimg">
						Image
					</div>
					<h2>Name: <?php echo $Tutor[t_fname]." ".$Tutor[t_lname]; ?></h2>
					<p>Address: <?php echo $Tutor[t_address] ?></p>
					<p>Date Of Birth: <?php echo $Tutor[t_bdate] ?></p>
					<p>Gender: <?php echo $Tutor[t_sex] ?></p>
					<p>Email: <?php echo $Tutor[t_email] ?></p>
					<p>Password: <?php echo $Tutor[t_password] ?></p>
					<p>Fee: <?php echo $Tutor[t_fee] ?></p>
					<p>Subject number: <?php echo $Tutor[t_subject_num] ?></p>
			</div>
			
		</div>
	</body>

</html>
 <?php
	session_start();
	include("navigationbar.php");
	// I Need help selecting the row using the right student id ↓↓↓↓↓↓
	$query = "SELECT * FROM Student_table WHERE s_num = ";

	$StudentRecs = mysql_query($query);

	$Student = mysql_fetch_assoc($StudentRecs);
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
					<h2>Name: <?php echo $Student[s_fname]." ".$Student[s_lname]; ?></h2>
					<p>Location: <?php echo $Student[s_location] ?></p>
					<p>Date Of Birth: <?php echo $Student[s_bdate] ?></p>
					<p>Gender: <?php echo $Student[s_sex] ?></p>
				</div>
			</div>
			
		</div>
	</body>

</html>
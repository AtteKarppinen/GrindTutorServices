<?php
	session_start();
	include("navigationbar.php");
?>

	<body>
		<div class="container">
			<div class="topReg">
				<h3>Register with Find a Grind today!</h3>
				<p>
					Join us now to find a tutor to suit you. Here at Find a Grind our tutors provide a fantastic one on one service so you feel confident going into any exam! 
				</p>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="register">
					<h3>Tutor Registration</h3>
					<button onclick="document.getElementById('id01').style.display='block'">Click here to register! </button>
					
					<div id="id01" class="modal">
						<form id="tutorSubmit" class="modal-content animate">
							
							<div class="imgcontainer">
								<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
							</div>
						
							<div class="regcontainer">
								<h1>Tutor Registration</h1>
								<label for="fname">First Name</label>
								<input type="text" placeholder="Enter your First Name" id="tutorFName" required>
								
								<label for="lname">Last Name</label>
								<input type="text" placeholder="Enter your Last Name" id="tutorLName" required>
								
								<label for="email">Email</label>
								<input type="email" placeholder="Enter your Email" id="tutorEmail" required>

								<label for="password">Password</label>
								<input type="password" placeholder="Create Password" id="tutorPassword" required>
								
								<label for="confirmpassword">Confirm Password</label>
								<input type="password" placeholder="Re-Enter Password" id="tutorConfirmpassword" required>

								<label for="address">Address</label>
								<input type="text"  placeholder="Enter Your Address" id="tutorAddress" required>
								
								<label for="location">Location</label>
								<select id="tutorLocation">
									<option value="default">Choose your Location</option>
									<option value="Dublin 1">Dublin 1</option>
									<option value="Dublin 2">Dublin 2</option>
									<option value="Dublin 3">Dublin 3</option>
									<option value="Dublin 4">Dublin 4</option>
									<option value="Dublin 5">Dublin 5</option>
									<option value="Dublin 6">Dublin 6</option>
									<option value="Dublin 6W">Dublin 6W</option>
									<option value="Dublin 7">Dublin 7</option>
									<option value="Dublin 8">Dublin 8</option>
									<option value="Dublin 9">Dublin 9</option>
									<option value="Dublin 10">Dublin 10</option>
									<option value="Dublin 11">Dublin 11</option>
									<option value="Dublin 12">Dublin 12</option>
									<option value="Dublin 13">Dublin 13</option>
									<option value="Dublin 14">Dublin 14</option>
									<option value="Dublin 15">Dublin 15</option>
									<option value="Dublin 16">Dublin 16</option>
									<option value="Dublin 17">Dublin 17</option>
									<option value="Dublin 18">Dublin 18</option>
									<option value="Dublin 20">Dublin 20</option>
									<option value="Dublin 22">Dublin 22</option>
									<option value="Dublin 24">Dublin 24</option>
								</select>
								
								<br><br>
								<label for="file">Upload Garda Vetting Document</label><br><br>
								<input type="file" placeholder="Upload your form as a PDF file" id="file">

								<br><br>
								<label for="fee">Your desired hourly rate of pay:</label><br><br>
								<input type="number" id="tutorFee" min="0" max="999"> €
								
								<br><br>
								<label for="subjects">Select the subjects you will teach:</label><br><br>
								<input type="checkbox" name="sub1" value="7">Accounting
								<input type="checkbox" name="sub2" value="9">Ancient Greek Junior Level
								<input type="checkbox" name="sub3" value="30">Ancient Greek Senior Level
								<input type="checkbox" name="sub4" value="17">Applied Mathematics
								<!-- Fuck it. No time and no sense trying to make them all work -->
								<!-- <input type="checkbox" name="sub5" value="Chemistry">Applied Technology
								<input type="checkbox" name="sub6" value="Classical Studies">Art Junior Level
								<input type="checkbox" name="sub7" value="Classical Studies">Art Senior Level
								<input type="checkbox" name="sub8" value="Economics">Biology
								<input type="checkbox" name="sub9" value="English">Business Studies Junior Level
								<input type="checkbox" name="sub10" value="French">Business Studies Senior Level
								<input type="checkbox" name="sub11" value="Gaeilge">Chemistry
								<input type="checkbox" name="sub12" value="Geography">Classical Studies
								<input type="checkbox" name="sub13" value="German">English Junior Level
								<input type="checkbox" name="sub14" value="History">English Senior Level
								<input type="checkbox" name="sub15" value="Home Economics">French
								<input type="checkbox" name="sub15" value="Maths">Gaeilge Junior Level
								<input type="checkbox" name="sub16" value="Music">Gaeilge Senior Level
								<input type="checkbox" name="sub17" value="Physics">Geography
								<input type="checkbox" name="sub18" value="Religion">German
								<input type="checkbox" name="sub19" value="Science">History Junior Level
								<input type="checkbox" name="sub20" value="Spanish">History Senior Level
								<input type="checkbox" name="sub21" value="Accounting">Accounting
								<input type="checkbox" name="sub22" value="Art">Art
								<input type="checkbox" name="sub23" value="Biology">Biology
								<input type="checkbox" name="sub24" value="Business Studies">Business Studies
								<input type="checkbox" name="sub25" value="Chemistry">Chemistry
								<input type="checkbox" name="sub26" value="Classical Studies">Classical Studies
								<input type="checkbox" name="sub27" value="Economics">Economics
								<input type="checkbox" name="sub28" value="English">English
								<input type="checkbox" name="sub29" value="French">French
								<input type="checkbox" name="sub30" value="Gaeilge">Gaeilge
								<input type="checkbox" name="sub31" value="Geography">Geography
								<input type="checkbox" name="sub32" value="German">German
								<input type="checkbox" name="sub33" value="History">History
								<input type="checkbox" name="sub34" value="Home Economics">Home Economics
								<input type="checkbox" name="sub35" value="Maths">Maths
								<input type="checkbox" name="sub36" value="Music">Music -->
								
								<br><br>
								<button type="submit">Register</button>
							
							</div>
						</form>
					</div>	
				</div>
				
				<div class="register">
					<h3>Student Registration</h3>
					<button onclick="document.getElementById('id02').style.display='block'">Click here to register! </button>
				
					<div id="id02" class="modal">
						<form id="studentSubmit" class="modal-content animate">
							<div class="imgcontainer">
							<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
							</div>
						
							<div class="regcontainer">
								<h1>Student Registration</h1>
								<label for="fname">First Name</label>
								<input type="text" placeholder="Enter your First Name" id="firstName" required>
								
								<label for="lname">Last Name</label>
								<input type="text" placeholder="Enter your Last Name" id="lastName" required>
								
								<label for="email">Email</label>
								<input type="email" placeholder="Enter your Email" id="email" required>

								<label for="password">Password</label>
								<input type="password" placeholder="Create Password" id="password" required>
								
								<label for="confirmpassword">Confirm Password</label>
								<input type="password" placeholder="Re-Enter Password" id="confirmpassword" required>
								
								<button type="submit">Register</button>
								
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>

</html>
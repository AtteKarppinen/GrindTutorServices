<?php
	session_start();
	include("navigationbar.php");
?>

<body>
	
	
	<div class="regcontent">
		<div class="topreg">
			<h3>Register with Find a Grind today!</h3>
			<p>
				Join us now to find a tutor to suit you. Here at Find a Grind our tutors provide a fantastic one on one service so you feel confident going into any exam! 
			</p>
		</div>
		
		<div class="tutorreg">
			<h3>Tutor Registration</h3>
			<button onclick="document.getElementById('id01').style.display='block'">Click here to register! </button>
			
			<div id="id01" class="modal">
					<form class="modal-content animate" action="/actionPage.php">
						<div class="imgcontainer">
						<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
						</div>
					
						<div class="regcontainer">
							<h1>Tutor Registration</h1>
							<label for="fname">First Name</label>
							<input type="text" placeholder="Enter your First Name" name="fname" required>
							
							<label for="lname">Last Name</label>
							<input type="text" placeholder="Enter your Last Name" name="lname" required>
							
							<label for="email">Email</label>
							<input type="email" placeholder="Enter your Email" name="email" required>

							<label for="password">Password</label>
							<input type="password" placeholder="Create Password" name="password" required>
							
							<label for="confirmpassword">Confirm Password</label>
							<input type="password" placeholder="Re-Enter Password" name="confirmpassword" required>
							
							<label for="location">Location</label>
							<select>
								<option value="default">Choose your Location</option>
								<option value="1">Dublin 1</option>
								<option value="2">Dublin 2</option>
								<option value="3">Dublin 3</option>
								<option value="4">Dublin 4</option>
								<option value="5">Dublin 5</option>
								<option value="6">Dublin 6</option>
								<option value="6W">Dublin 6W</option>
								<option value="7">Dublin 7</option>
								<option value="8">Dublin 8</option>
								<option value="9">Dublin 9</option>
								<option value="10">Dublin 10</option>
								<option value="11">Dublin 11</option>
								<option value="12">Dublin 12</option>
								<option value="13">Dublin 13</option>
								<option value="14">Dublin 14</option>
								<option value="15">Dublin 15</option>
								<option value="16">Dublin 16</option>
								<option value="17">Dublin 17</option>
								<option value="18">Dublin 18</option>
								<option value="20">Dublin 20</option>
								<option value="22">Dublin 22</option>
								<option value="24">Dublin 24</option>
							</select>
							
							<label for="file">Garda Vetting Document</label>
							<input type="file" placeholder="Upload your form as a PDF file" name="file" required>
							
							<br><br>
							<label for="subjects">Select the subjects you will teach</label><br>
							<input type="checkbox" name="sub1" value="Accounting">Accounting
							<input type="checkbox" name="sub2" value="Art">Art
							<input type="checkbox" name="sub3" value="Biology">Biology
							<input type="checkbox" name="sub4" value="Business Studies">Business Studies
							<input type="checkbox" name="sub5" value="Chemistry">Chemistry
							<input type="checkbox" name="sub6" value="Classical Studies">Classical Studies
							<input type="checkbox" name="sub7" value="CSPE">CSPE
							<input type="checkbox" name="sub8" value="Economics">Economics
							<input type="checkbox" name="sub9" value="English">English
							<input type="checkbox" name="sub10" value="French">French
							<input type="checkbox" name="sub11" value="Gaeilge">Gaeilge
							<input type="checkbox" name="sub12" value="Geography">Geography
							<input type="checkbox" name="sub13" value="German">German
							<input type="checkbox" name="sub14" value="History">History
							<input type="checkbox" name="sub15" value="Home Economics">Home Economics
							<input type="checkbox" name="sub15" value="Maths">Maths
							<input type="checkbox" name="sub16" value="Music">Music
							<input type="checkbox" name="sub17" value="Physics">Physics
							<input type="checkbox" name="sub18" value="Religion">Religion
							<input type="checkbox" name="sub19" value="Science">Science
							<input type="checkbox" name="sub20" value="Spanish">Spanish
							
							<button type="submit">Register</button>
						</div>
						
					</form>
				</div>
		</div>
		
		<div class="studentreg">
			<h3>Student Registration</h3>
			<button onclick="document.getElementById('id02').style.display='block'">Click here to register! </button>
			
			<div id="id02" class="modal">
					<form class="modal-content animate" action="/actionPage.php">
						<div class="imgcontainer">
						<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
						</div>
					
						<div class="regcontainer">
							<h1>Student Registration</h1>
							<label for="fname">First Name</label>
							<input type="text" placeholder="Enter your First Name" name="fname" required>
							
							<label for="lname">Last Name</label>
							<input type="text" placeholder="Enter your Last Name" name="lname" required>
							
							<label for="email">Email</label>
							<input type="email" placeholder="Enter your Email" name="email" required>

							<label for="password">Password</label>
							<input type="password" placeholder="Create Password" name="password" required>
							
							<label for="confirmpassword">Confirm Password</label>
							<input type="password" placeholder="Re-Enter Password" name="confirmpassword" required>
							
							<button type="submit">Register</button>
						</div>
						
					</form>
			</div>
		</div>
		
	</div>
</body>

</html>
<?php
	include("navigationbar.php");
?>
<html>
	<body>
		<div class="container">
			<div class="row">
				<div class="leftSideTop">
					<p>
						<br><br><br>Here at Find a Grind we help you find the tutor best suited to you that will provide you with one on one help to get you the results you deserve.
					</p>
				</div>
				
				<div class="rightSideTop">
					<div class="slideshowContainer">						
						<div class="mySlides fade">
							<img id="students" src="Images/students.jpg" alt="Students">
						</div>
						
						<div class="mySlides fade">
							<img id="students" src="Images/tutor.jpg" alt="Tutors">
						</div>
						
						<div class="mySlides fade">
							<img id="students" src="Images/computer.png" alt="Computers">
						</div>
					</div>
					<br>
					<div style="text-align:center">
						<span class="dot"></span> 
						<span class="dot"></span> 
						<span class="dot"></span> 
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="leftSideMiddle">
					<h2>Find A Tutor Near You</h2>
				</div>
				
				<div class="rightSideMiddle">
					<form action="search.php" method ="get">
						<select name="cycle">
							<option value="default">Choose a Cycle</option>
							<option value="Junior Cycle">Junior Cycle</option>
							<option value="Senior Cycle">Senior Cycle</option>
						</select>
						<br>
						<select name="subject">
							<option value="default">Choose a Subject</option>
							<option value="Accounting">Accounting</option>
							<option value="Art">Art</option>
							<option value="Biology">Biology</option>
							<option value="Business Studies">Business Studies</option>
							<option value="Chemistry">Chemistry</option>
							<option value="Classical Studies">Classical Studies</option>
							<option value="Economics">Economics</option>
							<option value="English">English</option>
							<option value="French">French</option>
							<option value="Gaeilge">Gaeilge</option>
							<option value="Geography">Geography</option>
							<option value="German">German</option>
							<option value="History">History</option>
							<option value="Home Economics">Home Economics</option>
							<option value="Maths">Maths</option>
							<option value="Music">Music</option>
							<option value="Physics">Physics</option>
							<option value="Religious Education">Religious Education</option>
							<option value="Science">Science</option>
							<option value="Spanish">Spanish</option>
						</select>
						<br>
						<select name="location">
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
						<input type="submit" value="Submit">
					</form>
				</div>
			</div>
		</div>
		
		<div class="tutors">
			<h1>Popular Tutors</h1>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="bottom">
					<h2>John, 25</h2>
					<br>
					<img id="roundedImage"src="Images/john.jpg" alt="Male Tutor">
					<br>
					<p>
						Junior & Leaving Cert Biology & Chemistry <br>Dublin 2
					</p>
				</div>
				
				<div class="bottom">
					<h2>Julie, 27</h2>
					<br>
					<img id="roundedImage"src="Images/julie.jpg" alt="Female Tutor">
					<br>
					<p>
						Junior & Leaving Cert Geography & French Oral <br>Dublin 5
					</p>
				</div>
			</div>
		</div>
		
		<script type="text/javascript" src="slideshow.js"></script>
		
	</body>

</html>
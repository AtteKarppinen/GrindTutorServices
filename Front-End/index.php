<?php
	session_start();
	include("navigationbar.php");
?>
<html>
	<body>
		<div class="gridContainer">
			<div class="item1">
				<br><br><br>Here at Find a Grind we help you find the tutor best suited to you that will provide you with one on one help to get you the results you deserve.
			</div>
			<div class="item2">
				<img src="Images/students.jpg" alt="Students">
			</div>
			
			<div class="item3">
				<br><br><br>Find A Tutor Near You
			</div>  
			
			<div class="item4">
			<br>
				<form action="/actionPage.php">
					<select>
						<option value="default">Choose a Cycle</option>
						<option value="junior">Junior Cycle</option>
						<option value="senior">Senior Cycle</option>
					</select>
					<br>
					<select>
						<option value="default">Choose a Subject</option>
						<option value="accounting">Accounting</option>
						<option value="art">Art</option>
						<option value="biology">Biology</option>
						<option value="business">Business Studies</option>
						<option value="chemistry">Chemistry</option>
						<option value="classics">Classical Studies</option>
						<option value="cspe">CSPE</option>
						<option value="economics">Economics</option>
						<option value="english">English</option>
						<option value="french">French</option>
						<option value="gaeilge">Gaeilge</option>
						<option value="geography">Geography</option>
						<option value="german">German</option>
						<option value="history">History</option>
						<option value="homeec">Home Economics</option>
						<option value="maths">Maths</option>
						<option value="music">Music</option>
						<option value="physics">Physics</option>
						<option value="re">Religious Education</option>
						<option value="science">Science</option>
						<option value="spanish">Spanish</option>
					</select>
					<br>
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
					<br><br>
					<input type="submit" value="Submit">
				</form>
			</div>
			
			<div class="item5">
				<h1>Popular Tutors</h1>
			</div>
			
			<div class="item6">
				<h2>John, 25</h2>
				<br>
				<img id="roundedImage"src="Images/john.jpg" alt="Male Tutor">
				<br>
				<p>
					Leaving Cert Biology & Chemistry <br>Dublin 2
				</p>
			</div>
			
			<div class="item7">
				<h2>Julie, 27</h2>
				<br>
				<img id="roundedImage"src="Images/julie.jpg" alt="Female Tutor">
				<br>
				<p>
					Junior & Leaving Cert Geography & French Oral <br>Dublin 5
				</p>
			</div>
		</div>
	</body>

</html>

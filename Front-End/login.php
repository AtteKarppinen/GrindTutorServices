<?php
	session_start();
	include("navigationbar.php");
?>

	<body>
		<div class="container">
			<div class="row">
				<div class="tutorLogin">
					<div class="topcontainer">
						<h2 id="login">Tutor Log In</h2>
					</div>
					
					<form class="content" action="/actionPage.php">
						<label for="username"><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="username" required>

						<label for="password"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="password" required>
						<label id="remember">
							<input type="checkbox" name="remember"> Remember me
						</label>
						<br>
						<span class="psw">
							<a href="forgotpassword.php">Forgot password?</a>
						</span>
						<button type="submit">Login</button>
						
						<div class="bottomcontainer">
							<span class="reg">Don't have account? <a href="register.php">Sign up here</a></span>
						</div>
					</form>
				</div>
				
				<div class="studentLogin">
					<div class="topcontainer">
						<h2 id="login">Student Log In</h2>
					</div>
					
					<form class="content" action="/actionPage.php">
						<label for="username"><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="username" required>

						<label for="password"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="password" required>

						<label id="remember">
							<input type="checkbox" name="remember"> Remember me
						</label>
						<br>
						<span class="psw">
							<a href="forgotpassword.php">Forgot password?</a>
						</span>
						
						<button type="submit">Login</button>
					
						<div class="bottomcontainer">
							<span class="reg">Don't have account? <a href="register.php">Sign up here</a></span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
	
</html>
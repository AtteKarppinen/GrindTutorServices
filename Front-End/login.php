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
					
					<form id="tutorLog" class="content" action="" method="POST">
						<label for="t_email">Email</label>
						<input type="email" placeholder="Enter your Email" name="t_email" required>

						<label for="t_password"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="t_password" required>
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
					
					<form id="studentLog" class="content" action="" method="POST">
						<label for="s_email">Email</label>
						<input type="email" placeholder="Enter your Email" id="s_email" required>

						<label for="s_password"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" id="s_password" required>

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
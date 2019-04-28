$(function() {
	$('#loginForm').submit(function(button) {
		button.preventDefault();
		
		const uname = $('#userName').val();
		const pword = $('#password').val();
		
		$.ajax({
			url: 'http://134.209.83.193/GrindTutorServices/Back-End/API/Student/login.php',
			type: 'POST',
			data: {
				userName: uname,
				password: pword,
			},
		})
		
		$.ajax(settings).done(function(response) {
			if (data === 'Login') {
				window.location = '/myaccount.php';
			}
			else {
				console.log(response);
			}
		})
	})
});
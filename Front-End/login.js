$(function() {
	$('#tutorLog').submit(function(button) {
		button.preventDefault();
		
		const email = $('#t_email').val();
		const pword = $('#t_password').val(); 
		
		const obj = { t_email: email, t_password: pword };
		const data = JSON.stringify(obj); 
		
		$.ajax({
			url: 'http://134.209.83.193/GrindTutorServices/Back-End/API/Student/login.php',
			type: 'POST',
			data: data
		})
		.done(function(result) {
			console.log(result.Success[0].Token);
		})
		.fail(function(error) {	
			console.log(error.responseJSON, error.status);
		})
	});
});

$(function() {
	$('#studentLog').submit(function(button) {
		button.preventDefault();
		
		const email = $('#s_email').val();
		const psw = $('#s_password').val(); 
		
		const obj = { s_email: email, s_password: psw };
		const data = JSON.stringify(obj);
		
		$.ajax({
			url: 'http://134.209.83.193/GrindTutorServices/Back-End/API/Student/login.php',
			type: 'POST',
			data: data
		})
		.done(function(result) {
			console.log(result.Success[0].Token);
		})
		.fail(function(error) {	
			console.log(error.responseJSON, error.status);
		})
	});
});
$(function() {
	$("#tutorLog").submit(function(button) {
		button.preventDefault();
		
		const email = $("#email").val();
		const pword = $("#password").val(); 
		
		const obj = { email: email, password: pword };
		const data = JSON.stringify(obj); 
		
		$.ajax({
			url: "http://134.209.83.193/GrindTutorServices/Back-End/API/Tutor/login.php",
			type: "POST",
			data: data
		})
		.done(function(result) {
			console.log(result.Success[0].Token);
			if(result.Success){
				window.location = "/Front-End/index.php";
			}
		})
		.fail(function(error) {	
			console.log(error.responseJSON, error.status);
		})
	});
});

$(function() {
	$("#studentLog").submit(function(button) {
		button.preventDefault();
		
		const email = $("#email").val();
		const psw = $("#password").val(); 
		
		const obj = { email: email, password: psw };
		const data = JSON.stringify(obj);
		
		$.ajax({
			url: "http://134.209.83.193/GrindTutorServices/Back-End/API/Student/login.php",
			type: "POST",
			data: data
		})
		.done(function(result) {
			console.log(result.Success[0].Token);
			if(result.Success){
				window.location = "/Front-End/index.php";
			}
		})
		.fail(function(error) {	
			console.log(error.responseJSON, error.status);
			if(error.responseJSON) {
				alert("invalid password");
			}
		})
	});
});
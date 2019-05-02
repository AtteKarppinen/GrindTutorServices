$(function() {
	
	// TUTOR
	$("#tutorLog").submit(function(button) {
		button.preventDefault();
		
		const email = $("#tutorEmail").val();
		const pword = $("#tutorPassword").val(); 
		
		const obj = { 
			email: email, 
			password: pword 
		};
		const data = JSON.stringify(obj); 
		
		$.ajax({
			url: "http://134.209.83.193/GrindTutorServices/Back-End/API/Tutor/login.php",
			type: "POST",
			data: data
		})
		.done(function(result) {
			console.log(result);
			if(result.Success){
				window.location = "index.php";
			}
		})
		.fail(function(error) {	
			console.log(error.responseJSON, error.status);
			if(error.responseJSON.Message === "Wrong Email Or Password") {
				alert("Invalid Email Or Password");
			}
		});
	});

	// STUDENT
	$("#studentLog").submit(function(button) {
		button.preventDefault();
		
		const email = $("#email").val();
		const psw = $("#password").val(); 
		
		const obj = { 
			email: email, 
			password: psw 
		};
		const data = JSON.stringify(obj);
		
		$.ajax({
			url: "http://134.209.83.193/GrindTutorServices/Back-End/API/Student/login.php",
			type: "POST",
			data: data
		})
		.done(function(result) {
			console.log(result);
			if(result.Success){
				window.location = "index.php";
			}
		})
		.fail(function(error) {	
			console.log(error.responseJSON, error.status);
			if(error.responseJSON.Message === "Wrong Email Or Password") {
				alert("Invalid Email Or Password");
			}
		});
	});
});
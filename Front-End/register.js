$(function() {
	var modal = document.getElementById("id01");

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}

var modal = document.getElementById("id02");

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}	

$("#studentSubmit").submit(function(button){
	button.preventDefault();
	
	const firstName = $("#firstName").val();
	const lastName = $("#lastName").val();
	// const birthday = $("#birthday").val();
	// const sex = $("#sex").val();
	// TODO: add sex and birthday into forms
	const birthday = "2000-01-01";
	const sex = "M";
	const email = $("#email").val();
	const password = $("#password").val();
	//const confirmPassword = $(#confirmPassword).val();
	
	const studentData = {
		firstName: firstName, 
		lastName: lastName, 
		birthday: birthday,
		sex: sex,
		email: email, 
		password: password
	}; 
		
	const data = JSON.stringify(studentData);	
	
	var settings = {
	  url: "http://134.209.83.193/GrindTutorServices/Back-End/API/Student/register.php",
	  method: "POST",
	  data: data
	};

	$.ajax(settings)
	.done(function (response) {
	  console.log(response.Success);

	  if (response.Success) {
		window.location = "login.php";
	  }
	})
	.fail(function(error) {
		console.log(error, error.status);
	});
});

$("#tutorSubmit").submit(function(button){
	button.preventDefualt();
	
	const firstName = $("#firstName").val();
	const lastname = $("#lastName").val();
	const email = $("#email").val();
	const password = $("#password").val();
	const confirmPassword = $("#confirmPassword").val();
	const subjects = $("#subjects").val();
	const location = $("#location").val();
	const vettingDocument = $("#vettingDocument").val();
	
	const tutorData = {
		firstName: firstName,
		lastName: lastName,
		email: email,
		password: password,
		confirmPassword: confirmPassword,
		subjects: subjects,
		location: location,
		vettingDocument: vettingDocument
	};
		
	const data = JSON.stringify(tutorData);	

	var settings = {
		url: "http://134.209.83.193/GrindTutorServices/Back-End/API/Tutor/register.php",
		method: "POST",
		data: data
	};

	$.ajax(settings)
	.done(function (response) {
		console.log(response.Success);

		if (response.Success) {
		window.location = "login.php";
		}
	})
	.fail(function(error) {
		console.log(error, error.status);
	});
});
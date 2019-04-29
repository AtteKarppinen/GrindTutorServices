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
	
	alert("worked");
	
	const firstName = $("#firstName").val();
	const lastName = $("#lastName").val();
	const birthday = $("#birthday").val();
	const sex = $("#sex").val();
	const email = $("#email").val();
	const password = $("#password").val();
	//const confirmPassword = $(#confirmPassword).val();
	
	const studentData = {
		firstName: firstName, 
		lastName: lastName, 
		birthday: birthday,
		sex: sex,
		email: email, 
		password: password}; 
		
	const data = JSON.stringify(studentData);
	
	var settings = {
	  "url": "http://134.209.83.193/GrindTutorServices/Back-End/API/Student/register.php",
	  "method": "POST",
	  "data": "data"
	};

	$.ajax(settings).done(function (response) {
	  console.log(response);
});
});

$("#tutorSubmit").submit(function(button){
	//button.preventDefualt();
	
	
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
		vettingDocument: vettingDocument};
		
	const data = JSON.stringify(tutorData);
	
	var settings = {
	  "url": "http://134.209.83.193/GrindTutorServices/Back-End/API/Tutor/register.php",
	  "method": "POST",
	  "data": "data"
	};

	$.ajax(settings).done(function (response) {
	  console.log(response);
});
});
});
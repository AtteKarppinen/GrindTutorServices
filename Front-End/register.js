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

$('#studentSubmit').click(function(){
	button.preventDefault();
	
	const firstName = $(#firstName).val();
	const lastName = $(#lastName).val();
	const email = $(#email).val();
	const password = $(#password).val();
	const confirmPassword = $(#confirmPassword).val();
	
	const obj = {firstName: firstName, lastName: lastName, email: email, password: password, confirmPassword: confirmPassword};
	const data = JSON.stringify(obj);
	
	var settings = {
	  "url": "http://134.209.83.193/GrindTutorServices/Back-End/API/Student/register.php",
	  "method": "POST",
	  "data": "data"
	  "timeout": 0,
	  "headers": {
		"Content-Type": "application/json"
	  },
	};

	$.ajax(settings).done(function (response) {
	  console.log(response);
});
});

$('#tutorSubmit').click(function(){
	button.preventDefualt();
	
	const firstName = $(#firstName).val();
	const lastname = $(#lastName).val();
	const email = $(#email).val();
	const password = $(#password).val();
	const confirmPassword = $(#confirmPassword).val();
	const subjects = $(#subjects).val();
	const location = $(#location).val();
	const vettingDocument = $(#vettingDocument).val();
	
	const obj = {firstName: firstName, lastName: lastName, email: email, password: password, confirmPassword: confirmPassword, subjects: subjects, location: location, vettingDocument: vettingDocument};
	const data = JSON.stringify(obj);
	
	var settings = {
	  "url": "http://134.209.83.193/GrindTutorServices/Back-End/API/Tutor/register.php",
	  "method": "POST",
	  "data": "data";
	  "timeout": 0,
	  "headers": {
		"Content-Type": "application/json"
	  },
	};

	$.ajax(settings).done(function (response) {
	  console.log(response);
});
});
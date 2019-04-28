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
	
	var settings = {
	  "url": "http://134.209.83.193/GrindTutorServices/Back-End/API/Student/register.php",
	  "method": "POST",
	  "timeout": 0,
	  "headers": {
		"Content-Type": "application/json"
	  },
	};

	$.ajax(settings).done(function (response) {
	  console.log(response);
});

$('#tutorSubmit').click(function(){
	
	var settings = {
	  "url": "http://134.209.83.193/GrindTutorServices/Back-End/API/Tutor/register.php",
	  "method": "POST",
	  "timeout": 0,
	  "headers": {
		"Content-Type": "application/json"
	  },
	};

	$.ajax(settings).done(function (response) {
	  console.log(response);
});

};
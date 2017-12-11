//Ajax call for the sign up form
//Once the form is submitted
$("#signupform").submit(function(e){
	//Prevent default php processing
	e.preventDefault();
	//collect user inputs
	var datatopost = $(this).serializeArray();
		console.log(datatopost);
		//send them to signup.php using AJAX
		$.ajax({
			url: "signu.php",
			type: "POST",
			data: datatopost,
			success: function(data){
				if(data) {
					$("#signupMessage").html(data);
				}
			}, 
			error: function(){
				$("#signupMessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again laster</div>");
			}
		});
});
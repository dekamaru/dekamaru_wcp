function errorDisplay() {
	var error = $("#errorBlock").val();
	if (error != undefined) {
		$("#errorDisplay").text(error);
		//$("#errorDisplay").css('display', 'block');
		$("#errorDisplay").fadeIn(600);
	}	
}

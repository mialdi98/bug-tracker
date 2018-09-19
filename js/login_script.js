function loginForm() {
    // Open modal popup
    $("#login_modal").modal("show");
}

function logout() {
	//erase data of login information
	$("#user_password").val("");
    $("#user_name").val("");
}
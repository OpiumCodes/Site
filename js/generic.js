
ROOT = "/site";

function logoutJs() {
	$.ajax({
		url: ROOT + "/php/checkLogin.php",
		type: "POST",
		async: "false",
		cache: "false",
		data: {"action" : "logout"},
		success: function(response) {
			console.log(response);
		},
		error: function(response) {
			
		}
	});
}

function changeToLogout() {
	var signIn = document.getElementById("sign_in");
	//signIn.outterHTML = "<div id=\"sign_in\" onclick=\"logoutJs();\" style=\"cursor:pointer;\"><b><h5>SIGN OUT</h5></b></div>";
	signIn.innerHTML = "<b><h5>SIGN OUT</h5></b>";
	//console.log(signIn.outerHTML);
}

function checkLogin() {
	var loggedIn = false;
	$.ajax({
		url: ROOT + "/php/checkLogin.php",
		type: "POST",
		async: "false",
		cache: "false",
		data: {"action" : "login"},
		success: function(response) {
			console.log(response);
			changeToLogout();
		},
		error: function(response) {
			
		}
	});
}

$(document).ready(function() {
	checkLogin();
});
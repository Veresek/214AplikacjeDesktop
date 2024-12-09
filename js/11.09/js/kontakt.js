function send() {
	let name = document.getElementById("name").value;
	let surname = document.getElementById("surname").value;
	let email = document.getElementById("email").value;
	let message = document.getElementById("message").value;
	let response = document.getElementById("response");
	response.textContent = `${name} o nazwisku ${surname}, email: ${email} wysłał/a wiadomość: ${message}`;
}

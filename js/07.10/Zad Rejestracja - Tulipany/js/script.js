const forms = document.querySelectorAll("section");
const buttons = document.querySelectorAll("button");
const pass = document.querySelectorAll("input[type='password']");
buttons[0].addEventListener("click", () => {
	forms[0].classList.toggle("none");
	forms[1].classList.toggle("none");
});
buttons[1].addEventListener("click", () => {
	forms[1].classList.toggle("none");
	forms[2].classList.toggle("none");
});
buttons[2].addEventListener("click", () => {
	if (pass[0].value == pass[1].value) {
		console.log(
			`Witaj ${forms[0].querySelector("input[type='text']").value} ${
				forms[0].querySelectorAll("input[type='text']")[1].value
			}`
		);
	} else {
		alert("Podane hasła różnią się");
	}
});

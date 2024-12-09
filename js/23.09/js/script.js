function checkPassword() {
	let = numbers = /[1-9]/g;
	let passoword = document.querySelector("input").value;
	let p = document.querySelector("#result");
	if (passoword.length >= 7 && passoword.match(numbers)) {
		p.style.color = "green";
		p.textContent = `DOBRE`;
	} else if (
		passoword.length >= 4 &&
		passoword.length <= 6 &&
		passoword.match(numbers)
	) {
		p.style.color = "blue";
		p.textContent = `ŚREDNIE`;
	} else if (passoword == "") {
		p.style.color = "red";
		p.textContent = `WPISZ HASŁO!`;
	} else {
		p.style.color = "yellow";
		p.textContent = `SŁABE`;
	}
}

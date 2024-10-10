const inputini = document.getElementById("inp");
const btnA = document.getElementById("A");
const btnB = document.getElementById("B");
const btnC = document.getElementById("C");
const result = document.getElementById("result");

function isreversed(input) {
	let reversed = "";
	for (let i = input.length - 1; i >= 0; i--) {
		reversed += input[i];
	}
	return reversed;
}
btnA.addEventListener("click", () => {
	result.textContent = `Wynik: ${isreversed(inputini.value)}`;
});
btnB.addEventListener("click", () => {
	if (inputini.value === isreversed(inputini.value)) {
		result.textContent = `Wynik: ${inputini.value} jest palindromem`;
	} else {
		result.textContent = `Wynik: ${inputini.value} nie jest palindromem`;
	}
});
btnC.addEventListener("click", () => {
	let counter = 1;
	for (let i = 0; i < inputini.value.length; i++) {
		if (inputini.value[i] === " ") {
			counter++;
		}
	}
	result.textContent = `Wynik: W tym slowie jest ${counter} wyrazow`;
});

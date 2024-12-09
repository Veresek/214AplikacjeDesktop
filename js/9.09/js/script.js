let area = document.getElementById("area");
let circut = document.getElementById("circut");
function rectangleArea() {
	let first = document.getElementById("first").value;
	let second = document.getElementById("second").value;
	let pole = first * second;
	let obwod = 2 * first + 2 * second;
	area.textContent = `Pole wynosi ${pole} cm2`;
	circut.textContent = `Obwód wynosi ${obwod} cm`;
}
document.getElementById("button").addEventListener("click", function () {
	let first = document.getElementById("first").value;
	let second = document.getElementById("second").value;
	let pole = first * second;
	let obwod = 2 * first + 2 * second;
	area.textContent = `Pole wynosi ${pole} cm2`;
	circut.textContent = `Obwód wynosi ${obwod} cm`;
});
document.getElementById("button").addEventListener("click", () => {
	let first = document.getElementById("first").value;
	let second = document.getElementById("second").value;
	let pole = first * second;
	let obwod = 2 * first + 2 * second;
	area.textContent = `Pole wynosi ${pole} cm2`;
	circut.textContent = `Obwód wynosi ${obwod} cm`;
});

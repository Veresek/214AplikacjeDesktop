let id_zamowienia = 1;
function update1() {
	let ilosc = document.getElementById("update1");
	let count = prompt("Podaj nową ilość:");
	ilosc.textContent = count;
}
function update2() {
	let ilosc = document.getElementById("update2");
	let count = prompt("Podaj nową ilość:");
	ilosc.textContent = count;
}
function update3() {
	let ilosc = document.getElementById("update3");
	let count = prompt("Podaj nową ilość:");
	ilosc.textContent = count;
}
function update4() {
	let ilosc = document.getElementById("update4");
	let count = prompt("Podaj nową ilość:");
	ilosc.textContent = count;
}
function order1() {
	alert(
		`Zamówienie nr: ${id_zamowienia} Produkt ${
			document.getElementById("nazwa1").textContent
		}`
	);
	id_zamowienia++;
}
function order2() {
	alert(
		`Zamówienie nr: ${id_zamowienia} Produkt ${
			document.getElementById("nazwa2").textContent
		}`
	);
	id_zamowienia++;
}
function order3() {
	alert(
		`Zamówienie nr: ${id_zamowienia} Produkt ${
			document.getElementById("nazwa3").textContent
		}`
	);
	id_zamowienia++;
}
function order4() {
	alert(
		`Zamówienie nr: ${id_zamowienia} Produkt ${
			document.getElementById("nazwa4").textContent
		}`
	);
	id_zamowienia++;
}
function braki() {
	// let komorki = document.querySelectorAll("td");
	// console.log(komorki);
	// for (let x = 2; x <= 18; x += 5) {
	// 	if (Number(komorki[x].value == 0)) {
	// 		komorki[x].classList.add("red");
	// 	} else if (Number(komorki[x].value) >= 1 && Number(komorki[x].value <= 5)) {
	// 		komorki[x].classList.add("yellow");
	// 	} else {
	// 		// komorki[x].classList.add("yellow");
	// 	}
	// }
}

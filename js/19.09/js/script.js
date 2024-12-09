braki();
let id_zamowienia = 1;
function braki() {
	const allTdIlosc = document.querySelectorAll("div#prawy td.td-ilosc");
	for (let td of allTdIlosc) {
		const ilosc = td.textContent;
		if (ilosc == 0) {
			td.style.backgroundColor = "red";
		} else if (ilosc > 0 && ilosc <= 5) {
			td.style.backgroundColor = "yellow";
		} else {
			td.style.backgroundColor = "honeydew";
		}
	}
}
function aktualizuj(el) {
	const aktualnyTd = el.parentElement.previousElementSibling;
	let newIlosc = prompt("Podaj nową ilość:");
	aktualnyTd.textContent = newIlosc;
	braki();
}
function order(el) {
	const aktulanyTd = el.parentElement.parentElement.children[0].textContent;
	alert(`Zamówienie nr: ${id_zamowienia} Produkt: ${aktulanyTd}`);
	id_zamowienia++;
	let colorChage = [
		el.parentElement.previousElementSibling.previousElementSibling,
		el.parentElement.previousElementSibling.previousElementSibling
			.previousElementSibling,
		el.parentElement.previousElementSibling.previousElementSibling
			.previousElementSibling.previousElementSibling,
	];
    for(let i = 0; i<3;i++){
        colorChage[i].style.color: 'red';
    }
}

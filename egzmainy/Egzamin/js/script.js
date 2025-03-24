const button = document.getElementById('submit');
const p = document.getElementById('wynik');
button.addEventListener('click', () => {
	const checkboxes = document.querySelectorAll("input[type='checkbox']");
	let suma = 0;
	checkboxes.forEach(checkbox => {
		if (checkbox.checked) {
			suma += Number(checkbox.value);
		}
	});
	p.innerHTML = `Cena zabiegów: ${suma}`;
});

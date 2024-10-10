const zloteMysli = [
	"Największą podróżą jest podróż do samego siebie.",
	"Szczęście nie jest celem, ale sposobem życia.",
	"Zmiana zaczyna się od nas samych.",
	"Najlepsze rzeczy w życiu są darmowe: uśmiech, przyjaźń, miłość.",
	"Ucz się od wczoraj, żyj dziś, miej nadzieję na jutro.",
	"Nie bój się porażek, boją się tylko ci, którzy nic nie robią.",
	"Czas jest najcenniejszym skarbem, którego nie można odzyskać.",
	"Współczucie jest językiem, który głusi mogą usłyszeć, a niewidomi zobaczyć.",
	"Mądrość polega nie tylko na wiedzy, ale także na umiejętności jej zastosowania.",
	"Największym bogactwem jest zdrowie.",
];
const p = document.getElementById("p");
p.textContent = `Dzisiaj jest czwartek 10 październik 2024`;
const cos = setInterval(() => {
	let counter = 0;
	counter++;
	let rand = Math.floor(Math.random() * 10);
	let par = document.createElement("p");
	par.textContent = zloteMysli[rand];
	document.body.appendChild(par);
	if (counter == 10) {
		clearInterval(cos);
	}
}, 1000);

// # Zadania - tablice
// ==========================

// W pliku `data/data.js` znajduje się tablica z państwami.
// Stosując poznane metody tablicowe zrealizuj poniższe zadania:

// ## Zadanie 1
// --------------------------
// Wypisz wszystkie nazwy państw, a następnie ile jest razem ludności we wszystkich państwach
let sumPop = 0;
countries.forEach(country => {
	console.log(country.name);
	sumPop += country.population;
});
console.log('Całkowita populacja: ' + sumPop);
// ## Zadanie 2
// --------------------------
// Wypisz średnią ludność w państwach
console.log(`Średnia populacja: ${(sumPop / countries.length).toFixed(0)}`);

// ## Zadanie 3
// --------------------------
// Wypisz ile jest państw, które mają dodatni wzrost
let counterGrow = 0;
let growBelow0 = 0;
countries.forEach(country => {
	if (country.grow > 0) counterGrow++;
	else if (country.grow < 0) growBelow0++;
});
console.log('Ilosc krajow z dodatnim wzrostem: ' + counterGrow);
// ## Zadanie 4
// --------------------------
// Wypisz ile jest państw, które mają ujemny wzrost
console.log('Ilosc krajow z ujemnym wzrostem: ' + growBelow0);
// ## Zadanie 5
// --------------------------
// Napisz ile wszystkie państwa zajmują procent powierzchni Ziemi (world_area) z dokładnością do trzech cyfr po przecinku
let worldArea = 0;
countries.forEach(country => {
	worldArea += country.world_area_in_percent;
});
console.log('Obszar zajety przez kraje' + worldArea.toFixed(3));
// ## Zadanie 6
// --------------------------
// Napisz ile wynosi średnia dzietności na świecie (fertility_rate) (uwaga - niektóre kraje nie mają danych - wtedy jest null - więc nie bierzemy ich pod uwagę). Dokładność do dwóch liczb po przecinku.
let fertilitySum = 0;
let howmanycount = 0;
countries.forEach(country => {
	if (country.fertility_rate != null) {
		fertilitySum += country.fertility_rate;
		howmanycount++;
	}
});
console.log(
	`Średnia dzietnosć na swiecie: ${(fertilitySum / howmanycount).toFixed(2)}`
);
// ## Zadanie 7
// --------------------------
// Napisz ile wynosi średnia wieku na świecie (również niektóre kraje nie mają danych - wtedy jest null - więc nie bierzemy ich pod uwagę).
let howmanyage = 0;
let avgagesum = 0;
countries.forEach(country => {
	if (country.fertility_rate != null) {
		avgagesum += country.medium_age;
		howmanyage++;
	}
});
console.log(`Średnia wieku na swiecie: ${(avgagesum / howmanyage).toFixed(0)}`);
// ## Zadanie 8
// --------------------------
// Wypisz wszystkie dane na temat Polski
countries.forEach(country => {
	if (country.name == 'Poland') {
		console.log(country);
	}
});
// ## Zadanie 9
// --------------------------
// Sprawdź czy średnia wieku w Polsce jest większa od średniej na Świecie.
countries.forEach(country => {
	if (country.name == 'Poland') {
		if (country.medium_age > avgagesum / howmanyage) {
			console.log('Średnia wieku w Polsce jest wieksza niz swiatowa');
		} else if (country.medium_age > avgagesum / howmanyage) {
			console.log('Średnia wieku w Polsce jest mniejsza niz swiatowa');
		} else {
			console.log('Średnia wieku w Polsce jest taka sama jak swiatowa');
		}
	}
});
const input = document.getElementById('inp');
const btn = document.getElementById('button');
const resultDiv = document.createElement('div');
document.body.appendChild(resultDiv);

btn.addEventListener('click', () => {
	resultDiv.innerHTML = ''; s
	const countryName = input.value;
	const country = countries.find(country => country.name === countryName);
	if (!country) {
		resultDiv.textContent = 'Nie znaleziono kraju';
	} else {
		for (const key in country) {
			const p = document.createElement('p');
			p.textContent = `${key}: ${country[key]}`;
			resultDiv.appendChild(p);
		}
	}
});

const btn = document.querySelector('#inpBtn');
const input = document.getElementById('numbInp');
const answears = document.querySelector('.answers');
const guess = document.querySelector('.guess');
const hint = document.createElement('p');
guess.appendChild(hint);
const ul = document.createElement('ul');
answears.appendChild(ul);
let numb = Math.floor(Math.random() * 11 + 1);
let counter = 1;
btn.addEventListener('click', () => {
	let userNumb = Number(input.value);
	if (userNumb < 1 || userNumb > 10) {
		alert('Podaj liczbę z zakresu 1-10');
	} else if (userNumb > numb) {
		const step = document.createElement('li');
		hint.textContent = 'Wylosowana liczba jest mniejsza od twojej';
		step.textContent = `Krok: ${counter}. Wybrałeś liczbę: ${userNumb}`;
		ul.appendChild(step);
		counter++;
	} else if (userNumb < numb) {
		const step = document.createElement('li');
		hint.textContent = 'Wylosowana liczba jest większa od twojej';
		step.textContent = `Krok: ${counter}. Wybrałeś liczbę: ${userNumb}`;
		ul.appendChild(step);
		counter++;
	} else {
		const step = document.createElement('li');
		hint.textContent = 'Brawo! Zgadłeś liczbę';
		step.textContent = `Krok: ${counter} Zgadłeś liczbę ${numb}`;
		ul.appendChild(step);
		counter++;
	}
});

const btn = document.querySelector('#submit');
const check = document.querySelector("input[type='checkbox']");
const p = document.querySelector('#wynik');
const name = document.getElementById('imie');
const surname = document.getElementById('nazwisko');
const content = document.getElementById('usluga');
btn.addEventListener('click', () => {
	if (check.checked) {
		p.innerHTML = `<span class='imie'>${name.value} ${surname.value}</span><br>Treść twojej sprawy: ${content.value} <br> Na podany email zostanie wyslana oferta.`;
	} else {
		p.style.color = 'red';
		p.innerHTML = 'Musisz zapoznać się z regulaminem';
	}
});

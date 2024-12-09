const inp = document.getElementById('textInp');
const load = document.getElementById('load');
const save = document.getElementById('save');
save.addEventListener('click', () => {
	localStorage.clear();
	localStorage.input = inp.value;
});
load.addEventListener('click', () => {
	if (localStorage.input != undefined) {
		console.log(localStorage.input);
	} else {
		console.log('Nie masz zapisanych żadnych danych');
	}
});

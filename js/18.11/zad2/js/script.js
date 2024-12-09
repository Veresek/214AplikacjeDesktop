const btn = document.querySelector('button');
const h1 = document.querySelector('h1');
const p = document.querySelector('p');
if (localStorage.theme == 'dark') {
	h1.classList = 'dark';
	p.classList = 'dark';
	document.body.style.backgroundColor = '#222';
} else {
	h1.classList = '';
	p.classList = '';
	document.body.style.backgroundColor = '#FFF';
}
btn.addEventListener('click', () => {
	console.log('cos');
	if (localStorage.theme == 'dark') {
		localStorage.theme = 'light';
		h1.classList = '';
		p.classList = '';
		document.body.style.backgroundColor = '#FFF';
	} else {
		localStorage.theme = 'dark';
		h1.classList = 'dark';
		p.classList = 'dark';
		document.body.style.backgroundColor = '#222';
	}
});

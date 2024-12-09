const size = document.querySelector('#inp');
const type = document.querySelector('#sel');
const btn = document.querySelectorAll('button');
const p = document.createElement('p');
btn.forEach(button => {
	button.addEventListener('click', function () {
		p.textContent = `To jest przykład paragrafu, który może być dowolnie formatowany przez JavaScript`;
		p.style.fontSize = `${Number(size.value)}%`;
		if (type.value == 'kursywa') {
			p.style.fontStyle = 'italic';
		} else {
			p.style.fontStyle = 'normal';
		}
		p.style.color = this.className;
		document.body.appendChild(p);
	});
});

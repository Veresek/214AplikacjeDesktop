const btn = document.getElementById('btn');
const checkbox = document.getElementById('poprawiny');
const inp = document.getElementById('inp');
btn.addEventListener('click', () => {
	const result = document.createElement('p');
	if (checkbox.checked) {
		result.textContent = `Kosz twojego wesela dla ${inp.value} osób z poprawinami to ${
			Number(inp.value) * 100 * 1.3
		} złotych`;
		document.body.appendChild(result);
	} else {
		result.textContent = `Kosz twojego wesela dla ${inp.value} osob bez poprawin to ${
			Number(inp.value) * 100
		} złotych`;
		document.body.appendChild(result);
	}
});

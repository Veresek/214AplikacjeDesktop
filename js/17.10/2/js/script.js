const p = document.getElementById('p');
const inp = document.querySelector('#inp');
const btn = document.querySelector('button');
const check = document.querySelector("input[type='checkbox']");
check.addEventListener('change', () => {
	if (check.checked) {
		inp.disabled = true;
	} else {
		inp.disabled = false;
	}
});
btn.addEventListener('click', () => {
	if (check.checked) {
		p.textContent = `Dowieziemy twoją pizze za darmo`;
	} else {
		p.textContent = `Dowóz będzie cię kosztował ${(
			Number(inp.value) *
			2.5 *
			2
		).toFixed(2)} zł`;
	}
});

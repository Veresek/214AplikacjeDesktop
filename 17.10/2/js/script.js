const p = document.getElementById('p');
const inp = document.querySelector('input');
const btn = document.querySelector('button');
const check = document.querySelector("input[type='checkbox']");
btn.addEventListener('click', () => {
	if (check.checked) {
		p.textContent = `Dowieziemy twoją pizze za darmo`;
	} else {
		p.textContent = `Dowóz będzie cię kosztował ${
			Number(inp.value) * 2.5 * 2
		} zł`;
	}
});

const el = document.querySelectorAll("td");
el.forEach(element => {
	element.addEventListener("click", () => {
		element.style.backgroundColor = `black`;
	});
	element.addEventListener("dblclick", () => {
		element.style.backgroundColor = `white`;
	});
});

const div1 = document.querySelector(".test");
const pElement = document.querySelector(".zdarzenie");
div1.addEventListener("click", () => {
	pElement.textContent = `Zdarzenie \"click\"`;
});
div1.addEventListener("dblclick", () => {
	pElement.textContent = `Zdarzenie \"dblclick\"`;
});
div1.addEventListener("mouseenter", () => {
	pElement.textContent = `Zdarzenie \"mouseenter\""`;
});
div1.addEventListener("mouseout", () => {
	pElement.textContent = `Zdarzenie \"mouseout\"`;
});

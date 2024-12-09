const inp = document.querySelector("input");
const btn = document.querySelector("button");
const ul = document.querySelector("ul");
btn.addEventListener("click", () => {
	let newLi = document.createElement("li");
	newLi.textContent = inp.value;
	ul.appendChild(newLi);
});

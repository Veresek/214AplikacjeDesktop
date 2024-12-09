const p = document.querySelector("p");
let i = 10;
const cos = setInterval(() => {
	p.classList.toggle("dis");
}, 500);
setTimeout(() => {
	clearInterval(cos);
}, 11000);

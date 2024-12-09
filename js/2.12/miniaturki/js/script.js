const main = document.querySelector('.miniaturki');
let imgs = main.querySelectorAll('img');
const mainimg = document.querySelector('#mainIMG');
imgs.forEach(el => {
	el.addEventListener('mouseover', function () {
		this.src = `./img/${this.alt}-szary.jpg`;
	});
	el.addEventListener('mouseout', function () {
		this.src = `./img/${this.alt}.jpg`;
	});
	el.addEventListener('click', function () {
		mainimg.src = `./img/${this.alt}.jpg`;
	});
});

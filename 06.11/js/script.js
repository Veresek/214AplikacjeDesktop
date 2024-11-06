let range100 = document.getElementById('range100');
let range250 = document.getElementById('range250');
let range250Btn = document.getElementById('range250Btn');
let range100Btn = document.getElementById('range100Btn');
let colorBtn = document.getElementById('color');
let blackBtn = document.getElementById('blackWhite');
let filterBtn = document.getElementById('filterBtn');
let imgs = document.querySelectorAll('img');
let radios = document.querySelectorAll('input[type="radio"]');
filterBtn.addEventListener('click', () => {
	if (radios[0].checked) {
		imgs[0].style.filter = 'blur(5px)';
	} else if (radios[1].checked) {
		imgs[0].style.filter = 'sepia()';
	} else {
		imgs[0].style.filter = 'invert()';
	}
});
colorBtn.addEventListener('click', () => {
	imgs[1].classList.remove('gray');
});
blackBtn.addEventListener('click', () => {
	imgs[1].classList.add('gray');
});
range100Btn.addEventListener('click', () => {
	imgs[2].style.opacity = `${range100.value}%`;
});
range250Btn.addEventListener('click', () => {
	imgs[3].style.filter = `brightness(${range250.value})`;
});

const btns = document.querySelectorAll('button');
const right = document.querySelector('#right');
const fontColor = document.querySelector('#fontColor');
const fontSize = document.querySelector('#fontSize');
const imgBorder = document.querySelector('#imgBorder');
const img = document.querySelector('img');
const ul = document.querySelector('ul');
const radios = document.querySelectorAll("input[type='radio']");
btns[0].addEventListener('click', () => {
	right.style.backgroundColor = 'indigo';
});
btns[1].addEventListener('click', () => {
	right.style.backgroundColor = 'steelblue';
});
btns[2].addEventListener('click', () => {
	right.style.backgroundColor = 'olive';
});
fontColor.addEventListener('change', () => {
	right.style.color = fontColor.value;
});
fontSize.addEventListener('change', () => {
	right.style.fontSize = fontSize.value;
});
imgBorder.addEventListener('click', () => {
	if (imgBorder.checked) {
		img.style.border = '1px white solid';
	} else {
		img.style.border = 'none';
	}
});
radios[0].addEventListener('click', () => {
	ul.style.listStyleType = 'disc';
});
radios[1].addEventListener('click', () => {
	ul.style.listStyleType = 'square';
});
radios[2].addEventListener('click', () => {
	ul.style.listStyleType = 'circle';
});

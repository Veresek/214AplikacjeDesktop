const btn = document.getElementById('checkAns');
const text1 = document.getElementById('text1');
const text2 = document.getElementById('text2');
const p = document.createElement('p');
// btn.addEventListener('click', () => {
// 	if (text1.value != '' && text2.value != '') {
// 		let counter = 0;
// 		let letters1 = [...text1.value];
// 		let letters2 = [...text2.value];
// 		letters1.forEach(el => {
// 			for (let i = 0; i < letters2.length; i++) {
// 				if (el === letters2[i]) {
// 					counter++;
// 					letters2.slice(i, i);
// 				}
// 			}
// 		});
// 		if (counter >= letters1.length) {
// 			p.innerHTML = `${text2.value} jest anagramem słowa ${text1.value}`;
// 			document.body.appendChild(p);
// 		} else {
// 			p.innerHTML = `${text2.value} nie jest anagramem słowa ${text1.value}`;
// 			document.body.appendChild(p);
// 		}
// 	} else {
// 		alert('Podaj poprawnie pierwszy i drugi wyraz');
// 	}
// });
btn.addEventListener('click', () => {
	let letters1 = text1.value.split('').sort().join('');
	let letters2 = text2.value.split('').sort().join('');
	if (letters1 === letters2) {
		p.textContent = `${text1.value} jest anagramem słowa ${text2.value}`;
	} else {
		p.textContent = `${text1.value} nie jest anagramem słowa ${text2.value}`;
	}
	document.body.appendChild(p);
});

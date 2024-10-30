const btn = document.getElementById('btn');
const inp = document.getElementById('inp');
const sel = document.getElementById('sel');
let numbers = [123, 543, 123, 6754, 2342, 3];
function addP(tab) {
	let res = tab.join(' | ');
	const p = document.createElement('p');
	p.innerHTML = `Tablica: ${res}`;
	document.body.appendChild(p);
}
btn.addEventListener('click', () => {
	numbers.push(Number(inp.value));
	inp.value = '';
	console.log(numbers);
});
sel.addEventListener('change', () => {
	switch (sel.value) {
		case 'delLast':
			let delLast = numbers.slice();
			delLast.pop();
			addP(delLast);
			break;
		case 'delFirst':
			let delFirst = numbers.slice();
			delFirst.shift();
			addP(delFirst);
			break;
		case 'even':
			const even = numbers.filter(el => el % 2 == 0);
			addP(even);
			break;
		case 'odd':
			const odd = numbers.filter(el => el % 2 == 1);
			addP(odd);
			break;
		case 'sumNums':
			let sumNums = 0;
			numbers.forEach(el => {
				sumNums += el;
			});
			let sumTab = [sumNums];
			addP(sumTab);
			break;
		case 'PrimeNums':
			let primeNums = [];
			numbers.forEach(el => {
				let counter = 0;
				for (let i = 2; i < el; i++) {
					if (el % i == 0) {
						counter++;
						break;
					}
				}
				if (counter == 0 && el != 0 && el != 1) {
					primeNums.push(el);
				}
			});
			addP(primeNums);
			break;
	}
});

const letters = ['c', 'd'];
letters.push('e', 'f');
letters.unshift('a', 'b');
let sign = 'c';
if (letters.includes(sign)) {
	console.log('Tablica letters zawiera literę c');
} else {
	console.log('Tablica letters nie zawiera litery c');
}

let array = [1, 2, [3, 4], [5, (6)[(7, 8)]]];
array.flat(5);
console.log(array);

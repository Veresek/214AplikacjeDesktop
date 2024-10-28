function addTable(content, title) {
	const caption = document.createElement('caption');
	const table = document.createElement('table');
	const tr = document.createElement('tr');
	table.style.borderCollapse = 'collapse';
	caption.innerHTML = title;
	document.body.appendChild(caption);
	document.querySelector('body').appendChild(table);
	table.appendChild(tr);
	for (let i = 0; i < content.length; i++) {
		const td = document.createElement('td');
		td.innerHTML = content[i];
		td.style.padding = '0 15px';
		td.style.border = '2px solid red';
		tr.appendChild(td);
	}
}
const names = ['Jan', 'Ala', 'Tom', 'Ewa', 'Max', 'Tom'];
addTable(names, 'ORYGINAL TABELA');
//slice()
// let names1 = names.slice(1);
// addTable(names1, 'slice()');
// //splice()
// names1 = names.splice(1, 2);
// addTable(names1, 'splice()');
// //toSplice()
// names1 = names.toSpliced(1, 2, 'Kunegunda');
// addTable(names1, 'toSpliced()');
// //findIndex()
const numbers = [1, 2, 6, 0, 11, 23, 21];
let x = numbers.findIndex(el => {
	return el > 2;
});
console.log(x);
addTable(numbers, 'findIndex()');
x = numbers.findLastIndex(el => {
	return el > 10;
});
console.log(x);
//find()
x = numbers.find(el => {
	return el % 2 == 0;
});
console.log(x);
//findLast()
x = numbers.findLast(el => {
	return el % 2 == 1;
});
console.log(x);
//includes()
console.log(numbers.includes(66));
//sort()
// names.sort();
// addTable(numbers, 'oryginal');
// numbers.sort((a, b) => a - b);
// addTable(numbers, 'sort()');
const sortedNames = names.toSorted();
addTable(names, 'names');
addTable(sortedNames, 'toSorted()');
//reverse()
// names.reverse();
// addTable(names, 'reverse()');
//toReversed()
const revNames = names.toReversed();
addTable(revNames, 'toReversed()');
//copyWithin()
// names.copyWithin(0, 3);
// addTable(names, 'copyWithin()');
// join()
let str = names.join('-');
console.log(str);
const tab = [1, 2, [3, 4], 4, [6, 7, 8]];
console.log(tab.flat());
//every()
let y = names.every(el => el.length >= 0);
console.log(y);
//some()
y = names.some(el => el.length >= 6);
console.log(y);

for (let i = 0; i < names.length; i++) {
	console.log(names[i]);
}
for (let name of names) {
	console.log(name);
}
//foreach
numbers.forEach(el => {
	console.log(el * 2);
});
//map()
const trippledNumbers = numbers.map(el => el * 3);
addTable(trippledNumbers, 'Numbers.map()');
const newNames = names.map(el => el + '!');
addTable(newNames, 'Numbers.map()');
//filter()
const evenNumbers = numbers.filter(el => el % 2 == 0);
addTable(evenNumbers, 'Numbers.filter()');

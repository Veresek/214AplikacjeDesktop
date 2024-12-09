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
let names = ['Jan', 'Ala', 'Tom'];
addTable(names, 'ORYGINAL TABELA');
let x = names.push('Ewa', 'Max');
addTable(names, ".push('Ewa','Max')");
console.log(x);
x = names.pop();
addTable(names, 'names.pop()');
console.log('names.pop()', x);
x = names.shift();
addTable(names, 'names.shift()');
console.log(x);
x = names.unshift('Julka');
addTable(names, '.unshift("Julka")');
console.log(x);
const names2 = ['Juzek'];
const names3 = names.concat(names2, 'Kunegunda');
addTable(names3, '.concat()');

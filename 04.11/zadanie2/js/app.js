//1
console.log(`W Polsce jest ${cities.length} miast`);
//2
cities.forEach(el => {
	console.log(`W ${el.name} jest ${el.people} ludzi`);
});
//3
let big = cities.filter(el => el.people > 15000);
console.log(big[0].name);
//4
const avg =
	cities.reduce((partialSum, a) => partialSum + a.people, 0) / cities.length;
const above = cities.filter(el => el.people > avg);
console.log(above);
//5
const avb10k = [];
cities.forEach(el => {
	el.people > 10000 ? avb10k.push(el.name) : console.log();
});
console.log(avb10k);
//6
let less = 0;
let abv = 0;
cities.forEach(element => {
	element.people >= 10000 ? abv++ : less++;
});
less > abv
	? console.log('Więcej jest miast mniejszych niz 10000 ludzi')
	: console.log('Więcej jest miast większych niż 10000 ludzi');
console.log(abv);

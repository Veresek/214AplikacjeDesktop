const myCar = {
	model: 'Jaris',
	marka: 'Toyota',
	przebieg: 2500,
	fajna: false,
};
//1
for (let key in myCar) {
	console.log(key);
}
//2
myCar.zmiana = function (wlasciwosc, wartosc) {
	this[wlasciwosc] = wartosc;
};
myCar.zmiana('model', 'coś');
console.log(myCar.model);
//3
const summator = {
	sumowanie: function (arr) {
		let ind = 0;
		arr.forEach(element => {
			ind += element;
		});
		this.sum = ind;
	},
	sum: 0,
};
summator.sumowanie([1, 2, 3, 5]);
console.log(summator.sum);
//4
const car = {
	name: 'BMW',
	age: 12,
};
for (let key in car) {
	console.log(`${key}: ${car[key]}`);
}

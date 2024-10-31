const dynia = {
	color: 'pomarańczowy',
	isScary: true,
	weight: 2.5,
	shape: 'cylindrowy',
	shine(color) {
		console.log(
			`Jestem ${this.shape} obiekt dyni. I w dodatku świecę na ${color}.`
		);
	},
	strangeMethod() {
		return 'Boo!';
	},
};
console.log(dynia.shape);
console.log(dynia.weight);
dynia.shine('różowo');
dynia.amountOfSeeds = 125;
delete dynia.amountOfSeeds;
console.log(dynia.strangeMethod());
delete dynia.strangeMethod;
// console.log(dynia.strangeMethod());
const student = new Object();
console.log(student, typeof student);
student.name = 'Kuba';
student.pesel = 12345678;
student.isLazy = true;
student.averageGrade = 5.6;
student.cheatingOnTest = function (subject) {
	console.log(`${this.name} ściąga na sprawdzianie z ${subject}`);
};
console.log(student.averageGrade);
student.cheatingOnTest('Matematyki');

class Car {
	constructor(brand, model, year, color, isDamaged, milage) {
		this.brand = brand;
		this.model = model;
		this.year = year;
		this.color = color;
		this.isDamaged = isDamaged;
		this.milage = milage;
	}
	startEngine(sound) {
		console.log(`${this.model} odpalił silnik. ${sound}`);
	}
}
const car1 = new Car('Fiat', 'Uno', 1990, 'szary', true, 2000000000);
console.log(car1);
const car2 = new Car('Nissan', 'Juke', 2025, 'różowy', false, 10);
car2.startEngine('Brrrrr');
const car3 = new Car('BMW', 'M4', 2020, 'biały', true, 15000000);
console.log(car3);

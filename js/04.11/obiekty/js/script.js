class Worker {
	constructor(name, surname, age, jobTitle, isAvaiable) {
		this.name = name || 'unknown';
		this.surname = surname;
		this.age = age;
		this.jobTitle = jobTitle;
		this.isAvaiable = isAvaiable || true;
	}
	showJobTitle() {
		console.log(this.jobTitle);
	}
}
class Product {
	constructor(id, nazwa, waga, cena) {
		this.id = id;
		this.nazwa = nazwa;
		this.waga = waga;
		this.cena = cena;
	}
	showName() {
		console.log(`Obiekt numer ${this.id} nosi nazwę ${this.nazwa}`);
	}
}
let budul = {
	adres: 'Budownala 4 05-300',
	type: 'Ponadpodstawowa',
	students: 1500,
	classes: 25,
	name: 'Zespół szkół nr.1 im. Kazimierza Wielkiego w Mińsku Mazowieskim',
	ImAStudent: function () {
		console.log(`Jestem uczniem ${this.name}`);
	},
};
const worker1 = new Worker('Jan', 'Kowalski', 23, 'szef');
const worker2 = new Worker(
	'Ewa',
	'Nowak',
	33,
	'szefowa wszystkich szefow',
	false
);
const produkt1 = new Product(1, 'Monitor', 2, 1500);
const produkt2 = new Product(2, 'Myszka', 0.05, 300);
produkt1.showName();
produkt2.showName();
console.log(`Oba produkty w sumie ważą: ${produkt1.waga + produkt2.waga}kg`);
produkt1.cena > produkt2.cena
	? console.log('Droższym z nich jest obiekt nr: 1')
	: console.log('Droższym z nich jest obiekt nr: 2');

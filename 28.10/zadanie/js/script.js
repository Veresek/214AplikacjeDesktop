//Zadanie 1
const cities = [
	'Mińsk Mazowiecki',
	'Warszawa',
	'Kraków',
	'Poznań',
	'Bydgoszcz',
	'Płock',
];
console.log(cities);
//zadanie 2
let array = [12, 'jabłko', true, 'banan', 42, 'marchew', 100, 'truskawka'];
//1
console.log(array.slice(0, 2));
//2
console.log(array[array.length - 1]);
//3
console.log(array);
//4
let secondElement = [];
for (let i = 0; i < array.length; i += 2) {
	secondElement.push(array[i]);
}
console.log(secondElement);
//5
let str = [];
array.forEach(el => {
	if (typeof el == 'string') {
		str.push(el);
	}
});
console.log(str);
//6
let nums = [];
array.forEach(el => {
	if (typeof el == 'number') {
		nums.push(el);
	}
});
console.log(nums);
//zadanie 3
const numbers = [11, 2, 3, 4, 5, 6, 7, 432, 654, 123, 54376, 23];
//1
let sum = 0;
numbers.forEach(el => {
	sum += el;
});
console.log(sum);
//2
console.log((sum / numbers.length).toFixed(2));
//3
console.log(
	numbers.filter(el => {
		return el % 2 == 0;
	})
);
//4
console.log(
	numbers.filter(el => {
		return el % 2 == 1;
	})
);
//5
let max = numbers[0];
for (num of numbers) {
	if (num > max) {
		max = num;
	}
}
console.log(max);
//6
let min = numbers[0];
for (num of numbers) {
	if (num < min) {
		min = num;
	}
}
console.log(min);
//7
console.log(numbers.toReversed());
//8
console.log(
	numbers.findIndex(el => {
		return el > 10;
	})
);
//9
console.log(
	numbers.find(el => {
		return el % 2 == 0;
	})
);
//zadanie 4
function add(arr) {
	let sum = 0;
	arr.forEach(el => {
		sum += el;
	});
	return sum;
}
console.log(add([1, 2, 3]));
//zadanie 5
function avg(arr) {
	let trippled = [];
	let average = (add(arr) / arr.length).toFixed(3);
	console.log(average);
	arr.forEach(el => {
		trippled.push(el * average);
	});
	return trippled;
}
console.log(avg([1, 2, 3, 5438]));
//zadanie 6
function EvenAvg(arr) {
	let evenNums = arr.filter(el => {
		return el % 2 == 0;
	});
	let sum = 0;
	evenNums.forEach(el => {
		sum += el;
	});
	return sum / evenNums.length;
}
console.log(EvenAvg([1, 2, 3, 5438]));
//zadanie 7
function ascendingArr(arr) {
	arr.sort((a, b) => {
		return a - b;
	});
	return arr;
}
console.log(ascendingArr([1, 2, 3, 5438]));
//zadanie 8
function decreasingArr(arr) {
	arr.sort((a, b) => {
		return b - a;
	});
	return arr;
}
console.log(decreasingArr([1, 2, 3, 5438]));

//1
users.forEach(user => {
	console.log(`${user.name} => ${user.email}`);
});
//2
const pelnoletni = users.filter(el => el.age > 18);
console.log(pelnoletni);
//3
const female = users.filter(el => el.gender == 'female');
console.log(female);
//4
const dolor = users.filter(el => el.tags.includes('dolor'));
console.log(dolor);
//5
console.log(users.every(user => user.age >= 18));
//6
console.log(users.some(user => user.age >= 18));
//7
const bigNames = users.map(user =>
	user.name.slice(user.name.indexOf(' ')).toUpperCase()
);
console.log(bigNames);
//8
let females = 0;
let male = 0;
users.forEach(user => (user.gender == 'female' ? females++ : male++));
females > male
	? console.log('kobiety wygrywają')
	: console.log('mezczyzni wygrywaja');

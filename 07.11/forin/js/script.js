const uczen = {
	imie: 'Jan',
	nazwisko: 'Kowalski',
	wiek: 18,
	kraj: 'Polska',
	miasto: 'Mińsk Mazowiecki',
};
console.log(uczen.imie);
console.log(uczen['nazwisko']);
for (let key in uczen) {
	console.log(key + ' : ' + uczen[key]);
}

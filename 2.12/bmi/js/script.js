const height = document.getElementById('height');
const weight = document.getElementById('weight');
const btn = document.getElementById('btn');
const bmiRes = document.getElementById('bmi');
const weightCond = document.getElementById('weightCond');
btn.addEventListener('click', () => {
	let cond = '';
	let bmi = (
		Number(weight.value) / Math.pow(Number(height.value) / 100, 2)
	).toFixed(2);
	bmiRes.textContent = 'BMI: ' + bmi;
	if (bmi < 18.5) cond = 'Niedowaga';
	else if (bmi >= 18.5 && bmi < 25) cond = 'Normalna waga';
	else if (bmi >= 25 && bmi < 30) cond = 'Nadwaga';
	else cond = 'Otyłość';
	weightCond.textContent = `Kondycja wagowa: ${cond}`;
});

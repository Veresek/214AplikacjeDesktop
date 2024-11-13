const counter = document.getElementById('counter');
const startBtn = document.getElementById('start');
const pauseBtn = document.getElementById('pause');
const restartBtn = document.getElementById('restart');
let isActive = false;
let mSec = 0;
let hours = 0,
	minutes = 0,
	seconds = 0,
	msec = 0;
let update;
startBtn.addEventListener('click', () => {
	if (!isActive) {
		isActive = true;
		update = setInterval(() => {
			mSec++;
			msec = mSec;
			hours = Math.floor(msec / 36000);
			msec -= 36000 * hours;
			minutes = Math.floor(msec / 600);
			msec -= 600 * minutes;
			seconds = Math.floor(msec / 10);
			msec -= 10 * seconds;
			hours += '';
			minutes += '';
			seconds += '';
			msec += '';
			hours = hours.padStart(2, '0');
			minutes = minutes.padStart(2, '0');
			seconds = seconds.padStart(2, '0');
			msec = msec.padEnd(2, '0');
			counter.innerHTML = `${hours}:${minutes}:${seconds}:${msec}`;
		}, 100);
	} else {
		alert('Licznik jest już odpalony');
	}
});
pauseBtn.addEventListener('click', () => {
	if (isActive) {
		isActive = false;
		clearInterval(update);
	} else {
		alert('Licznik nie jest odpalony');
	}
});
restartBtn.addEventListener('click', () => {
	mSec = 0;
	counter.innerHTML = `00:00:00:00`;
});

let text = document.getElementById("textdate");
let age = document.getElementById("age");
let lat = document.getElementById("lat");

function LoadDate() {
	let date = new Date();
	let year = date.getFullYear();
	let month = date.getMonth();
	let day = date.getDate();
	let hours = date.getHours();
	let minutes = date.getMinutes();
	let seconds = date.getSeconds();
	minutes < 10 ? (minutes = `0${minutes}`) : minutes;
	const monthNames = [
		"Styczeń",
		"Luty",
		"Marzec",
		"Kwiecień",
		"Maj",
		"Czerwiec",
		"Lipiec",
		"Sierpień",
		"Wrzesień",
		"Październik",
		"Listopad",
		"Grudzień",
	];
	month = monthNames[Number(date.getMonth())];
	const daysOfWeek = [
		"Poniedziałek",
		"Wtorek",
		"Środa",
		"Czwartek",
		"Piątek",
		"Sobota",
		"Niedziela",
	];
	let dofweek = daysOfWeek[Number(date.getDay()) - 1];
	seconds < 10 ? (seconds = `0${seconds}`) : seconds;
	let fulldate = `${day} ${month} ${year} | ${hours}:${minutes}:${seconds} ${dofweek}`;
	text.textContent = `DATE: ${fulldate}`;
	setTimeout("LoadDate()", 1000);
}
function calc() {
	let date = new Date();
	let year = date.getFullYear();
	let month = date.getMonth();
	let day = date.getDay();
	let userDate = age.value.split("-");
	let userYear = Number(userDate[0]);
	let userMonth = Number(userDate[1]);
	let userDay = Number(userDate[2]);
	if (userMonth < month + 1) {
		lat.textContent = `Masz ${year - userYear} lat`;
	} else if (userMonth > month + 1) {
		lat.textContent = `Masz ${year - (userYear + 1)} lat`;
	} else if (userMonth == month + 1) {
		if (userDay < day) {
			lat.textContent = `Masz ${year - userYear} lat`;
		}
		if (userDay > day) {
			lat.textContent = `Masz ${year - userYear + 1} lat`;
		}
	} else {
	}
}
function lokata() {
	let ile = document.getElementById("ile");
	let tekst = document.getElementById("zysk");
	tekst.textContent = `Zysk z lokaty wnosi: ${
		ile * 1.055 - ile - (ile * 1.055 - ile) * 0.19
	}`;
}

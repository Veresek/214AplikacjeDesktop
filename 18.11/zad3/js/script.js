const btn = document.querySelector('button');
const inp = document.querySelector('input');
const main = document.querySelector('main');
if (localStorage.tasks == undefined) {
	localStorage.tasks = '';
}
let tasks = localStorage.tasks.split(',');
function loadTasks() {
	tasks.forEach(el => {
		if (el !== '' && el != undefined) {
			createTask(el);
		}
	});
}
btn.addEventListener('click', () => {
	if (inp.value !== '') {
		if (localStorage.tasks !== '') {
			localStorage.tasks += `,${inp.value}`;
		} else {
			localStorage.tasks = inp.value;
		}
		createTask(inp.value);
	}
	inp.value = '';
});
function createTask(value) {
	const div = document.createElement('div');
	const p = document.createElement('p');
	const btn = document.createElement('button');
	btn.textContent = 'Zrobione';
	btn.classList = 'delBtn';
	p.textContent = value;
	main.appendChild(div);
	div.appendChild(p);
	div.appendChild(btn);
	btn.addEventListener('click', () => {
		tasks = localStorage.tasks.split(',');
		tasks.splice(tasks.indexOf(value), 1);
		localStorage.tasks = tasks;
		div.remove();
	});
}
loadTasks();

const ul = document.querySelector('ul');
const liList = document.querySelectorAll('li');
ul.classList.add('menu');
ul.firstElementChild.classList.add('first');
ul.lastElementChild.classList.add('last');
ul.children[2].classList.add('active');
ul.children[2].style.color = '#fff';
liList.forEach(li => {
	li.setAttribute(`title`, `Przejdź na stronę ${li.textContent}`);
	li.setAttribute('href', '#');
	if (!li.classList.contains('active')) {
		li.addEventListener('click', () => {
			alert(`Kliknięto ${li.textContent}`);
		});
	}
});

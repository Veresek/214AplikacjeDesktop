const send = document.querySelector('#sendBtn');
const randomAnswer = document.querySelector('#randomAns');
const message = document.querySelector('#mess');
const chat = document.querySelector('#chat');

function scrollToBottom() {
	chat.scrollTop = chat.scrollHeight;
}

send.addEventListener('click', () => {
	const jolMess = document.createElement('div');
	const JolImg = document.createElement('img');
	const JolText = document.createElement('p');
	JolText.textContent = message.value;
	jolMess.classList.add('message');
	jolMess.classList.add('jolanta');
	chat.appendChild(jolMess);
	JolImg.src = 'src/img/Jolka.jpg';
	jolMess.appendChild(JolImg);
	jolMess.appendChild(JolText);
	scrollToBottom();
});
randomAnswer.addEventListener('click', () => {
	let answers = [
		'Cześć! Jak się dzisiaj czujesz?',
		'To brzmi interesująco! Opowiedz więcej.',
		'Masz jakieś plany na weekend?',
		'Tak, zgadzam się z Tobą w 100%!',
		'Nie jestem pewien, ale spróbuję się dowiedzieć.',
		'To jest świetny pomysł!',
		'Czy potrzebujesz pomocy w tej sprawie?',
		'Super, że o tym wspomniałeś!',
		'Jakie masz na to przemyślenia?',
	];
	const krzyText = document.createElement('p');
	krzyText.textContent =
		answers[Math.floor(Math.random() * answers.length + 1)];
	const krzyMess = document.createElement('div');
	const krzyImg = document.createElement('img');
	krzyMess.classList.add('message');
	krzyMess.classList.add('krzysztof');
	krzyImg.src = 'src/img/Krzysiek.jpg';
	chat.appendChild(krzyMess);
	krzyMess.appendChild(krzyImg);
	krzyMess.appendChild(krzyText);
	scrollToBottom();
});

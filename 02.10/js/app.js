const nextImgButton = document.querySelector("#nextImg");
const previousImgButton = document.querySelector("#previousImg");
let mainImg = document.querySelector("#mainImg");
previousImgButton.addEventListener("click", () => {
	let mainImgSrc = mainImg.getAttribute("src");
	let num = +nazwaPliku.at(-5);
	if (num == 1) {
		num = 7;
	} else {
		num -= 1;
	}
	mainImg.setAttribute("src", `img/photo${num}.jpg`);
});
nextImgButton.addEventListener("click", () => {
	let mainImgSrc = mainImg.getAttribute("src");
	num = Number(mainImgSrc.slice(9, 10));
	console.log(num);
	if (num < 7) {
		num += 1;
	} else {
		num = 1;
	}
	mainImg.setAttribute("src", `img/photo${num}.jpg`);
});

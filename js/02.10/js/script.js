const nextImgButton = document.querySelector("#nextImg");
const previousImgButton = document.querySelector("#previousImg");
let mainImg = document.querySelector("#mainImg");
nextImgButton.addEventListener("click", () => {
	let mainImgSrc = mainImg.getAttribute("src");
	num = Number(mainImgSrc.slice(9, 10));
	if (num < 7) {
		num += 1;
	} else {
		num = 1;
	}
	mainImg.setAttribute("src", `img/photo${num}.jpg`);
});
previousImgButton.addEventListener("click", () => {
	let mainImgSrc = mainImg.getAttribute("src");
	num = Number(mainImgSrc.slice(9, 10));
	if (num == 1) {
		num = 7;
	} else {
		num -= 1;
	}
	mainImg.setAttribute("src", `img/photo${num}.jpg`);
});

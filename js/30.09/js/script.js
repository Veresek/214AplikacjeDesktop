const imgs = document.querySelectorAll(".min");
const mainImg = document.querySelector("#main");
imgs.forEach(img => {
	img.addEventListener("click", () => {
		let src = img.getAttribute("src");
		mainImg.src = `${src}`;
	});
	img.addEventListener("mouseover", () => {
		img.classList.add("sepia");
	});
	img.addEventListener("mouseout", () => {
		img.classList.remove("sepia");
	});
});

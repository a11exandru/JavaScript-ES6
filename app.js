// Animatia meniului in phone mode

function showMenu() {
	let menu = document.getElementById('menu');
	menu.style.width = "230px";
}

function closeMenu() {
	let menu = document.getElementById('menu');
	menu.style.width = "0px";
}

// Acest cod face sa apara definitia cand scrollam 

window.addEventListener("scroll", () => {
	let text = document.getElementById('animatie-definitie');
	let gif = document.getElementById('gif');
	text.classList.add('text-animation');
	gif.classList.add('gif-animation');

	// animatie text #istorie
	document.getElementById("schema").style.color = "white";
});
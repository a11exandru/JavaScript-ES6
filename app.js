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
	let header = document.querySelector('#header');
	let text = document.getElementById('animatie-definitie');
	let gif = document.getElementById('gif');
	let topArrow = document.getElementById('top-arrow');
	gif.classList.add('gif-animation');
	text.classList.add('text-animation');

	if(window.scrollY < 150) {
		header.style.backgroundColor = '#292E49';
	} else {
		header.style.backgroundColor = "#111";
	}

	if(window.scrollY < 260) {
		topArrow.style.opacity = '0';
	} else {
		topArrow.style.opacity = '1';
	}

	if(window.scrollY > 490) {
		// animatie text #istorie
		document.getElementById("schema").style.color = "white";
	}
});
function addListeners() {
	var els = document.getElementsByClassName("bead");
	for (var i = 0; i < els.length; i++) {
		if (els[i].classList.contains("left")) { 	// kuna elemendi DOM omadusest style saab hiljem otse lugeda
			els[i].style.cssFloat = "left"; 		// ainult elemendi inline style väärtusi,
		} else { 									// siis lisan tsüklis igale "bead" klassi
			els[i].style.cssFloat = "right"; 		// elemendile inline stiili floati ja selle väärtusega
		}

		changeFloat(els[i]);
	}
}

function changeFloat(el) {
	el.addEventListener("click", function () {
		if (el.style.cssFloat == "left") {
			el.style.cssFloat = "right";
		} else {
			el.style.cssFloat = "left";
		}
	});
}

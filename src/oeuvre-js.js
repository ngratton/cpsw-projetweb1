/*jslint esnext:true, browser:true*/
/**
 * @module Oeuvrepage
 */
export default class Oeuvrepage {
	/**
	 * Méthode principale. Sera typiquement appelée après le chargement de la page.
	 */
	static main() {
		
		// Ajuste la hauteur de div parent selon la longueur du texte de desctiption
		var oeuvreDescH = document.querySelector(".oeuvre-desc").clientHeight;
		var oeuvreArtDiv = document.querySelector(".oeuvre-art");
		if (oeuvreArtDiv.clientHeight < oeuvreDescH) {
			oeuvreArtDiv.style.height = oeuvreDescH + "px";
		}

		var play = document.querySelector("#piste-play");
		play.addEventListener("click", e => {
			this.demarrerAudio();
		});

	}

	static demarrerAudio() {
		var btnPlay = document.querySelector("#btn-play");
		var lecteurAudio = document.querySelector("#lecteur-audio");
		btnPlay.parentNode.removeChild(btnPlay);
		lecteurAudio.removeAttribute("hidden");
		lecteurAudio.autoplay = true;
		lecteurAudio.play();
	}

	/**
	 * Méthode qui permet d'attendre le chargement de la page avant d'éxécuter le script principal
	 * @returns {Promise} La promesse qui sera résolue après chargement
	 */
	static load() {
		return new Promise(resolve => {
			window.addEventListener("load", () => {
				resolve();
			});
		});
	}
}
/*jslint esnext:true, browser:true*/
/**
 * @module App
 */
export default class App {
	/**
	 * Méthode principale. Sera typiquement appelée après le chargement de la page.
	 */
	static main() {
		
		/* PAGE OEUVRE */
		var oeuvreDescH = document.querySelector(".oeuvre-desc").clientHeight;
		var oeuvreArtDiv = document.querySelector(".oeuvre-art");
		if (oeuvreArtDiv.clientHeight < oeuvreDescH) {
			oeuvreArtDiv.style.height = oeuvreDescH + "px";
		}
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
/*jslint esnext:true, browser:true*/
/**
 * @module App
 */
export default class App {
	/**
	 * Méthode principale. Sera typiquement appelée après le chargement de la page.
	 */
	static main() {
		/* POUR TOUTES LES PAGES */
		var url = window.location.pathname;
		var indexUrl = url.includes("index");
		
		if (url === "/" || indexUrl === true) {
			document.querySelector("#nav-logo").parentNode.removeChild(document.querySelector("#nav-logo"));
		} else {
			document.querySelector("#nav-logo").addEventListener("click", e => {
				window.location.href = './';
			});
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
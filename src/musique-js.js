/*jslint esnext:true, browser:true*/
/**
 * @module Musiquepage
 */
export default class Musiquepage {
	/**
	 * Méthode principale. Sera typiquement appelée après le chargement de la page.
	 */
	static main() {
		
        this.carteOeuvreW = document.querySelector(".carte-oeuvre").clientWidth;
            
        if (document.body.clientWidth <= 768) {
            var oeuvresCovers = document.querySelectorAll(".oeuvre-couverture");
            oeuvresCovers.forEach(cover => {
                cover.style.height = this.carteOeuvreW + "px";
            });
        };
        
        window.addEventListener("resize", e => {
            oeuvresCovers.forEach(cover => {
                cover.style.height = this.carteOeuvreW + "px";
            });
        });        

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
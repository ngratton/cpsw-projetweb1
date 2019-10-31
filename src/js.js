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
		// var homeUrl = url.begins("projetweb/");
		
		if (url === "/" || indexUrl === true || url === "/projetweb" || url === "/projetweb/") {
			document.querySelector("#nav-logo").parentNode.removeChild(document.querySelector("#nav-logo"));
		} else {
			document.querySelector("#nav-logo").addEventListener("click", e => {
				window.location.href = './';
			});
		}

		this.navHam = document.querySelector("#nav-hamburger");
			this.navHam.addEventListener("click", e => {
				this.menuNav();
			});
	}

	static menuNav() {
		document.body.style.boxShadow = "0px 5px 30px rgba(0,0,0,0.5)";
		var close = document.querySelector("#nav-hamclose");
		this.navHam.classList.add("hidden");
		document.querySelector("#nav-hamclose").classList.remove("hidden");
		document.querySelector("#nav-logo-menu").classList.remove("hidden");
		document.querySelector("#nav-liens").style.right = "-250px";
		document.body.classList.add("nav-slide-in");

		close.addEventListener("click", e => {
			this.navHam.classList.remove("hidden");
			document.body.classList.remove("nav-slide-in");
			document.body.classList.add("nav-slide-out");
			document.querySelector("#nav-hamclose").classList.add("hidden");
			document.querySelector("#nav-logo-menu").classList.add("hidden");
			document.querySelector("#nav-liens").style.right = "0";

			window.setTimeout(() => {
				document.body.classList.remove("nav-slide-out");
			}, 300);

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
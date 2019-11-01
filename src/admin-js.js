/*jslint esnext:true, browser:true*/
/**
 * @module Admin
 */
export default class Admin {
	/**
	 * Méthode principale. Sera typiquement appelée après le chargement de la page.
	 */
	static main() {
		
		this.pisteNo = 1;

		document.querySelector("#ajout-plus-piste").addEventListener("click", e => {
			e.preventDefault;
			this.pisteNo = this.ajoutPiste();
		})
	}

	static ajoutPiste() {
		this.pisteNo = this.pisteNo + 1;
		var formAjoutPiste = document.querySelector("#ajout-pistes-wrapper");
		
		var divPisteWrapper = document.createElement("div");
		divPisteWrapper.classList.add("oeuvre-piste");
		formAjoutPiste.appendChild(divPisteWrapper);
		
		var spanNo = document.createElement("span");
		spanNo.classList.add("oeuvre-pistes-no");
		spanNo.innerHTML = this.pisteNo;
		divPisteWrapper.appendChild(spanNo);

		var inputNo = document.createElement("input");
		inputNo.setAttribute("type", "hidden");
		inputNo.setAttribute("name", "piste-no[]");
		inputNo.setAttribute("id", "oeuvre-id");
		inputNo.setAttribute("value", this.pisteNo);
		divPisteWrapper.appendChild(inputNo);

		var inputTitre = document.createElement("input");
		inputTitre.classList.add("oeuvre-pistes-titre");
		inputTitre.setAttribute("type", "text");
		inputTitre.setAttribute("name", "piste-titre[]");
		inputTitre.setAttribute("id", "piste-titre");
		inputTitre.placeholder = "Titre de la pièce";
		divPisteWrapper.appendChild(inputTitre);

		var spanTemps = document.createElement("span");
		spanTemps.classList.add("oeuvre-pistes-temps");
		divPisteWrapper.appendChild(spanTemps);

		var inputTmin = document.createElement("input");
		inputTmin.setAttribute("type", "text");
		inputTmin.setAttribute("name", "piste-temps-min[]");
		inputTmin.setAttribute("id", "piste-temps-min");
		inputTmin.placeholder = "min";
		spanTemps.appendChild(inputTmin);

		var span2Points = document.createElement("span");
		span2Points.innerHTML = " : ";
		spanTemps.appendChild(span2Points);

		var inputTsec = document.createElement("input");
		inputTsec.setAttribute("type", "text");
		inputTsec.setAttribute("name", "piste-temps-sec[]");
		inputTsec.setAttribute("id", "piste-temps-sec");
		inputTsec.placeholder = "sec";
		spanTemps.appendChild(inputTsec);

		var InputFichierAudio = document.createElement("input");
		InputFichierAudio.setAttribute("type", "file");
		InputFichierAudio.setAttribute("name", "piste-audio[]");
		InputFichierAudio.setAttribute("id", "piste-audio");
		divPisteWrapper.appendChild(InputFichierAudio);

		return this.pisteNo;
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
<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact | Gabriel Forion - Compositeur</title>
    <link rel="stylesheet" href="./styles/styles.min.css">
    <link rel="stylesheet" href="./styles/contact-styles.min.css">
	<script type="module">
		import App from "./src/js.js";
		App.load().then(() => App.main());
	</script>
</head>
<body>
    <?php include("./views/header-public.php"); ?>
    <header>
        <div class="header-bg" id="contact-header">
            <div class="conteneur page-header">
                <h1>CONTACT</h1>
            </div>
        </div>
    </header>
    <main>
        <section id="contact">
            <div class="conteneur">
                <h2>RÉSEAUX SOCIAUX</h2>
                <div class="contact-rs">
                    <div class="contact-social-g">
                        <p>
                            Suivez Gabriel Forion sur les réseaux sociaux pour être au courant des plus récentes nouvelles à son sujet, pour connaître les dates de concerts et la parution de ses oeuvres.
                        </p>
                    </div>
                    <div class="contact-social-d">
                        <a href="https://www.facebook.com/groups/500377664149859/" class="liens-img"><img src="./img/contact-rs-facebook.png" alt="Facebook"></a>
                        <a href="https://www.linkedin.com/company/35428638/" class="liens-img"><img src="./img/contact-rs-linkedin.png" alt="LinkedIn"></a>
                        <a href="https://bandcamp.com/gabrielorion" class="liens-img"><img src="./img/contact-rs-bandcamp.png" alt="Bandcamp"></a>
                    </div>
                </div>
                <div class="flex-conteneur">
                    <div class="flex-2x1 carte">
                        <h3>Infolettre</h3>
                        <p>
                            Restez à l'affût des dernières nouvelles en vous abonanat à l'infolettre. Profitez entre autres de préventes exclusives sur les billets de spectacles.
                        </p>
                        <div class="flex-centre">
                            <form action="infolettre-submit.php" method="post" class="flex contact-infolettre-form">
                                <div class="contact-infolettre-input">
                                    <input type="email" name="email-newsletter" id="email-newsletter" placeholder="Entrez votre adresse courriel" required>
                                </div>
                                <div class="contact-infolettre-btn">
                                    <button class="btn btn-dore">S'abonner</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="flex-2x1 carte">
                        <h3>Agence</h3>
                        <p>
                            Gabriel Forion est représenté par l'Agence InStudios.
                        </p>
                        <div class="contact-agence">
                            <span>11 RUE ST-JACQUES EST</span>
                            <span>STE-THÉRÈSE, QC</span>
                            <span>J7E 1A3 CANADA</span>
                            <span>450 437-2566</span>
                            <a href="http://www.instudios.ca" target="_blank">instudios.ca</a>
                        </div>
                        <div class="flex-centre">
                            <button class="btn btn-dore">
                                <a href="./downloads/kit-presse_Gabriel-Forion_AJIS.zip">Télécharger le kit de presse</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="conteneur">
        <?php include("./views/footer-public.php"); ?>
    </div>
</body>
</html>
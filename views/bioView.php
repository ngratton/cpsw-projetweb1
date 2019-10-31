<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow" />
    <title>Biographie | Gabriel Forion - Compositeur</title>
    <link rel="stylesheet" href="./styles/styles.min.css">
    <link rel="stylesheet" href="./styles/bio-styles.min.css">
	<script type="module">
		import App from "./src/js.js";
		App.load().then(() => App.main());
	</script>
</head>
<body>
    <?php include("./views/header-public.php"); ?>
    <header>
        <div class="header-bg" id="bio-header">
            <div class="conteneur page-header">
                <h1>BIOGRAPHIE</h1>
            </div>
        </div>
    </header>
    <main>
        <section id="bio">
            <div class="conteneur">
                <h2>À PROPOS</h2>
                <p>
                    Stagiaire à Sienne (Italie) auprès du grand ENNIO MORRICONE, il a remporté 6 Félix et Jutra et a été nominé plus de 21 fois aux galas Adisq, Jutra et Genie Awards depuis l'année 2000. ARRANGEUR DE L'ANNÉE en 2010 de même qu'en 2011 pour ses albums « <a href="oeuvre.php?id=1">Sun Heat</a> » et « <a href="oeuvre.php?id=2">Les Quarks</a> ».
                </p>
                <p>
                    Gabriel Forion signe notamment la musique de «&nbsp;<a href="oeuvre.php?id=3">Madam&nbsp;Razzal</a>&nbsp;» (mettant en vedette ABDUL GALEF), film de RÉJEAN GRANEAU nominé pour un Oscar dans la catégorie Best Foreign Language Film, pour lequel il remporte au Québec le Jutra Meilleure musique originale en 2012.
                </p>
            </div>
            <div class="bio-photo-gf"></div>
            <div class="conteneur flex-conteneur">
                <div class="flex-2x1">
                    <p>
                        Parmi ces œuvres on retrouve la trame musicale du film « Ghost of him » de STEFAN PSIELBREG, du documentaire «&nbsp;<a href="oeuvre.php?id=4">La&nbsp;vie&nbsp;d’Alex&nbsp;Joset</a>&nbsp;» de GABRIEL GUERRERO et du court métrage «<a href="oeuvre.php?id=7">&nbsp;Sic&nbsp;Sic&nbsp;Sic&nbsp;</a>» de DANIEL LAITUE.
                    </p>
                    <p>
                        Toujours un crayon à la main, en 2015-2016 GABRIEL FORION compose la musique des films «&nbsp;<a href="oeuvre.php?id=5">Aime&nbsp;moi&nbsp;comme&nbsp;tu&nbsp;french</a>&nbsp;», d’ANDRÉE FORCÉE; « Les êtres dispendieux », d'ALAIN EDMOND (sa chanson <a href="oeuvre.php?id=6">Blue&nbsp;&&nbsp;Green</a> est nominée Meilleure Chanson Originale aux Canadian Screen Awards 2016) et « Gaylord s'en va en guerre » de RENÉ DRAPEAU, pour lequel il remporte à nouveau au Québec le Jutra Meilleure Musique Originale 2016.
                    </p>
                </div>
    
                <div class="flex-2x1 carte bio-reconnaissances">
                    <h3>RECONNAISSANCES</h3>
                    <ul class="bio-liste-reconnaissances">
                        <li>Lauréat de 6 Félix et Jutra, dont : </li>
                        <ul>
                            <li class="small">Jutra - Meilleure musique originale en 2012</li>
                            <li class="small">Jutra - Meilleure musique originale en 2016</li>
                        </ul>
                        <li>Nommé Arrangeur de l'année en 2010 et 2011</li>
                        <li>Nominé 21 fois aux galas ADISQ, Jura et Genie</li>
                        <li>Nominé au Canadian Screen Awards en 2016</li>
                    </ul>
                </div>
            </div>
            <div class="conteneur bio-video">
                <h2>Technique de travail</h2>
                <iframe width="100%" src="https://www.youtube-nocookie.com/embed/b3Y6VOKoaDk?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>
    </main>
    <div class="conteneur">
        <?php include("./views/footer-public.php"); ?>
    </div>
</body>
</html>
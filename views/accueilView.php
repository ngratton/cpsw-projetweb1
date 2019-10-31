<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow" />
    <title>Gabriel Forion - Compositeur</title>
    <link rel="stylesheet" href="./styles/styles.min.css">
    <link rel="stylesheet" href="./styles/accueil-styles.min.css">
	<script type="module">
		import App from "./src/js.js";
		App.load().then(() => App.main());
	</script>
</head>
<body>
    <?php include("./views/header-public.php"); ?>
    <header>
        <div class="accueil-head-nom">
            <img src="./img/accueil-logo.png" id="accueil-logo" alt="Gabriel Forion">
            <span id="accueil-header-nom">GABRIEL<br>&nbsp;&nbsp;&nbsp;FORION</span>
            <span class="accueil-header-compositeur">Compositeur</span>
        </div>
        <div class="accueil-head-photo">
            <div class="accueil-head-photo-gf"></div>
        </div>
    </header>

    <main>
        <section id="accueil-bio" class="conteneur">
            <div class="accueil-bio-photo"></div>
            <div class="accueil-bio-txt carte">
                <img src="./img/accueil-bio-gamme.png">
                <p>
                    Compositeur, mélodiste et arrangeur de musique inspiré, GABRIEL FORION partage sa vie entre la chanson et la musique de film depuis plusieurs années.
                </p>
                <a class="accueil-bio-lien" href="biographie.html">Lire plus ></a>
            </div>
        </section>
        <section id="accueil-avenir" class="conteneur">
            <h2>À VENIR</h2>
            <div class="flex">
                <?php foreach($eventsAvenir AS $eventAvenir) { ?>
                    <div class="flex-2x1 flex-conteneur accueil-carte-oeuvre">
                        <div class="accueil-avenir-couverture">
                            <a href="#">
                                <div class="couverture-280" style="background-image: url('<?php echo $eventAvenir['img']; ?>')"></div>
                            </a>
                        </div>
                        <div class="accueil-avenir-details">
                            <span class="accueil-oeuvre-type"><?php echo $eventAvenir['type']; ?></span>
                            <div>
                                <span class="accueil-oeuvre-date"><?php echo $eventAvenir['date']; ?></span>
                                <span class="accueil-oeuvre-titre"><?php echo $eventAvenir['titre']; ?></span>
                                <span class="accueil-oeuvre-etiquette"><?php echo $eventAvenir['etiquette']; ?></span>
                            </div>
                            <?php if ($eventAvenir['evenement'] == 'spectacle') { ?>
                                <a class="accueil-oeuvre-cta" href="<?php echo $eventAvenir['link']; ?>">Billets ></a>
                            <?php } else if($eventAvenir['evenement'] == 'oeuvre') { ?>
                                <a class="accueil-oeuvre-cta" href="oeuvre.php?id=<?php echo $eventAvenir['link']; ?>">Précommander ></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                
            </div>
        </section>
        <section id="accueil-infolettre" class="carte">
            <div class="conteneur">
                <h3>Infolettre</h3>
                <p class="flex-centre">
                    Restez à l'affût des dernières nouvelles en vous abonnant à l'infolettre. Profitez entre autres de préventes exclusives sur les billets de spectacles.
                </p>
                <div class="flex-centre">
                    <form action="infolettre-submit.php" method="post" class="flex accueil-infolettre-form">
                        <div class="accueil-infolettre-input">
                            <input type="email" name="email-newsletter" id="email-newsletter" placeholder="Entrez votre adresse courriel" required>
                        </div>
                        <div class="accueil-infolettre-btn">
                            <button class="btn btn-dore"><a href="#">S'abonner</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section id="accueil-dernieres-parutions" class="conteneur">
            
        <h2>DERNIÈRES PARUTIONS</h2>
                <div class="flex">

                    <?php foreach($dernieresParutions as $derniereParution) { ?>
                        <div class="flex-2x1 flex-conteneur accueil-carte-oeuvre">
                            <div class="accueil-dernieres-couverture">
                                <a href="oeuvre.php?id=<?php echo $derniereParution['oeuvreid']; ?>">
                                    <div class="couverture-280" style="background-image: url('<?php echo $derniereParution['album_img_path']; ?>')"></div>
                                </a>
                            </div>
                            <div class="accueil-dernieres-details">
                                <div>
                                    <span class="accueil-oeuvre-type"><?php echo $derniereParution['type_nom']; ?></span>
                                    <span class="accueil-oeuvre-date"><?php echo date("d/m/Y", strtotime($derniereParution['album_dates'])); ?></span>
                                    <span class="accueil-oeuvre-titre"><?php echo $derniereParution['album_titres']; ?></span>
                                </div>
                                <a class="accueil-oeuvre-cta" href="oeuvre.php?id=<?php echo $derniereParution['oeuvreid']; ?>">Voir l'album ></a>
                            </div>
                        </div>
                    <?php } ?>
                    
                </div>
            <p class="flex-centre accueil-derniere-disco">
                <a href="musique.php">Consultez la discographie complète ></a>
            </p>
        </section>
    </main>
    
    <div class="conteneur">
        <?php include("./views/footer-public.php"); ?>
    </div>
</body>
</html>
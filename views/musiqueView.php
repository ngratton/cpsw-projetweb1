<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow" />
    <title>Musique | Gabriel Forion - Compositeur</title>
    <link rel="stylesheet" href="./styles/styles.min.css">
    <link rel="stylesheet" href="./styles/musique-styles.min.css">
	<script type="module">
		import App from "./src/js.js";
		App.load().then(() => App.main());
	</script>
	<script type="module">
		import Musiquepage from "./src/musique-js.js";
		Musiquepage.load().then(() => Musiquepage.main());
	</script>
</head>
<body>
    <?php include("./views/header-public.php"); ?>
    <header>
        <div class="header-bg" id="musique-header">
            <div class="conteneur page-header">
                <h1>MUSIQUE</h1>
            </div>
        </div>
    </header>

    <main>
        <div class="conteneur">
            <div class="musique-btn-styles">
                <?php if ($avenir) { ?>
                    <a href="#avenir">
                        <button class="btn btn-turquoise musique-btn-filtres">
                        À venir
                        </button>
                    </a>
                <?php } ?>
                <a href="#bandeoriginale">
                    <button class="btn btn-turquoise musique-btn-filtres">
                        Bandes originales
                    </button>
                </a>
                <a href="#album">
                    <button class="btn btn-turquoise musique-btn-filtres">
                        Albums
                    </button>
                </a>
                <a href="#simple">
                    <button class="btn btn-turquoise musique-btn-filtres">
                        Simples
                    </button>
                </a>
            </div>
            <?php if ($avenir) { ?>
            <section id="avenir">
                <h2>À VENIR</h2>
                <!-- Titre de l'oeuvre -->
                <div class="carte-large flex">
                    <div class="avenir-couverture">
                        <a href="#">
                            <div class="couverture-280" style="background-image: url('<?php echo $avenir['album_img_path']; ?>')"></div>
                        </a>
                    </div>
                    <div class="oeuvre-details">
                        <div>
                            <span class="oeuvre-type"><?php echo $avenir['type_nom']; ?></span>
                            <span class="oeuvre-date"><?php echo date("d/m/Y", strtotime($avenir['album_dates'])); ?></span>
                        </div>
                        <div>
                            <span class="oeuvre-titre"><?php echo $avenir['album_titres']; ?></span>
                            <span class="oeuvre-etiquette"><?php echo $avenir['etiquette']; ?></span>
                        </div>
                        <div>
                            <a class="oeuvre-cta" href="oeuvre.php?id=<?php echo $avenir['oeuvreid']; ?>">Détails ></a>
                        </div>
                    </div>
                </div>

            </section>
            <?php } ?>

            <?php foreach($types AS $type) {?>
            <section id="<?php echo $type['cssid']; ?>">
                <h2><?php echo $type['type_nom_plur']; ?></h2>
                <div class="musique-affichage-oeuvre">
                    
                <?php foreach($oeuvres AS $oeuvre) {
                    if ($oeuvre["fk_types_id"] == $type["id"]) { ?>
                        <div class="carte-oeuvre">
                            <div class="oeuvre-couverture">
                                <a href="oeuvre.php?id=<?php echo $oeuvre['oeuvreid']; ?>">
                                    <div class="couverture-380" style="background-image: url('<?php echo $oeuvre['album_img_path']; ?>')"></div>
                                </a>
                            </div>
                            <div class="oeuvre-details">
                                <div>
                                    <span class="oeuvre-titre"><?php echo $oeuvre['album_titres']; ?></span>
                                    <span class="oeuvre-etiquette"><?php echo $oeuvre['etiquette']; ?></span>
                                </div>
                                <a class="oeuvre-cta" href="oeuvre.php?id=<?php echo $oeuvre['oeuvreid']; ?>">Voir l'album ></a>
                            </div>
                        </div>
                    <?php }
                } ?>

                </div>
            </section>
            <?php } ?>
        </div>
    </main>

    <div class="conteneur">
        <?php include("./views/footer-public.php"); ?>
    </div>
</body>
</html>
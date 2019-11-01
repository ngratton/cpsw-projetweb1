<?php

session_start();

if ($_SESSION["estConnecte"] != true) {
    echo "<span class='txt_rouge'>Accès refusé.</span>";
    // sleep(2);
    header("location:connexion.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier les pistes | Administration | Gabriel Forion - compositeur</title>
    <link rel="stylesheet" href="../styles/admin-styles.min.css">
</head>
<body>
    <div class="conteneur">
        <?php include("./views/admin-header.php"); ?>
        <main>
            <div class="container flex-centre">
                <form action="./modifier-pistes-submit.php" method="post" name="modifier-pistes">
                <div class="admin-ajoutoeuvre-titre-btn">
                    <h2>Modifier les pistes de <?php echo $oeuvre['album_titres']; ?></h2>
                    <button class="btn btn-publish" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 10V8h2v2h2v2h-2v2H9v-2H7v-2h2zm-5 8h12V6h-4V2H4v16zm-2 1V0h12l4 4v16H2v-1z"/></svg>
                        <span class="bold">ENREGISTRER LES MODIFICATIONS</span>
                    </button>
                    <input type="text" name="userIdInt" id="userIdInt" value="<?php echo $_SESSION["userId"]; ?>" hidden disabled>
                </div>
                    <div class="carte" id="admin-ajoutoeuvre">
                        <div class="flex">
                            <div class="flex-l-1tiers">
                                <div class="admin-ajoutoeuvre-tableau">
                                    <div class="admin-ajoutoeuvre-table-header">
                                        <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 0h20v20H0V0zm10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-5a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>
                                            <h3>Détails de l'album</h3>
                                        </div>
                                    </div>
                                    <div class="admin-ajoutoeuvre-resume">
                                        <span><?php echo $oeuvre['album_titres']; ?></span>
                                        <img src=".<?php echo $oeuvre['album_img_path']; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="flex-r-2tiers">
                                <div class="admin-ajoutoeuvre-tableau">
                                    <div class="admin-ajoutoeuvre-table-header">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16 17a3 3 0 0 1-3 3h-2a3 3 0 0 1 0-6h2a3 3 0 0 1 1 .17V1l6-1v4l-4 .67V17zM0 3h12v2H0V3zm0 4h12v2H0V7zm0 4h12v2H0v-2zm0 4h6v2H0v-2z"/></svg>
                                            <h3>Pistes</h3>
                                        </div>
                                    </div>
                                    <div class="admin-ajoutoeuvre-table-form">
                                        <div class="oeuvre-piste">
                                            <span class="oeuvre-pistes-no"><?php echo $pistes['piste_no']; ?></span>
                                            <input type="text" name="piste-id" id="piste-id" value="<?php echo $pistes['id']; ?>" hidden>
                                            <input class="oeuvre-pistes-titre" type="text" name="piste-titre--1" id="piste-titre--1" value="<?php echo $pistes['piste_titre']; ?>" >
                                            <span class="oeuvre-pistes-temps">
                                                <input class="oeuvre-pistes-temps-modifier" type="text" name="piste-temps-temps--1" id="piste-temps-min--1" placeholder="min" value="<?php echo $pistes['piste_temps']; ?>">
                                            </span>
                                            <audio id="lecteur-audio" controls>
                                                <source src="<?php echo $pistes['piste_audio_path']; ?>" type="audio/mpeg">
                                            </audio>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
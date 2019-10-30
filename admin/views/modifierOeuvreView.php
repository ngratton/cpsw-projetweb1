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
    <title>Ajouter une oeuvre | Administration | Gabriel Forion - compositeur</title>
    <link rel="stylesheet" href="../styles/admin-styles.min.css">
</head>
<body>
    <div class="conteneur">
        <?php include("./views/admin-header.php"); ?>
        <main>
            <div class="container flex-centre">
                <form action="./ajout-oeuvre-submit.php" method="post" name="ajout-oeuvre" enctype="multipart/form-data">
                <div class="admin-ajoutoeuvre-titre-btn">
                    <h2>Modifier une oeuvre</h2>
                    <button class="btn btn-publish" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 10V8h2v2h2v2h-2v2H9v-2H7v-2h2zm-5 8h12V6h-4V2H4v16zm-2 1V0h12l4 4v16H2v-1z"/></svg>
                        <span class="bold">ENREGISTRER LES MODIFICATIONS</span>
                    </button>
                    <input type="text" name="userIdInt" id="userIdInt" value="<?php echo $_SESSION["userId"]; ?>" hidden disabled>
                </div>
                    <div class="carte" id="admin-ajoutoeuvre">
                        <div class="admin-ajoutoeuvre-tableau">
                            <div class="admin-ajoutoeuvre-table">
                                <div class="admin-ajoutoeuvre-table-header">
                                    <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M20 9v9a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8c0-1.1.9-2 2-2h13.8L.74 1.97 1.26.03 20 5.06V9zm-5 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM2 8v2h16V8H2zm1.5 10a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm5 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm6.5-1a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>
                                        <h3>Détails de l'oeuvre</h3>
                                    </div>
                                </div>
                                <div class="admin-ajoutoeuvre-table-form">
                                    <div class="flex">
                                        <div class="flex-2x1 admin-ajoutoeuvre-details">
                                            <label for="oeuvre-titre">
                                                <span>Titre</span>
                                                <input type="text" name="oeuvre-titre" id="oeuvre-titre" value="<?php echo $oeuvre['album_titres']; ?>" required>
                                            </label>
                                            <label for="oeuvre-date">
                                                <span>Date de sortie</span>
                                                <input type="date" name="oeuvre-date" id="oeuvre-date" value="<?php echo $oeuvre['album_dates']; ?>" required>
                                            </label>
                                            <label for="oeuvre-etiquette">
                                                <span>Maison de disque</span>
                                                <input type="text" name="oeuvre-etiquette" id="oeuvre-etiquette" value="<?php echo $oeuvre['etiquette']; ?>" required>
                                            </label>
                                        </div>
                                        <div class="flex-2x1 admin-ajoutoeuvre-details">
                                            <label for="oeuvre-type">
                                                <span>Type d'oeuvre</span>
                                                <select type="text" name="oeuvre-type" id="oeuvre-type" required>
                                                    <option value="" selected disabled>Choisir</option>
                                                    <option value="1" <?php if ($oeuvre["fk_types_id"] == 1) { echo "selected"; } ?>>Bande originale</option>
                                                    <option value="2" <?php if ($oeuvre["fk_types_id"] == 2) { echo "selected"; } ?>>Album</option>
                                                    <option value="3" <?php if ($oeuvre["fk_types_id"] == 3) { echo "selected"; } ?>>Simple</option>
                                                </select>
                                            </label>
                                            <label>
                                                <span>Couverture acutelle</span>
                                                <img src=" value="<?php echo $oeuvre['album_img_path']; ?>" width="150">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="admin-ajout-oeuvre-desc">
                                        <label for="oeuvre-desc">
                                            <span>Description de l'oeuvre</span>
                                            <textarea name="oeuvre-desc" id="oeuvre-desc" cols="100" rows="10"><?php echo $oeuvre['album_desc']; ?></textarea>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-2x1">
                                <div class="admin-ajoutoeuvre-tableau">
                                    <div class="admin-ajoutoeuvre-table-header">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16 17a3 3 0 0 1-3 3h-2a3 3 0 0 1 0-6h2a3 3 0 0 1 1 .17V1l6-1v4l-4 .67V17zM0 3h12v2H0V3zm0 4h12v2H0V7zm0 4h12v2H0v-2zm0 4h6v2H0v-2z"/></svg>
                                            <h3>Pistes</h3>
                                        </div>
                                    <a href="modifier-pistes.php?id=<?php echo $oeuvre['id']; ?>">
                                        <button class="btn btn-add" disabled>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M11 9V5H9v4H5v2h4v4h2v-4h4V9h-4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20z"/></svg>
                                            Modifier les pistes
                                        </button>
                                    </a>
                                    </div>
                                    <div class="admin-ajoutoeuvre-table-form">
                                        <div class="oeuvre-piste">
                                            <span class="oeuvre-pistes-no"><?php echo $pistes['piste_no']; ?></span>
                                            <span class="oeuvre-pistes-titre"><?php echo $pistes['piste_titre']; ?></span>
                                            <span class="oeuvre-pistes-temps"><?php echo $pistes['piste_temps']; ?></span>
                                            <audio id="lecteur-audio" controls>
                                                <source src="./media/audio/MadamRazzal.mp3" type="audio/mpeg">
                                            </audio>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="flex-2x1">
                                <div class="admin-ajoutoeuvre-tableau">
                                    <div class="admin-ajoutoeuvre-table-header">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z"/></svg>
                                            <h3>Liens pour services musicaux</h3>
                                        </div>
                                    </div>
                                    <div class="admin-ajoutoeuvre-services">
                                        <p class="notes">Copiez les liens vers l'album sur les différentes plateformes (si disponibles)</p>
                                        <label for="link-bandcamp">
                                            <span>Bandcamp</span>
                                            <input type="text" name="link-bandcamp" id="link-bandcamp" value="<?php if (!$oeuvre["bandcamp_link"] == "") { echo $oeuvre["bandcamp_link"]; } ?>">
                                        </label>
                                        <label for="link-itunes">
                                            <span>iTunes</span>
                                            <input type="text" name="link-itunes" id="link-itunes" value="<?php if (!$oeuvre["itunes_link"] == "") { echo $oeuvre["itunes_link"]; } ?>">
                                        </label>
                                        <label for="link-amazon">
                                            <span>Amazon</span>
                                            <input type="text" name="link-amazon" id="link-amazon" value="<?php if (!$oeuvre["amazon_link"] == "") { echo $oeuvre["amazon_link"]; } ?>">
                                        </label>
                                        <p class="small">(Au moins l'un des services est requis)
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
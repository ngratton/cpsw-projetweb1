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
                <form action="./modifier-spectacle-submit.php" method="post" name="ajout-spectacle" enctype="multipart/form-data">
                <div class="admin-ajoutoeuvre-titre-btn">
                    <h2>Ajouter un spectacle</h2>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15.75 8l-3.74-3.75a3.99 3.99 0 0 1 6.82-3.08A4 4 0 0 1 15.75 8zm-13.9 7.3l9.2-9.19 2.83 2.83-9.2 9.2-2.82-2.84zm-1.4 2.83l2.11-2.12 1.42 1.42-2.12 2.12-1.42-1.42zM10 15l2-2v7h-2v-5z"/></svg>
                                        <h3>Détails du spectacle</h3>
                                    </div>
                                </div>
                                <div class="admin-ajoutoeuvre-table-form">
                                    <span class="notes">Tous les champs sont requis.</span>
                                    <div class="flex">
                                        <div class="flex-2x1 admin-ajoutoeuvre-details">
                                            <label for="spectacle-titre">
                                                <span>Titre</span>
                                                <input type="text" name="spectacle-id" id="spectacle-id" value="<?php echo $spectacle['id']; ?>" required hidden>
                                                <input type="text" name="spectacle-titre" id="spectacle-titre" value="<?php echo $spectacle['show_titre']; ?>" required>
                                            </label>
                                            <label for="spectacle-date">
                                                <span>Date et heure</span>
                                                <input type="date" name="spectacle-date" id="spectacle-date" value="<?php echo $spectacle['show_date']; ?>" required>
                                                <input type="time" name="spectacle-heure" id="spectacle-heure" value="<?php echo $spectacle['show_heure']; ?>" required>
                                            </label>
                                            <label for="spectacle-img">
                                                <span>Image actuelle</span>
                                                <img src=".<?php echo $spectacle['show_photo_path']; ?>" height="150">
                                            </label>
                                        </div>
                                        <div class="flex-2x1 admin-ajoutoeuvre-details">
                                            <label for="spectacle-salle">
                                                <span>Salle</span>
                                                <input type="text" name="spectacle-salle" id="spectacle-salle" value="<?php echo $spectacle['show_salle']; ?>" required>
                                            </label>
                                            <label for="spectacle-ville">
                                                <span>Ville</span>
                                                <input type="text" name="spectacle-ville" id="spectacle-ville" value="<?php echo $spectacle['show_ville']; ?>" required>
                                            </label>
                                            </label>
                                            <label for="spectacle-billets">
                                                <span>Lien pour les billets</span>
                                                <input type="text" name="spectacle-billets" id="spectacle-billets" value="<?php echo $spectacle['show_lien_billets']; ?>" required>
                                            </label>
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
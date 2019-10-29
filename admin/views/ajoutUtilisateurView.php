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
                <form action="./ajout-utilisateur-submit.php" method="post" name="ajout-user" enctype="multipart/form-data">
                <div class="admin-users-titre-btn">
                    <h2>Ajouter un utilisateurs</h2>
                    <button class="btn btn-publish" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 10V8h2v2h2v2h-2v2H9v-2H7v-2h2zm-5 8h12V6h-4V2H4v16zm-2 1V0h12l4 4v16H2v-1z"/></svg>
                        <span class="bold">AJOUTER</span>
                    </button>
                </div>
                    <div class="carte" id="admin-utilisateurs">
                        <div class="admin-users-tableau">
                            <div class="admin-users-table">
                                <div class="admin-users-table-header">
                                    <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg>
                                        <h3>Détails de l'utilisateur</h3>
                                    </div>
                                </div>
                                <div class="admin-users-table-form">
                                    <div class="flex">
                                        <div class="flex-2x1 admin-users-details">
                                            <label for="user-username">
                                                <span>Nom d'utlisateur</span>
                                                <input type="text" name="user-username" id="user-username" required>
                                            </label>
                                            <label for="user-password">
                                                <span>Mot de passe</span>
                                                <input type="text" name="user-password" id="user-password" required>
                                            </label>
                                            <label for="user-photo">
                                                <span>Photo de profil</span>
                                                <input type="file" name="user-photo" id="user-photo" required>
                                            </label>
                                        </div>
                                        <div class="flex-2x1 admin-users-details">
                                            <label for="user-prenom">
                                                <span>Prénom</span>
                                                <input type="text" name="user-prenom" id="user-prenom" required>
                                            </label>
                                            <label for="user-nom">
                                                <span>Nom de famille</span>
                                                <input type="text" name="user-nom" id="user-nom" required>
                                            </label>
                                            <label for="user-email">
                                                <span>Courriel</span>
                                                <input type="email" name="user-email" id="user-email" required>
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
<?php

session_start();

if ($_SESSION["estConnecte"] != true) {
    echo "<span class='txt_rouge'>Accès refusé.</span>";
    // sleep(2);
    header("location:connexion.php");
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administration | Gabriel Forion - compositeur</title>
    <link rel="stylesheet" href="../styles/admin-styles.min.css">
</head>
<body>
    <div class="conteneur">
        <nav>
            <div class="logo-title">
                <img src="../img/footer-logo.png">
                <h1>Administration</h1>
            </div>
            <div class="user-profil">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 2C0 .9.9 0 2 0h16a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm7 4v2a3 3 0 1 0 6 0V6a3 3 0 1 0-6 0zm11 9.14A15.93 15.93 0 0 0 10 13c-2.91 0-5.65.78-8 2.14V18h16v-2.86z"/></svg>
                <div class="user-name-logout">
                    <span>[nom utlisateur]</span>
                    <a href="#">Se déconnecter</a>
                </div>
            </div>
        </nav>
        <main>
            <div class="container flex-centre">
                <div class="carte" id="admin-accueil">
                    <h2>Bonjour, [User] !</h2>
                    <div class="flex">
                        <div class="flex-l-3quart">
                            <div class="admin-accueil-tableau accueil-gestion-oeuvres">
                                <div class="admin-accueil-table-header">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 0h20v20H0V0zm10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-5a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>
                                        <h3>Gestion des oeuvres</h3>
                                    </div>
                                    <button class="btn btn-add"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M11 9V5H9v4H5v2h4v4h2v-4h4V9h-4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20z"/></svg> Ajouter</button>
                                </div>
                                <div class="admin-accueil-table-items">

                                    <!-- DYNAMISER DÉBUT  -->
                                    <div class="admin-accueil-table-item">
                                        <img src="../img/musique/LesQuarks.jpg" alt="">
                                        <div class="item-details">
                                            <div class="item-details-infos">
                                                <span class="item-type">Type d'oeuvre</span>
                                                <span class="item-titre">Nom de l'album</span>
                                                <span class="item-date">28 octobre 2019</span>
                                            </div>
                                            <div class="item-details-options">
                                                <div>
                                                    <a href="#" id="svg-voir-page">
                                                        <span>Voir la page en ligne</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM7.88 7.88l-3.54 7.78 7.78-3.54 3.54-7.78-7.78 3.54zM10 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" id="svg-modifier">
                                                        <span>Modifier</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.3 3.7l4 4L4 20H0v-4L12.3 3.7zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z"/></svg>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" id="svg-supprimer">
                                                        <span>Supprimer</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M6 2l2-2h4l2 2h4v2H2V2h4zM3 6h14l-1 14H4L3 6zm5 2v10h1V8H8zm3 0v10h1V8h-1z"/></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- DYNAMISER FIN  -->

                                </div>
                            </div>
                            <div class="admin-accueil-tableau accueil-gestion-spectacles">
                                <div class="admin-accueil-table-header">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15.75 8l-3.74-3.75a3.99 3.99 0 0 1 6.82-3.08A4 4 0 0 1 15.75 8zm-13.9 7.3l9.2-9.19 2.83 2.83-9.2 9.2-2.82-2.84zm-1.4 2.83l2.11-2.12 1.42 1.42-2.12 2.12-1.42-1.42zM10 15l2-2v7h-2v-5z"/></svg>
                                        <h3>Gestion des spectacles</h3>
                                    </div>
                                    <button class="btn btn-add"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M11 9V5H9v4H5v2h4v4h2v-4h4V9h-4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20z"/></svg> Ajouter</button>
                                </div>
                                <div class="admin-accueil-table-items">

                                        <!-- DYNAMISER DÉBUT  -->
                                        <div class="admin-accueil-table-item">
                                            <img src="../img/musique/LesQuarks.jpg" alt="">
                                            <div class="item-details">
                                                <div class="item-details-infos">
                                                    <span class="item-type">Type d'oeuvre</span>
                                                    <span class="item-titre">Nom de l'album</span>
                                                    <span class="item-date">28 octobre 2019</span>
                                                </div>
                                                <div class="item-details-options">
                                                    <div class="svg-voir-page">
                                                        <a href="#">
                                                            <span>Voir la page en ligne</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM7.88 7.88l-3.54 7.78 7.78-3.54 3.54-7.78-7.78 3.54zM10 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg>
                                                        </a>
                                                    </div>
                                                    <div id="svg-modifier">
                                                        <a href="#">
                                                            <span>Modifier</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.3 3.7l4 4L4 20H0v-4L12.3 3.7zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z"/></svg>
                                                        </a>
                                                    </div>
                                                    <div id="svg-supprimer">
                                                        <a href="#">
                                                            <span>Supprimer</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M6 2l2-2h4l2 2h4v2H2V2h4zM3 6h14l-1 14H4L3 6zm5 2v10h1V8H8zm3 0v10h1V8h-1z"/></svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- DYNAMISER FIN  -->
    
                                </div>
                            </div>
                        </div>
                        <div class="flex-r-1quart">
                            <div class="admin-accueil-tableau accueil-gestion-users">
                                <div class="admin-accueil-table-header">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg>
                                        <h3>Gestion des utilisateurs</h3>
                                    </div>
                                </div>
                                <div class="admin-accueil-users">
                                    <div>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M7 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1c2.15 0 4.2.4 6.1 1.09L12 16h-1.25L10 20H4l-.75-4H2L.9 10.09A17.93 17.93 0 0 1 7 9zm8.31.17c1.32.18 2.59.48 3.8.92L18 16h-1.25L16 20h-3.96l.37-2h1.25l1.65-8.83zM13 0a4 4 0 1 1-1.33 7.76 5.96 5.96 0 0 0 0-7.52C12.1.1 12.53 0 13 0z"/></svg>
                                            <span>Liste des utilisateurs</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2 6H0v2h2v2h2V8h2V6H4V4H2v2zm7 0a3 3 0 0 1 6 0v2a3 3 0 0 1-6 0V6zm11 9.14A15.93 15.93 0 0 0 12 13c-2.91 0-5.65.78-8 2.14V18h16v-2.86z"/></svg>
                                            <span>Ajouter un utlisateur</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
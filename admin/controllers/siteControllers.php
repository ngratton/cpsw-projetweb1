<?php

include("./models/users.php");
include("./models/oeuvres.php");
include("./models/spectacles.php");


// Afficher l'accueil
function afficherAdminAccueilCtlr() {
    $oeuvres = getOeuvresAdminModel();
    $spectacles = getSpectaclesAdminModel();
    include("./views/indexView.php");
}


//###################
//###################
//#     OEUVRES     #
//###################
//###################

// Ajout oeuvres
function afficherAjoutOeuvreCtlr() {
    include("./views/ajoutOeuvreView.php");
}

function ajoutOeuvreSubmitCtlr() {
    // Oeuvre
    $oeuvreTitre = $_POST["oeuvre-titre"];
    $oeuvreDate = $_POST["oeuvre-date"];
    $oeuvreEtiquette = $_POST["oeuvre-etiquette"];
    $oeuvreTypeInt = intval($_POST["oeuvre-type"]);
    $oeuvreDesc = $_POST["oeuvre-desc"];
    // $oeuvreDesc = nl2br(htmlentities($oeuvreDescTxt, ENT_QUOTES, 'UTF-8'));
    $lienBandcamp = $_POST["link-bandcamp"];
    $lienItunes = $_POST["link-itunes"];
    $lienAmazon = $_POST["link-amazon"];
    // Oeuvre -- Fichier
    $oeuvreCoverFile = $_FILES["oeuvre-cover"]["tmp_name"];
    $destinationCover = "../img/musique/" .  basename($_FILES["oeuvre-cover"]["name"]);
    move_uploaded_file($oeuvreCoverFile, $destinationCover);


    // Appels des Functions avec paramètres
    ajoutOeuvreModel($oeuvreTitre, $oeuvreDate, $oeuvreEtiquette, $oeuvreTypeInt, $destinationCover, $oeuvreDesc, $lienBandcamp, $lienItunes, $lienAmazon);
    
    header("location:./ajout-pistes.php");
    exit();
}

function ajoutPistesCtlr() {
    
    $idStr = getOeuvresId();
    $id = intval($idStr['id']);

    $oeuvre = getOeuvreModel($id);
    include("./views/ajoutPistesView.php");
}

function ajoutPistesSubmitCtlr() {
    $oeuvreId = intval($_POST["oeuvre-id"]);
    //Pistes
    $pisteNoInt_1 = intval($_POST["piste-no--1"]);
    $pisteTitre_1 = $_POST["piste-titre--1"];
    $pisteTemps_1 = $_POST["piste-temps-min--1"] . ":" . $_POST["piste-temps-sec--1"];

    // Pistes Fichiers
    $audioPisteFile_1 = $_FILES["piste-audio--1"]["tmp_name"];
    $audioPistePath_1 = "../media/audio/" .  basename($_FILES["piste-audio--1"]["name"]);
    move_uploaded_file($pisteAudioFile_1, $destinationPiste_1);

    ajoutPistesModel($oeuvreId, $pisteNoInt_1, $pisteTitre_1, $pisteTemps_1, $audioPistePath_1);
    header("location:./index.php");
    exit();
}


// Modifier les pistes
function modifierPistesCtlr() {
    $id = $_GET["id"];
    $oeuvre = getOeuvreModifierModel($id);
    $pistes = getPistesModifierModel($id);
    include("./views/modifierPistesView.php");
}

// Modifier une oeuvre
function modifierOeuvreCtlr() {
    $id = $_GET["id"];
    $oeuvre = getOeuvreModifierModel($id);
    $pistes = getPistesModifierModel($id);
    include("./views/modifierOeuvreView.php");
}

function supprimerOeuvreCtlr() {
    $id = $_GET["id"];
    supprimerOeuvreModel($id);
    header("location:./index.php");
}


//##################
//##################
//#   SPECTACLES   #
//##################
//##################


// Ajout d'un spectacle
function ajoutSpectableCtlr() {
    include("./views/ajoutSpectableView.php");
}

function ajoutSpectacleSubmitCtlr() {
    $showTitre = $_POST["spectacle-titre"];
    $showDate = $_POST["spectacle-date"];
    $showHeure = $_POST["spectacle-heure"];
    $showSalle = $_POST["spectacle-salle"];
    $showVille = $_POST["spectacle-ville"];
    $showBillets = $_POST["spectacle-billets"];

    $showPosterFile = $_FILES["spectacle-img"]["tmp_name"];
    $showPosterPath = "../img/shows/" .  basename($_FILES["spectacle-img"]["name"]);
    move_uploaded_file($showPosterFile, $showPosterPath);

    ajoutSpectacleModel($showTitre, $showDate, $showHeure, $showSalle, $showVille, $showBillets, $showPosterPath);
    header("location:./index.php");
    exit();
}

function supprimerSpectacleCtlr() {
    $id = $_GET["id"];
    supprimerSpectacleModel($id);
    header("location:./index.php");
}

function afficherModifierSpectacleCtlr() {
    $id = $_GET["id"];
    $spectacle = getSpectacleModel($id);
    include("./views/modifierSpectacleView.php");
}

function modifierSpectacleSubmitCtlr() {
    $showId = intval($_POST["spectacle-id"]);
    $showTitre = $_POST["spectacle-titre"];
    $showDate = $_POST["spectacle-date"];
    $showHeure = $_POST["spectacle-heure"];
    $showSalle = $_POST["spectacle-salle"];
    $showVille = $_POST["spectacle-ville"];
    $showBillets = $_POST["spectacle-billets"];
    
    $showPosterFile = $_FILES["spectacle-img"]["tmp_name"];
    $showPosterPath = "../img/shows/" .  basename($_FILES["spectacle-img"]["name"]);
    move_uploaded_file($showPosterFile, $showPosterPath);

    modifierSpectacleModel($showTitre, $showDate, $showHeure, $showSalle, $showVille, $showBillets, $showPosterPath, $showId);
    header("location:./index.php");
    exit();
}


//###################
//###################
//#   UTILISATEUR   #
//###################
//###################

// Connexion
function connexionUserCtlr($username, $password) {
    connexionUserModel($username, $password);
}

function connexionAdminCtlr() {
    include("./views/connexionView.php");
}

// Afficher Utilisateurs
function afficherListeUtilisateursCtlr() {
    $utilisateurs = afficherListeUtilisateursModel();
    include("./views/listeUtilisateursView.php");
}

function afficherAjoutUtilisateurCtlr() {
    include("./views/ajoutUtilisateurView.php");
}

function ajoutUtilisateurSubmitCtlr() {
    $userUsername = $_POST["new-user-username"];
    $userPwd = SHA1($_POST["new-user-password"]);
    $userPrenom = $_POST["new-user-prenom"];
    $userNom = $_POST["new-user-nom"];
    $userEmail = $_POST["new-user-email"];

    ajoutUtilisateurModel($userUsername, $userPwd, $userPrenom, $userNom, $userEmail);
    header("location:./liste-utilisateurs.php");
    exit();
}

function afficherModifierUtilisateurCtlr() {
    $id = $_GET["id"];
    $utilisateur = getUtilisateurModel($id);
    include("./views/modifierUtilisateurView.php");
}

function modifierUtilisateurSubmitCtlr() {
    $userId = intval($_POST["user-id"]);
    // $userPwdNew = SHA1($_POST["user-new-password"]);
    $userPrenom = $_POST["user-prenom"];
    $userNom = $_POST["user-nom"];
    $userEmail = $_POST["user-email"];

    modifierUtilisateurModel($userPrenom, $userNom, $userEmail, $userId);
    header("location:./liste-utilisateurs.php");
    exit();
}

function supprimerUtilisateurCtlr() {
    $id = $_GET["id"];
    supprimerUtilisateurModel($id);
    header("location:./liste-utilisateurs.php");
}

// Déconnexion
function endSessionCtlr() {
    session_start();
    $_SESSION["estConnecte"] = false;
    unset($_SESSION['userName']);
    session_destroy();
    header("location:./connexion.php");
    exit();
}
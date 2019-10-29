<?php

include("./models/users.php");
include("./models/oeuvres.php");

// Connexion
function connexionUserCtlr($username, $password) {
    connexionUserModel($username, $password);
}

function connexionAdminCtlr() {
    include("./views/connexionView.php");
}

// Afficher l'accueil
function afficherAdminAccueilCtlr() {
    $oeuvres = getOeuvresAdminModel();
    include("./views/indexView.php");
}

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

    //Pistes
    $pisteNoInt_1 = intval($_POST["piste-no--1"]);
    $pisteTitre_1 = $_POST["piste-titre--1"];
    $pisteTemps_1 = $_POST["piste-temps-min--1"] . ":" . $_POST["piste-temps-sec--1"];
    // Pistes Fichiers
    $pisteAudioFile_1 = $_FILES["piste-audio--1"]["tmp_name"];
    $destinationPiste_1 = "../media/audio/" .  basename($_FILES["piste-audio--1"]["name"]);
    move_uploaded_file($pisteAudioFile_1, $destinationPiste_1);

    // Appels des Functions avec paramètres
    ajoutOeuvreModel($oeuvreTitre, $oeuvreDate, $oeuvreEtiquette, $oeuvreTypeInt, $destinationCover, $oeuvreDesc, $lienBandcamp, $lienItunes, $lienAmazon);
    
    // $ getLastInsertIdModel();

    // ajoutPistesModel($lastInserId, $pisteNoInt_1, $pisteTitre_1, $pisteTemps_1, $destinationPiste_1);
    header("location:./index.php");
    exit();
}

// Modifier une oeuvre
function modifierOeuvreCtlr() {
    $id = $_GET["id"];
    $oeuvre = getOeuvreModifyModel($id);
    include("./views/modifierOeuvreView.php");
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
    $userUsername = $_POST["user-username"];
    $userPwd = SHA1($_POST["user-password"]);
    $userPrenom = $_POST["user-prenom"];
    $userNom = $_POST["user-nom"];
    $userEmail = $_POST["user-email"];

    $userPhoto = $_FILES["user-photo"]["tmp_name"];
    $pathPhotoUser = "./img/user/" .  basename($_FILES["user-photo"]["name"]);
    move_uploaded_file($userPhoto, $pathPhotoUser);

    ajoutOeuvreModel()
    header("location:./liste-utilisateurs.php");
    exit();
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
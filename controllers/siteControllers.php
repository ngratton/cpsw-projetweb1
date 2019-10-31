<?php

include("./models/oeuvres.php");
include("./models/spectacles.php");
include("./models/infolettre.php");


function afficherOeuvreCtlr() {
    $id = $_GET["id"];
    $oeuvre = getOeuvreModel($id);
    $pistes = getPistesModel($id);
    include("./views/oeuvreView.php");
}

function afficherMusiqueCtlr() {
    $oeuvres = getListeOeuvresModel();
    $types = getListeTypesModel();
    $avenir = getOeuvreFutureModel();
    include("./views/musiqueView.php");
}

function afficherBiographieCtlr() {
    include("./views/bioView.php");
}

function afficherAccueilCtlr() {
    $dernieresParutions = getDernieresOeuvresModel();
    $eventsAvenir = getAvenirModel();
    include("./views/accueilView.php");
}

function infolettreSubmitCtlr() {
    $infoCourriel = $_POST['email-newsletter'];
    ajoutCourrielInfolettreModel($infoCourriel);

    header('location:./');
    exit();
}

function afficherContactCtlr() {
    include("./views/contactView.php");
}
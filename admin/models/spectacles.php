<?php

include("../utils/db_access.php");

function ajoutSpectacleModel($showTitre, $showDate, $showHeure, $showSalle, $showVille, $showBillets, $showPosterPath) {
    global $bdd;

    $sql = "
    INSERT INTO spectacles (show_titre, show_date, show_heure, show_salle, show_ville, show_lien_billets, show_photo_path)
    VALUES  (?, ?, ?, ?, ?, ?, ?)
    ";

    $stmt = mysqli_prepare($bdd, $sql);

    mysqli_stmt_bind_param(
        $stmt, 
        'sssssss',
        $showTitre,
        $showDate,
        $showHeure,
        $showSalle,
        $showVille,
        $showBillets,
        $showPosterPath
    );
    mysqli_stmt_execute($stmt);

    mysqli_close($bdd);
}

function getSpectaclesAdminModel() {
    global $bdd;

    $sql = "
        SELECT * FROM spectacles
        ORDER BY show_date DESC
        ";
    
    $resultats = mysqli_query($bdd, $sql);
    return $resultats;
    
    mysqli_close($bdd);
}

function supprimerSpectacleModel($id) {
    global $bdd;

    $sql = "
        DELETE FROM spectacles
        WHERE id = $id
    ";
    
    mysqli_query($bdd, $sql);
    
    mysqli_close($bdd);
}

function getSpectacleModel($id) {
    global $bdd;

    $sql = "
        SELECT * FROM spectacles
        WHERE id = $id
        ";
    
    $resultat = mysqli_query($bdd, $sql);
    $row = mysqli_fetch_assoc($resultat);
    
    mysqli_close($bdd);
    return $row;
}

function modifierSpectacleModel($showTitre, $showDate, $showHeure, $showSalle, $showVille, $showBillets, $showPosterPath, $showId) {
    global $bdd;

    $sql = "
        UPDATE spectacles
        SET 
            show_titre = ?,
            show_date = ?,
            show_heure = ?,
            show_salle = ?,
            show_ville = ?,
            show_lien_billets = ?,
            show_photo_path = ?
        WHERE id = ?
        ";


    $stmt = mysqli_prepare($bdd, $sql);
    mysqli_stmt_bind_param($stmt, 'sssssssi', $showTitre, $showDate, $showHeure, $showSalle, $showVille, $showBillets, $showPosterPath, $showId);
    mysqli_stmt_execute($stmt);
    
    mysqli_close($bdd);
}
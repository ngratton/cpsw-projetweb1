<?php

include("../utils/db_access.php");

function getOeuvresAdminModel() {
    global $bdd;

    $sql = "
        SELECT oeuvres.id, album_titres, album_dates, album_img_path, types.type_nom FROM oeuvres
        INNER JOIN types
        ON oeuvres.fk_types_id = types.id
        ORDER BY album_dates desc
    ";
    
    $resultats = mysqli_query($bdd, $sql);
    return $resultats;
    
    mysqli_close($bdd);
}

function ajoutOeuvreModel($oeuvreTitre, $oeuvreDate, $oeuvreEtiquette, $oeuvreTypeInt, $destinationCover, $oeuvreDesc, $lienBandcamp, $lienItunes, $lienAmazon) {
    global $bdd;

    $sql = "
    INSERT INTO oeuvres (
        fk_types_id, 
        album_titres, 
        album_dates, 
        etiquette, 
        album_img_path, 
        album_desc,  
        bandcamp_link, 
        itunes_link, 
        amazon_link
        )
    VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($bdd, $sql);
    mysqli_stmt_bind_param(
        $stmt, 
        'issssssss',
        $oeuvreTypeInt,
        $oeuvreTitre,
        $oeuvreDate,
        $oeuvreEtiquette,
        $destinationCover,
        $oeuvreDesc,
        $lienBandcamp,
        $lienItunes,
        $lienAmazon
    );

    mysqli_stmt_execute($stmt);

    mysqli_close($bdd);

    // return $stmt;
}

function ajoutPistesModel($oeuvreIdInt, $pisteNoInt_1, $pisteTitre_1, $pisteTemps_1, $audioPistePath_1) {
    global $bdd;

    $sql = "
    INSERT INTO pistes (
        fk_album_id, 
        piste_no, 
        piste_titre, 
        piste_temps,
        piste_audio_path
    )
    VALUES (?, ?, ?, ?, ?)
    ";

    $stmt = mysqli_prepare($bdd, $sql);

    mysqli_stmt_bind_param(
        $stmt, 
        'iisss',
        $oeuvreIdInt,
        $pisteNoInt_1,
        $pisteTitre_1,
        $pisteTemps_1,
        $audioPistePath_1
    );

    mysqli_stmt_execute($stmt);

    mysqli_close($bdd);

    // return $stmt;
}

function getPistesModifierModel($id) {
    global $bdd;

    $sql = "SELECT * FROM pistes 
    WHERE pistes.fk_album_id = $id";
        
    $resultats = mysqli_query($bdd, $sql);
    $row = mysqli_fetch_assoc($resultats);
    
    mysqli_close($bdd);
    return $row;
}

function getOeuvresIdModel() {
    global $bdd;

    $sql = "SELECT MAX(id) as 'id', album_titres FROM oeuvres";
        
    $resultats = mysqli_query($bdd, $sql);
    $row = mysqli_fetch_assoc($resultats);
    
    return $row;
}

function getOeuvreModel($id) {
    global $bdd;

    $sql = "SELECT * FROM oeuvres 
    WHERE oeuvres.id = $id";
        
    $resultats = mysqli_query($bdd, $sql);
    $row = mysqli_fetch_assoc($resultats);
    
    mysqli_close($bdd);
    return $row;
}

function getOeuvreModifierModel($id) {
    global $bdd;

    $sql = "SELECT * FROM oeuvres 
    WHERE oeuvres.id = $id";
        
    $resultats = mysqli_query($bdd, $sql);
    $row = mysqli_fetch_assoc($resultats);
    
    // mysqli_close($bdd);
    return $row;
}

function supprimerOeuvreModel($id) {
    global $bdd;

    $sql = "
        DELETE FROM oeuvres
        WHERE id = $id
    ";
    
    mysqli_query($bdd, $sql);
    
    mysqli_close($bdd);
}

function modifierPistesModel($pisteId1, $pisteTitre1, $pisteTemps1) {
    global $bdd;

    $sql = "
        UPDATE pistes
        SET 
            piste_titre = ?, 
            piste_temps = ?
        WHERE id = ?
        ";

    $stmt = mysqli_prepare($bdd, $sql);
    mysqli_stmt_bind_param($stmt, 'ssi', $pisteTitre1, $pisteTemps1, $pisteId1);
    mysqli_stmt_execute($stmt);
    
    // mysqli_close($bdd);

    // return $stmt;
}

function modifierOeuvreModel($oeuvreIdInt, $oeuvreTitre, $oeuvreDate, $oeuvreEtiquette, $oeuvreTypeInt, $oeuvreDesc, $oeuvreLienBandcamp, $oeuvreLienItunes, $oeuvreLienAmazon) {
    global $bdd;

    $sql = "
        UPDATE oeuvres
        SET 
            album_titres = ?, 
            album_dates = ?,
            etiquette = ?,
            fk_types_id = ?,
            album_desc = ?,
            bandcamp_link = ?,
            itunes_link = ?,
            amazon_link = ?
        WHERE id = ?
        ";

    $stmt = mysqli_prepare($bdd, $sql);
    mysqli_stmt_bind_param($stmt, 'sssissssi', $oeuvreTitre, $oeuvreDate, $oeuvreEtiquette, $oeuvreTypeInt, $oeuvreDesc, $oeuvreLienBandcamp, $oeuvreLienItunes, $oeuvreLienAmazon, $oeuvreIdInt);
    mysqli_stmt_execute($stmt);
    
    // return $stmt;
}
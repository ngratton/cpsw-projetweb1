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
    BEGIN;
    INSERT INTO oeuvres (
        fk_types_id, 
        album_titres, 
        album_dates, 
        etiquette, 
        album_img_path, 
        album_desc,  
        bandcamp_link, 
        itunes_link, 
        amazon_link  )
    VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

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

    $sql = "SELECT LAST_INSERT_ID()";
    
    $resultats = mysqli_query($bdd, $sql);
    return $resultats;

    mysqli_close($bdd);
}

function getLastInsertIdModel() {
    global $bdd;

    $sql = "SELECT LAST_INSERT_ID()";
    
    $resultats = mysqli_query($bdd, $sql);
    return $resultats;
    
    mysqli_close($bdd);
}

function ajoutPistesModel($lastInserId, $pisteNoInt_1, $pisteTitre_1, $pisteTemps_1, $destinationPiste_1) {
    global $bdd;

    $sql = "
    INSERT INTO pistes (
        fk_album_id, 
        piste_no, 
        piste_titre, 
        piste_temps
    )
    VALUES (?, ?, ?, ?)
    ";

    $stmt = mysqli_prepare($bdd, $sql);
    mysqli_stmt_bind_param(
        $stmt, 
        'iiss',
        $lastInserId,
        $pisteNoInt_1,
        $pisteTemps_1,
        $destinationPiste_1
    );

    mysqli_stmt_execute($stmt);

    mysqli_close($bdd);
}

function getOeuvreModifyModel($id) {
    global $bdd;

    $sql = "
    SELECT oeuvres.id, album_titres, album_dates, album_img_path, types.type_nom FROM oeuvres
    INNER JOIN types
    ON oeuvres.fk_types_id = types.id
    INNER JOIN pistes
    ON oeuv
    ";
    
    $resultats = mysqli_query($bdd, $sql);
    return $resultats;
    
    mysqli_close($bdd);
}
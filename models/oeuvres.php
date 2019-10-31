<?php

include("./utils/db_access.php");

function getOeuvreModel($id) {
    global $bdd;

    $sql = "SELECT * FROM oeuvres 
    INNER JOIN types ON
    oeuvres.fk_types_id = types.id
    WHERE oeuvres.id = $id";
        
    $resultats = mysqli_query($bdd, $sql);
    $row = mysqli_fetch_assoc($resultats);
    
    // mysqli_close($bdd);
    return $row;
}

function getPistesModel($id) {
    global $bdd;

    $sql = "SELECT * FROM pistes WHERE fk_album_id = $id";
        
    $resultats = mysqli_query($bdd, $sql);
    // $row = mysqli_fetch_assoc($resultats);
    
    // mysqli_close($bdd);
    return $resultats;
}

function getListeOeuvresModel() {
    global $bdd;

    $sql = "SELECT *, oeuvres.id as 'oeuvreid' FROM oeuvres 
    INNER JOIN types ON
    oeuvres.fk_types_id = types.id";
        
    $resultats = mysqli_query($bdd, $sql);
    
    return $resultats;
}

function getListeTypesModel() {
    global $bdd;

    $sql = "SELECT * FROM types";
        
    $resultats = mysqli_query($bdd, $sql);
    
    return $resultats;
}

function getOeuvreFutureModel() {
    global $bdd;

    $sql = "SELECT *, oeuvres.id as 'oeuvreid' FROM oeuvres 
    INNER JOIN types ON
    oeuvres.fk_types_id = types.id
    WHERE date_format(album_dates,'%Y-%m-%d') > date_format(CURDATE(), '%Y-%m-%d')
    ORDER BY album_dates DESC
    LIMIT 1";
        
    $resultats = mysqli_query($bdd, $sql);
    $row = mysqli_fetch_assoc($resultats);
    
    // mysqli_close($bdd);
    return $row;
}

function getDernieresOeuvresModel() {
    global $bdd;

    $sql = "SELECT *, types.type_nom, oeuvres.id as 'oeuvreid' FROM oeuvres
    INNER JOIN types ON
    oeuvres.fk_types_id = types.id
    WHERE date_format(album_dates,'%Y-%m-%d') <= date_format(CURDATE(), '%Y-%m-%d')
    ORDER BY album_dates DESC
    LIMIT 2";
        
    $resultats = mysqli_query($bdd, $sql);
    
    return $resultats;

}

function getAvenirModel() {
    global $bdd;

    $sql = "(SELECT album_titres as 'titre', album_dates as 'date', type_nom as 'type', etiquette, album_img_path as 'img', evenement, oeuvres.id as 'link' from oeuvres
    INNER JOIN types ON
    oeuvres.fk_types_id = types.id
    WHERE date_format(album_dates,'%Y-%m-%d') > date_format(CURRENT_DATE, '%Y-%m-%d'))
    UNION
    (SELECT show_titre, CONCAT(show_date, ' - ', show_heure) as date, show_ville, show_salle, show_photo_path, evenement, show_lien_billets  from spectacles
    WHERE date_format(show_date,'%Y-%m-%d') > date_format(CURRENT_DATE, '%Y-%m-%d'))
    ORDER BY date ASC
    LIMIT 2";
        
    $resultats = mysqli_query($bdd, $sql);
    
    return $resultats;

}
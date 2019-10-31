<?php

include("./utils/db_access.php");

function ajoutCourrielInfolettreModel($infoCourriel) {
    global $bdd;

    $sql = "
            INSERT INTO newsletter (infolettre_email)
            VALUES  (?)
            ";

    $stmt = mysqli_prepare($bdd, $sql);
    mysqli_stmt_bind_param($stmt, 's', $infoCourriel);
        
    mysqli_stmt_execute($stmt);
        
    mysqli_close($bdd);
}
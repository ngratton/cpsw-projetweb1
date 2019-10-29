<?php

include("../utils/db_access.php");

function connexionUserModel($username, $password) {
    global $bdd;

    session_start();

    if (isset($username) === false) {
        header("location:login.php");
        exit();
    }

    $sql = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'";

    $login_user = mysqli_query($bdd, $sql);

    // $stmt = mysqli_prepare($bdd, $sql);
    // mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
    // mysqli_stmt_execute($stmt);

    // $login_user = $stmt;

    if (! $login_user) { 
        echo mysqli_error($bdd);
        mysqli_close($bdd);
        exit();
    }
    
    if (mysqli_num_rows($login_user) > 0) {

        $connected_user = mysqli_fetch_assoc($login_user);
        
        $_SESSION["userId"] = $connected_user["id"];
        $_SESSION["userName"] = $connected_user["username"];
        $_SESSION["userNom"] = $connected_user["prenom"] . " " . $connected_user["nom"];
        $_SESSION["userPrenom"] = $connected_user["prenom"];
        $_SESSION["estConnecte"] = true;
        header("location:index.php");
        exit();
    } else {
        echo "<span class='txt_rouge'>Erreur de nom d'utilisateur ou de mot de passe.</span>";
        $_SESSION["estConnecte"] = false;
        // sleep(3);
        // header("location:index.php");        
        exit();
    }
    
    mysqli_close($bdd);
}

function afficherListeUtilisateursModel() {
    global $bdd;

    $sql = "
        SELECT * FROM users
    ";
    
    $resultats = mysqli_query($bdd, $sql);
    return $resultats;
    
    mysqli_close($bdd);
}
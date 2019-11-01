<?php 

$db_hostname = "mysql.julienduranleau.com";
$db_username = "0270256";
$db_password = "0270256";
$db_database = "0270256_projweb1_gforion";

$bdd = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

if (!$bdd) {
    echo "<span class='txt_rouge'>Échec de connection à MySQL</span>";
    echo mysqli_connect_error();
}

mysqli_set_charset($bdd, "utf8");  // Appliquer le charset UTF-8

// mysqli_select_db($bdd, $db_database);


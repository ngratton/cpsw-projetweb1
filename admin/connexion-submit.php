<?php

$username = $_POST["username"];
$password = sha1($_POST["password"]);

include("./controllers/siteControllers.php");
connexionUserCtlr($username, $password);
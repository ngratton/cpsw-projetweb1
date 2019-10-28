

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion | Administration | Gabriel Forion - compositeur</title>
    <link rel="stylesheet" href="../styles/styles.min.css">
    <link rel="stylesheet" href="../styles/admin-styles.min.css">
</head>
<body class="admin-connexion-accueil">
    <div class="container flex-centre">
        <div class="carte" id="admin-connexion">
            <img src="../img/nav-logo.png" alt="">
            <h4>Administration</h4>
            <form action="./connexion-submit.php" method="post" name="connect" id="admin-connect-form">
                <input type="text" name="username" id="username" placeholder="Nom d'utilisateur">
                <input type="password" name="password" id="password" placeholder="Mot de passe">
                <button class="btn btn-turquoise" type="submit">Connexion</button>
            </form>
        </div>
    </div>

</body>
</html>
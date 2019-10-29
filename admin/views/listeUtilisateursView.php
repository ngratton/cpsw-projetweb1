<?php

session_start();

if ($_SESSION["estConnecte"] != true) {
    echo "<span class='txt_rouge'>Accès refusé.</span>";
    // sleep(2);
    header("location:connexion.php");
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des utilisateurs | Administration | Gabriel Forion - compositeur</title>
    <link rel="stylesheet" href="../styles/admin-styles.min.css">
</head>
<body>
    <div class="conteneur">
        <?php include("./views/admin-header.php"); ?>
        <main>
            <div class="container flex-centre">
                <div class="carte" id="admin-utilisateurs">
                    <div class="flex">
                        <div class="flex-l-3quart">
                            <div class="admin-users-tableau users-gestion-oeuvres">
                                <div class="admin-users-table-header">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M7 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1c2.15 0 4.2.4 6.1 1.09L12 16h-1.25L10 20H4l-.75-4H2L.9 10.09A17.93 17.93 0 0 1 7 9zm8.31.17c1.32.18 2.59.48 3.8.92L18 16h-1.25L16 20h-3.96l.37-2h1.25l1.65-8.83zM13 0a4 4 0 1 1-1.33 7.76 5.96 5.96 0 0 0 0-7.52C12.1.1 12.53 0 13 0z"/></svg>
                                        <h3>Liste des utilisateurs</h3>
                                    </div>
                                    <a href="ajout-utilisateur.php">
                                        <button class="btn btn-add">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M11 9V5H9v4H5v2h4v4h2v-4h4V9h-4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20z"/></svg>
                                            Ajouter
                                        </button>
                                    </a>
                                </div>
                                <div class="admin-users-table-items">

                                    <table>
                                        <thead>
                                            <th>Photo</th>
                                            <th>Prénom</th>
                                            <th>Nom</th>
                                            <th>Nom d'utilisateur</th>
                                            <th>Courriel</th>
                                            <th>Modifier</th>
                                            <th>Supprimer</th>
                                        </thead>
                                        <?php foreach($utilisateurs as $utilisateur) { ?>
                                            <tr>
                                                <td>
                                                    <img src="<?php 
                                                        if ($utilisateur['user_photo_path'] == '' || $utilisateur['user_photo_path'] == NULL) { 
                                                            echo "../img/admin/user-solid-square.svg";
                                                        } else {
                                                            echo $utilisateur['user_photo_path'];
                                                        }
                                                    ?>" alt="<?php echo $utilisateur['username']; ?>">
                                                </td>
                                                <td><?php echo $utilisateur['prenom']; ?></td>
                                                <td><?php echo $utilisateur['nom']; ?></td>
                                                <td><?php echo $utilisateur['username']; ?></td>
                                                <td><?php echo $utilisateur['courriel']; ?></td>
                                                <td>
                                                    <a href="modifier-utilisateur.php?id=<?php echo $utilisateur['id']; ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.3 3.7l4 4L4 20H0v-4L12.3 3.7zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z"/></svg>
                                                    </a>
                                                </td>
                                                <td>
                                                    
                                                <a href="supprimer-utilisateur.php?id=<?php echo $utilisateur['id']; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M6 2l2-2h4l2 2h4v2H2V2h4zM3 6h14l-1 14H4L3 6zm5 2v10h1V8H8zm3 0v10h1V8h-1z"/></svg>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
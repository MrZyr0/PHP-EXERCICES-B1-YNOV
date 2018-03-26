<?php

session_start();                // Démarre la session pour creer la variable $_SESSION de type array (tableau)

?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>connexion email</title>
    </head>
    <body>
        <h1>Vous êtes connecté !</h1>
        <p><?= $_SESSION['email'] ?></p>
        <a href="index.php?email=julien.seixas@free.fr"><button type="button" name="button">retour</button></a>
        <a href="destroy.php"><button type="button" name="button">supprimer la connexion</button></a>
    </body>
</html>

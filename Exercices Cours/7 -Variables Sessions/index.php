<?php

session_start();                // Démarre la session pour creer la variable $_SESSION de type array (tableau)


$_SESSION['email'] = $_GET['email'];

?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>connexion email</title>
    </head>
    <body>
        <h1>Connexion par email avec la méthode get</h1>
        <p>stocke l'email de l'utilisateur donné en GET</p>
        <a href="connexion.php"><button type="button" name="button">voir l'email</button></a>
    </body>
</html>

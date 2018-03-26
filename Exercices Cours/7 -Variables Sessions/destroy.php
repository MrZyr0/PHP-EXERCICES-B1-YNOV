<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>connexion email</title>
    </head>
    <body>
        <h1>Vous êtes déconnecté !</h1>
        <p>la preuve : <?php session_destroy(); if (isset($_SESSION['email'])) $_SESSION['email']; ?></p>
        <a href="index.php?email=julien.seixas@free.fr"><button type="button" name="button">retour</button></a>
    </body>
</html>

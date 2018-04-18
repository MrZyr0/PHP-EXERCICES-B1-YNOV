<?php

$RacineServ = __DIR__;
require_once $RacineServ . '/src/BDD/SQL.php';

// echo "<div class=\"alert alert-danger\" role=\"alert\">";
// echo "La liste de course est vide... 😞";
// echo "</div>";

$SQL = new SQL();

$Requette = $SQL->Requette("CREATE DATABASE 'Utilisateurs'");
var_dump($Requette);
?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Imagination 2.0</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Imagination 2.0</h1>
            </div>
        </div>

        <div class="container">
            <h2>Utilisateurs</h2>
            <pre><?= var_dump($Requette) ?></pre>
            <!-- Si la liste de course est vide -->
            <!-- Sinon on affiche les produits de la liste de courses, triée par categorie puis nom de produit -->
            <!-- <table class="table">
                <tr>
                    <th width="250px">ligne 1</tr>
                    <td>Colonne 1 de la ligne 1</td>
                </tr>
            </table> -->

        </div>
    </main>
</body>
</html>

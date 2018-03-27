<?php
$RacineServ = __DIR__;
require_once $RacineServ . '/src/Utilisateur.php';
require_once $RacineServ . '/src/Admin.php';

$utilisateur1 = new Utilisateur('SEIXAS', 'Julien', 18, '0760109993');
$Admin1 = new Admin('SEIXAS', 'Julien', 18, '0760109993', true);

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>POO</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">POO</h1>
                <p style="font-size: 2em;">
                    <?= $utilisateur1 ?>
                    <br>
                    <br>
                    <?= $Admin1->AffInfos() ?>
                </p>
            </div>
        </div>
    </main>

    <footer class="container">
        <p>&copy; Julien SEIXAS <?php print date("Y") ?></p>
    </footer>
</body>
</html>

<?php
    $RacineServ = __DIR__;

    require_once($RacineServ . '/fonctions/gen.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Générateur de phrases</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Jumbotron</h1>
                <p style="font-size: 2em;">
                </p>
                    <?php print GenPhrases(); ?>
                <p><a href="/PHP7_Julien_SEIXAS/Exercices%20Cours/3%20-%20Site/index.php" class="btn btn-primary btn-lg" role="button">Button</a></p>
            </div>
        </div>
    </main>

    <footer class="container">
        <p>&copy; Julien SEIXAS <?= date('Y') ?></p>
    </footer>
</body>
</html>

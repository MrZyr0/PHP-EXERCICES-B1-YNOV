<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Variables GETS</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
</head>
<body>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Bonjour
                    <?php
                    if (isset($_GET['nom'])) {
                        print $_GET['nom'] . ' ';
                    }

                    if (isset($_GET['prenom'])) {
                        print $_GET['prenom'];
                    }

                    ?> !</h1>
                <p style="font-size: 2em;">

                </p>

                <p><a href="/PHP7_Julien_SEIXAS/Exercices%20Cours/4%20-%20Variables%20GETS/index.php?nom=SEIXAS&prenom=Julien" class="btn btn-primary btn-lg" role="button">Affichage Julien SEIXAS</a></p>
                <p><a href="/PHP7_Julien_SEIXAS/Exercices%20Cours/4%20-%20Variables%20GETS/index.php" class="btn btn-primary btn-lg" role="button">Affichage Anonyme</a></p>
            </div>
        </div>
    </main>

    <footer class="container">
        <p>&copy; Bootstrap 2018</p>
    </footer>
</body>
</html>

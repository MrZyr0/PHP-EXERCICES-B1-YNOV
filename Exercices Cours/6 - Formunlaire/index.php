<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Titre de la page</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style media="screen">
        body {
            padding-top: 5rem;
        }

        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php include(__DIR__ . 'navigation.php'); ?>

    <main role="main" class="container">
        <div class="starter-template">
            <h1>Page d'accueil</h1>
            <p>Voici le contenu de la variable $_SERVER</p>
            <pre style="text-align: left">
                <?php print_r($_SERVER); ?>
            </pre>
        </div>
    </main>
</body>
</html>

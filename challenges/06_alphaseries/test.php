<?php
$json = file_get_contents(__DIR__.'/data/shows.json');
$shows = json_decode($json, true);

function TrieAlphabetique($showA, $showB)               // Permet de faire un alphabetique trie dans un tableau
{
    return $showA['name'] <=> $showB['name'];
}

function TrieParA($show)                                // Permet de faire un trie par lettre dans un tableau
{
    if ($show['name']{0} === "A") {
        return true;
    }

    // sinon
    return false;
}

//$shows = array_filter($shows, 'TrieParA');            // Trie le tableau par la lettre A

//usort($shows, 'TrieAlphabetique');      // Utilisation de la fonction usort pour trier le tableau par ordre alphabetique

?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>AlphaSeries</title>

    <!-- CSS Bootstrap 4 : https://getbootstrap.com/docs/4.0/getting-started/introduction/ -->
    <link defer rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS Font Awesome 5 : https://fontawesome.com/get-started -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js" integrity="sha384-sCI3dTBIJuqT6AwL++zH7qL8ZdKaHpxU43dDt9SyOzimtQ9eyRhkG3B7KMl6AO19" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link href="css/alphaseries.css" rel="stylesheet">
</head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="index.php">AlphaSeries</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu principal -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="fas fa-home"></i> Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="classement.php">
                             <i class="fas fa-trophy"></i> Classement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="serie.php">
                            <i class="fas fa-random"></i> Une série aléatoire
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="test.php">
                            <i class="fas"></i> Zone de test
                        </a>
                    </li>

                </ul>

                <!-- Formulaire de recherche -->
                <form action="recherche.php" method="post" class="form-inline my-2 my-lg-0">
                    <input name="search" class="form-control mr-sm-2" type="text" placeholder="Rechercher une série" aria-label="Rechercher une série">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
                        <i class="fa fa-search"></i> <span class="d-md-none">Rechercher</span>
                    </button>
                </form>
            </div>
        </nav>
        <pre></pre>
    </body>
</html>

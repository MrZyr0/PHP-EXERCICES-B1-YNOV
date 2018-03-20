<?php
    // basename renvoit le nom du fichier, quand on lui donne un chemin
    // exemple, si je lui donne "foo/bar/fichier.php", ça me retourne fichier.php
    $script = basename($_SERVER['SCRIPT_NAME']);
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link
                    <?php if ($script === 'index.php') { print "active"; } ?>
                " href="/cours/16_http/04_navigation/index.php">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link
                    <?php if ($script === 'connection.php') { print "active"; } ?>
                " href="/cours/16_http/04_navigation/connection.php">Connexion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link
                    <?php if ($script === 'inscription.php') { print "active"; } ?>
                " href="/cours/16_http/04_navigation/inscription.php">Inscription</a>
            </li>
        </ul>
    </div>
</nav>

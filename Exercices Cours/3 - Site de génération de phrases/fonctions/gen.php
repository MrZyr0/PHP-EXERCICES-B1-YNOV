<?php


function GenPhrases()
{
    global $RacineServ;                                                         // Récupère la vairable pour pouvoir l'utiliser dans la fonction

    include ($RacineServ . '/variables/sujets.php');                            // Include à l'intérieur de la fonction pour pouvoir utiliser les variables ajoutés
    include ($RacineServ . '/variables/verbes.php');
    include ($RacineServ . '/variables/complements.php');

    $rdmsujet = mt_rand(0, count($subjects) - 1);
    $rdmverbe = mt_rand(0, count($verbs) - 1);
    $rdmcomplement = mt_rand(0, count($complements) - 1);


    return sprintf(
        "%s %s %s.\n",
        $subjects[$rdmsujet],
        $verbs[$rdmverbe],
        $complements[$rdmcomplement]
    );
}

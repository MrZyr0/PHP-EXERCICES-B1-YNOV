<?php

print 'Lancement du script' . "\n";

$fichierATrier = file_get_contents($argv[1]);                                   // Stockage des caractcères du fichier dans une string selon le chemin donné en argument
$tabloRecap = [

];

for ( $i=0; $i < strlen($fichierATrier); $i++ ) {                               // On parcours tout le fichier

    $Caractere = $fichierATrier[$i];                                            // Stocke le caractère testé

    if (isset($tabloRecap[$Caractere])) {                                               // Si le caractère actuel du fichier existe dans le tablo de récap
        print 'le caractère existe' . "\n";
        $tabloRecap[$Caractere] ++;
    }
    else {
        print 'le caractère n\'existe pas';
        $tabloRecap[$Caractere] = 1;
        print "\n";
    }
}


var_dump ($tabloRecap);

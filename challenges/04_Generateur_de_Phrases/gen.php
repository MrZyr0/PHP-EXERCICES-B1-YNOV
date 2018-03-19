<?php

print '***********************************' . "\n";
print '*   Exercice de phrase aléatoire  *' . "\n";
print 'de Matthieu Dabin & Julien Seixas *' . "\n";
print '***********************************' . "\n\n\n";

$subjects = [
    'Jean',
    'Robert',
    'Jacques',
    'Henry',
    'Adolf',
    'Vladimir',
    'Staline',
    'Mandela',
    'Obama',
    'Piong Chang',
    'Joris',
    'Philipe',
];

$verbs = [
    'mange',
    'regarde',
    'ouvre',
    'découpe',
    'change',
    'veut',
    'aime',
    'vend',
    'achete',
    'découvre',
    'tape',
    'prend',
];

$complements = [
    'un haricot',
    'un chien',
    'un nain de jardin',
    'une table',
    'une tarte',
    'un papier',
    'des fleurs',
    'des cacahuétes',
    'le surimi',
    'un yaourt',
    'des pop-corn',
    'du thon',
    'une caisse',
    'une valise',
    'son ordinateur',
    'sa tablette',
];

$choice = "oui";




 while ($choice === "oui")
 {
    $rdmsujet = mt_rand(0, count($subjects) - 1);
    $rdmverbe = mt_rand(0, count($verbs) - 1);
    $rdmcomplement = mt_rand(0, count($complements) - 1);

    print $subjects[$rdmsujet] . ' ' . $verbs[$rdmverbe] . ' ' . $complements[$rdmcomplement] . "\n";

    $choice = readline("Relancer ? non | oui : ");

    if ( $choice != "oui" && $choice != "non" ) {
    $choice = "oui";
    }

    print "\n\n\n";

 }

print "\n\n\n";

<?php

$subject = ['Jean', 'Robert', 'Jacques', 'Henry', 'Adolf', 'Vladimir', 'Staline', 'Mandela', 'Obama', 'Piong Chang', 'Joris', 'Philipe'];
$verb = ['mange', 'regarde', 'ouvre', 'découpe', 'change', 'veut', 'aime', 'vend', 'achete', 'découvre', 'tape', 'prend'];
$complement = ['un haricot', 'un chien', 'un nain de jardin', 'une table', 'une tarte', 'un papier', 'des fleurs', 'des cacahuétes', 'le surimi', 'un yaourt', 'des pop-corn', 'du thon', 'une caisse', 'une valise', 'son ordinateur', 'sa tablette', ];
$choice = "oui";


 while ($choice === "oui")
 {
    $rdmsujet = mt_rand(0, count($subject) - 1);
    $rdmverbe = mt_rand(0, count($verb) - 1);
    $rdmcomplement = mt_rand(0, count($complement) - 1);

    print $subject[$rdmsujet] . ' ' . $verb[$rdmverbe] . ' ' . $complement[$rdmcomplement] . "\n";

    $choice = readline("Relancer ? non | oui : ");

    if ( $choice != "oui" && $choice != "non" ) {
    $choice = "oui";
    }
 }
print "\n";

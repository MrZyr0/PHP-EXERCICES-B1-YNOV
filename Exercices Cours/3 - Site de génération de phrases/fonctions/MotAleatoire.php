<?php
function arrayRand($data) {
    $randomIndex = mt_rand(0, count($data) - 1);
    
    // retourne un élément aléatoire d'un tableau
    return $data[$randomIndex];
}

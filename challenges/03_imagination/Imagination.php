<?php

$NbAff3 = 1;
$NbCaractaff = 0;
$NbCaractaffMaxParLignes = 1;
$NbEspace = 25;
$NbEspaceAff = 0;

while ( $NbCaractaffMaxParLignes < 10 ) {                                           //Tant que l'on a pas afficher 10 lignes, on boucle

  while ( $NbEspace > $NbEspaceAff ) {                                              //Tant que l'on a affiché un nb d'espace < à nb à afficher, on boucle
    print ' ';                                                                  //On affiche un espace
    $NbEspaceAff++;                                                             //On incrémente de 1 le nb d'espaces affichés
  }

  $NbEspace--;                                                                  //On réduit de 1 le nb d'espaces max pour la prochaine ligne
  $NbEspaceAff = 0;                                                               //On remet à 0 le nb d'espaces aff pour la prochaine ligne

  while ( $NbCaractaff < $NbCaractaffMaxParLignes ) {                               //Tant que le nb à afficher < au nombre de caractère pour cette ligne, on boucle
    print $NbAff3;                                                              //On affiche le nb
    $NbAff3++;                                                                  //On incrémente le nb
    $NbCaractaff++;
  }

  $NbAff3--;
  $NbAff3--;

  while ( $NbAff3 >= 1 ) {                                                          //Tant que le nb à afficher < au nombre de caractère pour cette ligne, on boucle
    print $NbAff3;                                                              //On affiche le nb
    $NbAff3--;                                                                  //On incrémente le nb
  }

  print "\n";                                                                   //Quand on à fini notre ligne, on fait un retour à la ligne
  $NbCaractaffMaxParLignes++;                                                   //On augmente le nb de catactères max par ligne
  $NbAff3 = 1;
  $NbCaractaff = 0;

}

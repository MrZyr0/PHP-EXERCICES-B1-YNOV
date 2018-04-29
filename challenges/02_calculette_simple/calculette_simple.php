<?php

if ( isset($argv[2]) ) {

    switch ( $argv[2] ) {

        case '+':
            print "\n\n" . '******************************************' . "\n";
            print '*              Addition                  *' . "\n";
            print '******************************************' . "\n\n";

            $Nb1 = $argv[1];
            $Nb2 = $argv[3];
            $Result = $Nb1 + $Nb2;

            print '              ' . $Nb1 . ' ' . $argv[2] . ' '  . $Nb2 . ' = ' . $Result . "\n\n";
        break;

        case '-':
            print "\n\n" . '******************************************' . "\n";
            print '*              Soustraction              *' . "\n";
            print '******************************************' . "\n\n";

            $Nb1 = $argv[1];
            $Nb2 = $argv[3];
            $Result = $Nb1 - $Nb2;

            print '              ' . $Nb1 . ' ' . $argv[2] . ' '  . $Nb2 . ' = ' . $Result . "\n\n";
        break;

        case '*':
            print "\n\n" . '******************************************' . "\n";
            print '*              Multiplication           *' . "\n";
            print '******************************************' . "\n\n";

            $Nb1 = $argv[1];
            $Nb2 = $argv[3];
            $Result = $Nb1 * $Nb2;

            print '              ' . $Nb1 . ' ' . $argv[2] . ' '  . $Nb2 . ' = ' . $Result . "\n\n";
        break;

        case '/':
            print "\n\n" . '******************************************' . "\n";
            print '*               Division                 *' . "\n";
            print '******************************************' . "\n\n";

            $Nb1 = $argv[1];
            $Nb2 = $argv[3];

            if ( $Nb2 == 0 ) {
                die ( '              ' . $Nb1 . ' ' . $argv[2] . ' '  . $Nb2 . "\n\n" . 'Division par zero impossible !!' . "\n\n" );
            }
            $Result = $Nb1 / $Nb2;

            print '              ' . $Nb1 . ' ' . $argv[2] . ' '  . $Nb2 . ' = ' . $Result . "\n\n";
        break;

        case '**':
            print "\n\n" . '******************************************' . "\n";
            print '*              Exponentiel               *' . "\n";
            print '******************************************' . "\n\n";

            $Nb1 = $argv[1];
            $Nb2 = $argv[3];
            $Result = $Nb1 ** $Nb2;

            print '              ' . $Nb1 . ' ' . $argv[2] . ' '  . $Nb2 . ' = ' . $Result . "\n\n";
        break;

        case '%':
            print "\n\n" . '******************************************' . "\n";
            print '*               Modulo                   *' . "\n";
            print '******************************************' . "\n\n";

            $Nb1 = $argv[1];
            $Nb2 = $argv[3];
            $Result = $Nb1 % $Nb2;

            print '              ' . $Nb1 . ' ' . $argv[2] . ' '  . $Nb2 . ' = ' . $Result . "\n\n";
        break;

        default:
            print "\n\n" . 'Une erreur c\'est produite, nous n\'avons pas pu identifé votre opérateur.' . "\n" . 'Merci de vérifier vos arguments.' . "\n" . 'Vous devez entrez les arguments comme ceci : [Nb_1] [Opérateur] [Nb_2]';
        break;
    }
}
else {
    print "\n\n" . 'Une erreur c\'est produite, nous n\'avons pas pu identifé votre opérateur.' . "\n" . 'Merci de vérifier vos arguments.' . "\n" . 'Vous devez entrez les arguments comme ceci : [Nb_1] [Opérateur] [Nb_2]';
}

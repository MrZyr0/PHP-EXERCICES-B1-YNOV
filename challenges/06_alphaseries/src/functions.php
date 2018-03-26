<?php

    function getShows()
    {
        $json = file_get_contents(__DIR__.'/../data/shows.json');
        $Shows = json_decode($json, true);
        return $Shows;
    }

    function RandomSeries(array $Shows)
    {
        return $Shows[array_rand($Shows, 1)];
    }

    function Popularity($Shows)
    {
        $PlusPopulaire = 0;
        foreach ($Shows as $value)
        {
            if ($Shows[$value]["statistics"]["popularity"] > $PlusPopulaire)
            {
                $PlusPopulaire = $Shows[$value]["statistics"]["popularity"];
            }
        }
        return $PlusPopulaire;
    }


    // function ChercheNomPlusPopulaire()

?>

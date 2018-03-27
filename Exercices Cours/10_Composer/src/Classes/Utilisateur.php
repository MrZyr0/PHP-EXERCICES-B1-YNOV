<?php

namespace Classes;

class Utilisateur
{
    protected $nom;
    protected $prenom;
    protected $age;
    protected $tel;

    public function __construct(string $nom, string $prenom, int $age, string $tel)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->tel = $tel;
    }

    public function __toString()
    {
        return $this->nom;
    }

    public function Anniversaire()
    {
        $this->age++;
    }

    public function AffInfos()
    {
        return $this->prenom . " " . $this->nom . ", " . $this->age . ", " . $this->tel;
    }
}
?>

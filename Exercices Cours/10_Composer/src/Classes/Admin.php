<?php

namespace Classes;

class Admin extends Utilisateur
{
    protected $Admin;

    public function __construct(string $nom, string $prenom, int $age, string $tel, $Droits)
    {
        parent::__construct($nom, $prenom, $age, $tel);
        $this->Admin = $Droits;
    }

    public function Elevation(bool $Droits)
    {
        if ($Droits === true)
        {
            $this->Admin = true;
        }
        return $this->Admin;
    }
}


?>

<?php

class SQL
{
    private $Objet = null;
    protected $connexion;
    protected $statement;

    function __construct()
    {
        $dsn = 'mysql:dbname=shopping_list;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $this->connexion = new PDO($dsn, $user, $password);
    }

    public static function GetInstance()
    {
        if ($this->Objet == null)
        {
            $this->Objet = new SQL();
        }
        return $this->Objet;
    }

    public function Requette(string $Requette)
    {
        $this->statement = $this->connexion->prepare($Requette);

        $this->statement->execute();

        return $this->statement->fetchAll();
    }

}

?>

<?php

require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$res = $client->request('GET', 'https://www.tentacode.net');

$Admin1 = new \Classes\Admin('SEIXAS', 'Julien', 18, '0760109993', true);

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        Status Code : <?= $res->getStatusCode() ?><br />
        Utilisateur : <?= $Admin1->AffInfos() ?><br />
        Body :
        <pre>
            <?= htmlspecialchars($res->getBody()); ?>
        </pre>
    </body>
</html>

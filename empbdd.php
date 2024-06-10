<?php
require_once ('connexiondb.php');

$result = $cnx->query('select service, ville from serv');

while ($data = $result->fetch()) {
    echo $data['service']." ";
    echo $data['ville']."<br>";
}

?>
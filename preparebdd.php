<?php
require_once ('connexiondb.php');

$requete = $cnx->prepare('select * from serv');
$requete->execute(array());

echo "<table border=2 bgcolor='lightblue' width = 50%>";
echo "<tr>
        <th>Numéro</th>
        <th>Service</th>
        <th>Ville</th>
    </tr>";

while ($data = $requete->fetch()) {
    echo"<tr>";
        echo"<td>".$data['noserv']."</td>";
        echo"<td>".$data['service']."</td>";
        echo"<td>".$data['ville']."</td>";
    echo"</tr>";
}
echo"</table>";
?>


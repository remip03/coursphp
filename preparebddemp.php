<?php
require_once ('connexiondb.php');

$requete = $cnx->prepare('select * from emp');
$requete->execute(array());

echo "<table border=2 bgcolor='lightblue' width = 50%>";
echo "<tr>
        <th>Numéro employé</th>
        <th>nom</th>
        <th>prenom</th>
        <th>emploi</th>
        <th>sup</th>
        <th>embauche</th>
        <th>sal</th>
        <th>comm</th>
        <th>noserv</th>
    </tr>";

while ($data = $requete->fetch()) {
    echo"<tr>";
        echo"<td>".$data['noemp']."</td>";
        echo"<td>".$data['nom']."</td>";
        echo"<td>".$data['prenom']."</td>";
        echo"<td>".$data['emploi']."</td>";
        echo"<td>".$data['sup']."</td>";
        echo"<td>".$data['embauche']."</td>";
        echo"<td>".$data['sal']."</td>";
        echo"<td>".$data['comm']."</td>";
        echo"<td>".$data['noserv']."</td>";
    echo"</tr>";
}
echo"</table>";
?>
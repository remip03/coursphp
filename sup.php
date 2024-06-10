<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>supprimer un service</title>
    <link rel="stylesheet" href="evalhtmlcssjs_register_remiPlateau.css">
</head>

<?php
require_once('connexiondb.php');

if(isset($_POST['service'])){
    $service = $_POST['service'];
    $requete = $cnx->prepare('DELETE FROM serv WHERE service = ?');
    $requete->execute(array($service));
    header('location: preparebdd.php');
}
?>

<body>
<form action = "sup.php" method = "POST">
    <div class="colonnecentre">
        <label>Quel service faut-il supprimer pour faire des économies ?</label>
        <input type="text" name="service" maxlength="50" size="55" placeholder="Service à supprimer">
        <button>Confirmer</button>
    </div>
</form>
</body>


</html>
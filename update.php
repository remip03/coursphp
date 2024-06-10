<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update de la ville</title>
    <link rel="stylesheet" href="evalhtmlcssjs_register_remiPlateau.css">
</head>

<?php
require_once('connexiondb.php');

if (isset($_POST['service']) && isset($_POST['ville'])){
    $service = $_POST['service'];
    $ville = $_POST['ville'];
    $requete = $cnx->prepare('UPDATE serv SET ville = ? WHERE service = ?');
    $requete->execute(array($ville, $service));
    header('location: preparebdd.php');
}

if (isset($_POST['aservice']) && isset($_POST['nservice'])){
    $aservice = $_POST['aservice'];
    $nservice = $_POST['nservice'];
    $requete = $cnx->prepare('UPDATE serv SET service = ? WHERE service = ?');
    $requete->execute(array($nservice, $aservice));
    header('location: preparebdd.php');
}

?>

<body>
<form action = "update.php" method = "POST">
    <div  class="colonnecentre marge">
        <label>Quelle service a été déplacé ? (en majuscule) : </label>
            <input type='text' name='service' maxlength='50' size = '50' placeholder='quelle service ?'>
        <label>Dans quelle ville ? : </label>
            <input type='text' name='ville' maxlength='50' size = '50' placeholder='nouvelle ville ?'>
    </div>

    <div  class="colonnecentre marge">
        <label>Quelle service faut-il modifier ? (en majuscule) : </label>
            <input type='text' name='aservice' maxlength='50' size = '50' placeholder='ancien nom'>
        <label>Quelle est le nouveau nom ? (en majuscule) : </label>
            <input type='text' name='nservice' maxlength='50' size = '50' placeholder='nouveau nom'>
        <input type = 'submit'>
    </div>

</form>

</body>

</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php récup EMP</title>
    <link rel="stylesheet" href="evalhtmlcssjs_register_remiPlateau.css">
</head>

<?php
require_once ('connexiondb.php');

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['emploi']) && isset($_POST['embauche']) && isset($_POST['salaire']) && isset($_POST['comm']) && isset($_POST['noserv'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $emploi = $_POST['emploi'];
    $embauche = $_POST['embauche'];
    $salaire = $_POST['salaire'];
    $comm = $_POST['comm'];
    $noserv = $_POST['noserv'];
    $requete = $cnx->prepare('INSERT INTO emp(nom, prenom, emploi, embauche, sal, comm, noserv) VALUES(?,?,?,?,?,?,?)');
    $requete->execute(array($nom,$prenom,$emploi,$embauche,$salaire,$comm,$noserv));
    header('location: preparebddemp.php');
}

?>

<body>
<form action = "addemp.php" method = "POST">
    <div class="colonnecentre marge">
        <label>nom  : </label>
            <input type='text' name='nom' maxlength='50' size = '50' placeholder='nom'>
        <label>prénom : </label>
            <input type='text' name='prenom' maxlength='50' size = '50' placeholder='prenom'>
        <label>emploi : </label>
            <input type='text' name='emploi' maxlength='50' size = '50' placeholder='emploi'>
        <label>date d'embauche : </label>
            <input type='date' name='embauche' maxlength='50' size = '50' placeholder='embauche'>
        <label>salaire : </label>
            <input type='number' name='salaire' maxlength='50' size = '50' placeholder='salaire'>
        <label>commission : </label>
            <input type='number' name='comm' maxlength='50' size = '50' placeholder='commission'>
        <label>numero de service : </label>
            <input type='number' name='noserv' maxlength='50' size = '50' placeholder='numero de service'>

        <input type = 'submit'>
    </div>

</form>
</body>

</html>
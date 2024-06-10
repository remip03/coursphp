<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php récup</title>
    <link rel="stylesheet" href="evalhtmlcssjs_register_remiPlateau.css">
</head>

     <!-- début php -->
<?php
require_once ('connexiondb.php');
      //verification du formulaire
if (isset($_POST['service']) && isset($_POST['ville'])){
       //récupération des champs de saisie
    $service = $_POST['service'];
    $ville = $_POST['ville'];
       //requête d'ajout service et ville en bdd avec le prepare + la co à la bdd
    $requete = $cnx->prepare('INSERT INTO serv(service, ville) VALUES(?,?)');
    $requete->execute(array($service,$ville));
       //revenir vers notre tableau de services
    header('location: preparebdd.php');
}
?>

     <!-- début body -->
<body>
<form action = "add.php" method = "POST">
    <div  class="colonnecentre">
        <label>service : </label>
            <input type='text' name='service' maxlength='50' size = '50' placeholder='quelle service ?'>
        <label>ville : </label>
            <input type='text' name='ville' maxlength='50' size = '50' placeholder='quelle ville ?'>
        <input type = 'submit'>
    </div>

</form>
</body>

</html>


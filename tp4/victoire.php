<!DOCTYPE html>
<?php
    ini_set (' display_errors ', '1'); 
    error_reporting (E_ALL );
    $nom = $_POST['nom'];
    $essai = $_POST['tentative'];
    $myst = $_POST['nb_myst'];
    $nombre = $_POST['nombre'];
    ?>
<html lang="fr" >
<head>
  <meta charset="UTF-8">
  <title>Mystery</title>
</head>


<body>
    <h1>Vous êtes le meilleur <?php echo $prenom;?> ! Le chiffre à trouver était bien <?php echo $nombre;?>.</h1>
    <p>Vous avez effectué <?php echo $essai; ?> tentatives.</p>
    <form action="./mysterySuivi.php" method="post">
       <input type="hidden" name="nom" value="<?php echo $nom;?>">
       <input type="hidden" name="prenom" value="<?php echo $prenom;?>">
        <input type="hidden" name="nb_myst" value="<?php 
                                                   if (!isset($myst)) {
                                                        $myst = rand(1,100);
                                                    }
                                                   echo $myst;?>">
        <input type="hidden" name="tentative" value="0">
        <p><input type="submit" value="Jouer" /></p>
    </form>
</body>
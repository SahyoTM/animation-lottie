<!DOCTYPE html>
<html lang="fr" >
<head>
  <meta charset="UTF-8">
  <title>Mystery</title>
</head>


<body>
    <h1>Connexion</h1>
    <form action="./mysterySuivi.php" method="post">
        <p><label for="no">Nom :</label><input type="text" name="nom" id="no"></p>
        <p><label for="pre">Prenom :</label><input type="text" name="prenom" id="pre"></p>
        <input type="hidden" name="nb_myst" value="<?php 
                                                   if (!isset($myst)) {
                                                        $myst = rand(1,100);
                                                    }
                                                   echo $myst;?>">
        <input type="hidden" name="tentative" value="0">
        <p><input type="submit" value="Envoyer" /></p>
    </form>
</body>
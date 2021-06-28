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
    <form action="./mysterySuivi.php" method="post">
    <?php  
    if (!isset($nombre)) 
    {
        echo '<h1>Jeu du nombre mystère</h1>';
    }
        
    else if ($nombre < $myst) {
        echo '<h1>Jeu du nombre mystère</h1>';
        echo '<p style="color :red; font-size : 2em;">'.$nombre.' est plus petit que le nombre mystère.</p>';
    }
        
    else if ($nombre > $myst) {
        echo '<h1>Jeu du nombre mystère</h1>';
        echo '<p style="color :red; font-size : 2em;">'.$nombre.' est plus grand que le nombre mystère.</p>';
    }
        
    else if ($nombre = $myst) {
        echo '<script type="text/javascript">
        window.location.replace("./victoire.php");
        ;</script>';
        unset($myst);
    }
        
        if ($essai <= 1) {
            echo '<p>(Nombre de tentative effectuée : '.$essai.')</p>';

        }

        else {
            echo '<p>(Nombre de tentatives effectuées : '.$essai.')</p>'; 
        }


            $essai = $essai + 1;
            echo '<p>Tentez votre chance : (nombre entre 1 et 100)</p>
            <p><label for="ch">Nombre : </label><input type="number" min="1" max="100" name="nombre" id="ch"></p>
            <input type="hidden" name="nom" value="'.$nom.'">
            <input type="hidden" name="tentative" value="'.$essai.'">
            <input type="hidden" name="nb_myst" value="'.$myst.'">

            <p><input type="submit" value="Jouer" /></p>';


    ?>
    </form>
</body>
<?php 
    ini_set (' display_errors ', '1'); 
    error_reporting (E_ALL );
    $prenom = $_POST['prenom'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="input.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="anim-beer"></div>
    <?php
        echo '<h1>Tu es invité à la prochaine soirée, '.$prenom.' !<h1>';
    ?>


    <script src="../lottie.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.5.0.slim.min.js"
  integrity="sha256-MlusDLJIP1GRgLrOflUQtshyP0TwT/RHXsI1wWGnQhs="
  crossorigin="anonymous"></script>
    <script src="beer.js"></script>
</body>
</html>
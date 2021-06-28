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
    <h1>FORMULAIRE DE TEST</h1>
    <h2>Les champs marqués d'un (<span>*</span>) sont requis.</h2>

    <form  method="POST" action="result.php">
        <div class="inputtest">
            <label for id="na">Nom :</label>
            <input type="text" name="nom" id="na">
        </div>

        <div class="inputtest">
            <label for id="pr">Prénom (<span>*</span>)  :</label>
            <input type="text" name="prenom" id="pr" required="required">
        </div>

        <div class="inputtest"></div>
            <label for id="em">Mail (<span>*</span>)  :</label>
            <div class="input-container">
                <div id="anim-input"></div>
                <input type="email" name="" id="em" class="input-email" required="required">
            </div>
        </div>
        
        <div class="inputtest"></div>
            <label for id="vm">Vérification Mail (<span>*</span>)  :</label>
            <div class="input-container">
                <div id="anim-vm"></div>
                <input type="email" name="" id="vm" class="input-vm" required="required">
            </div>
        </div>
        
        <div id="inputtest">
            <input type="submit" value="Envoyez">
        </div>
    </form>

    <script src="../lottie.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.5.0.slim.min.js"
  integrity="sha256-MlusDLJIP1GRgLrOflUQtshyP0TwT/RHXsI1wWGnQhs="
  crossorigin="anonymous"></script>
    <script src="input.js"></script>
</body>
</html>
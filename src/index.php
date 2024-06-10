<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="JS/script.js" defer></script>
    <!-- <link rel="stylesheet" href="CSS/style.css"> COMMENTÉPARCE QUE TAILWIND LE RECUPERE AUTOMATIQUEMENT-->
    <link rel="stylesheet" href="CSS/output.css">

    <title>InfiniTea</title>
</head>

<body>
<h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>

    <header>
        <?php include 'elements/header.php';?>
    </header>
    <?php
        include 'pages/accueil.php';

        
   
    ?>


</body>

</html>
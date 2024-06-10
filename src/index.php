<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="JS/script.js" defer></script>
    <link rel="stylesheet" href="CSS/style.css">

    <title>InfiniTea</title>
</head>

<body>
    <h1>InfiniTea</h1>
    <?php

    // CONNEXION A LA BDD
require_once("elements/open_bdd.php");

        include 'highlights.php';
        include 'thé_noir.php';
        include 'thé_vert.php';
        include 'thé_blanc.php';
        include 'thé_oolong.php';
        include 'thé_rooibos.php';
        include 'thé_infusions.php';
        include 'products_accessoires.php';
        include 'products_coffrets.php';

//FERMETURE DE LA CONNEXION
require_once("elements/close_bdd.php");        
    ?>


</body>

</html>
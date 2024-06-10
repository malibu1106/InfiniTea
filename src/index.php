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
    <header>
        <?php include 'elements/nav.php';?>
    </header>
    <h1>InfiniTea</h1>
    <?php


        include 'pages/products.php';
   
    ?>


</body>

</html>
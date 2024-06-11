<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="JS/script.js" defer></script>
    <!-- <link rel="stylesheet" href="CSS/style.css"> COMMENTÉ PARCE QUE TAILWIND LE RECUPERE AUTOMATIQUEMENT-->
    <link rel="stylesheet" href="CSS/output.css">

    <title>InfiniTea</title>
</head>

<body>
    <div id="debug">
        <?php print_r($_SESSION);?>
    </div>
    <header>
        <?php
        if(!isset($_SESSION['admin'])){
        include 'elements/header.php';}
        ?>
    </header>
    <div id="main">
    <?php
    if(isset($_GET['page']) && $_GET['page'] === "edit_product" ){
        include 'pages/edit_product.php';
    }

    elseif(isset($_GET['page']) && $_GET['page'] === "product_list" ){
        include 'pages/product_list.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] === "connexion" ){
        include 'pages/connexion.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] === "inscription" ){
        include 'pages/inscription.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] === "logout" ){
        include 'pages/logout.php';
    }
    else{
        include 'pages/accueil.php';
    }

    
   
        

        
   
    ?> 

</div>

<?php
        if(!isset($_SESSION['admin'])){
        include 'elements/footer.php';}
        ?>

   
 

</body>

</html>
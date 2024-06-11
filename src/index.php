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
    <header>
        <?php include 'elements/header.php';?>
    </header>

    <?php
    if(isset($_GET['page']) && $_GET['page'] === "edit_product" ){
        include 'pages/edit_product.php';
    }

    elseif(isset($_GET['page']) && $_GET['page'] === "product_list" ){
        include 'pages/product_list.php';
    }
    else{
        include 'pages/accueil.php';
    }

    
   
        

        
   
    ?> 

<?php include 'pages/connexion.php' ;?>
<?php include 'pages/inscription.php' ;?>

<!-- <?php include 'elements/footer.php';?> -->

   
 

</body>

</html>
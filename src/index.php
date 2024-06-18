<?php session_start(); 
if (isset($_SESSION['message'])){
    echo $_SESSION['message'];
    $_SESSION['message'] ="<div id='alert_message'></div>";        
}
else{
    $_SESSION['message'] ="<div id='alert_message'></div>";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="JS/script.js" defer></script>
    <!-- <link rel="stylesheet" href="CSS/style.css"> COMMENTÉ PARCE QUE TAILWIND LE RECUPERE AUTOMATIQUEMENT-->
    <link rel="stylesheet" href="CSS/output.css">
    <link rel="preload" href="Arsenal-Regular.woff2" as="font" type="font/woff2" crossorigin>

    <title>InfiniTea</title>
</head>

<body>
    <div id="profilAndCart">
        <?php if(isset($_SESSION['user_id']) && ((!isset($_GET['page']) || $_GET['page'] !== "profil"))){
            echo '<a href="index.php?page=profil"><svg class="w-[40px] h-[40px] text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="#93455f" stroke-width="1.8" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
</svg></a>';}?>
<?php if(!isset($_GET['page']) || ($_GET['page'] !== "cart")){
echo '<a href="index.php?page=cart#main"><svg class="w-[40px] h-[40px] text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="#93455f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
</svg></a>';}?>
    
    




    </div>    
        <?php
        
        include 'elements/header.php';
        ?>
    
    <div id="main">
    <?php
    if(isset($_GET['page']) && ($_GET['page'] === "edit_product") && !empty($_SESSION['admin'])){

        include 'pages/edit_product.php';
    }
    elseif(isset($_GET['page']) && ($_GET['page'] === "add_product") && !empty($_SESSION['admin'])){

        include 'pages/add_product.php';
    }
    elseif(isset($_GET['page']) && ($_GET['page'] === "categories_control") && !empty($_SESSION['admin'])){

        include 'pages/categories_control.php';
    }
    elseif(isset($_GET['page']) && ($_GET['page'] === "control_panel") && !empty($_SESSION['admin'])){

        include 'pages/control_panel.php';
    }

    elseif(isset($_GET['page']) && ($_GET['page'] === "product_list") && !empty($_SESSION['admin'])){

        include 'pages/product_list.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] === "connexion" ){
        include 'pages/connexion.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] === "coffrets" ){
        include 'pages/coffrets_grid.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] === "accessoires" ){
        include 'pages/accessoires_grid.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] === "cart" ){
        include 'pages/cart.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] === "paiement" ){
        include 'pages/paiement.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] === "commandes" ){
        include 'pages/commandes.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] === "product" ){
        if($_GET['cat'] === "the"){
            include 'elements/produit_the.php';
        }

    }
    elseif(isset($_GET['page']) && $_GET['page'] === "inscription" ){
        include 'pages/inscription.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] === "logout" ){
        include 'pages/logout.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] === "profil" ){
        include 'pages/profil.php';
    }
    elseif(isset($_SESSION['admin']) && ($_SESSION['admin'] === "full") && isset($_GET['page']) && $_GET['page'] === "user_control" ){
        include 'pages/user_control.php'; 
    }

    
    else{
        include 'pages/accueil.php';
    }

    
   
        

        
   
    ?> 

</div>





<?php
if(empty($_SESSION['admin'])){        
        include 'elements/footer.php';}?>

   
 

</body>

</html>
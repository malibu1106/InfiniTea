<?php session_start(); 
if (isset($_SESSION['message'])){
    echo $_SESSION['message'];
    $_SESSION['message'] ="<div id='alert_message'></div>";        
}
else{
    $_SESSION['message'] ="<div id='alert_message'></div>";
}?>
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
    elseif(isset($_GET['page']) && $_GET['page'] === "inscription" ){
        include 'pages/inscription.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] === "logout" ){
        include 'pages/logout.php';
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
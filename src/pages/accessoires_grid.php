<?php
require_once("elements/open_bdd.php");
// REQUETE AVEC CE QU'IL NOUS FAUT A STOCKER EN $_SESSION SI BESOIN 
$sql = "SELECT * FROM products WHERE category = 'accessoires'";

// PREPARATION DE LA REQUETE
$query = $db->prepare($sql);

//EXECUTION DE LA REQUETE + STOCK DES DONNEES DANS LA VARIABLE
$query->execute();
$coffrets = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="p-1 flex flex-col items-center justify-center">
    <h3>Tout pour un tea time dans votre univers</h3>
<div class="p-1 flex flex-wrap items-center justify-center">

<?php
    foreach ($coffrets as $coffret){
        
        
        echo'<a href="../index.php?page=product&cat=accessoire&id=' . $coffret['id'] . '#main">
        

    <div class="flex-shrink-0 m-6 relative overflow-hidden  rounded-lg max-w-xs shadow-lg">
        <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
            style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
        </svg>
        <div class="relative pt-10 px-10 flex items-center justify-center">
            
            <img class="relative w-40" src="' . $coffret['image_filename'] . '" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
            <div class="flex justify-between">
                <span class="block font-semibold text-xl">' . $coffret['name'] . '</span>
                <span class="block rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">' . $coffret['price'] . ' €</span>
            </div>
        </div>
    </div></a>';}?>



    <!-- <div class="flex-shrink-0 m-6 relative overflow-hidden  rounded-lg max-w-xs shadow-lg">
        <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
            style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
        </svg>
        <div class="relative pt-10 px-10 flex items-center justify-center">
            
            <img class="relative w-40" src="./images/selection/theiere_vert.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
            <div class="flex justify-between">
                <span class="block font-semibold text-xl">Nom produit</span>
                <span class="block rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">X €</span>
            </div>
        </div>
    </div>     <div class="flex-shrink-0 m-6 relative overflow-hidden  rounded-lg max-w-xs shadow-lg">
        <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
            style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
        </svg>
        <div class="relative pt-10 px-10 flex items-center justify-center">
            
            <img class="relative w-40" src="./images/selection/theiere_vert.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
            <div class="flex justify-between">
                <span class="block font-semibold text-xl">Nom produit</span>
                <span class="block rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">X €</span>
            </div>
        </div>
    </div> 
    <div class="flex-shrink-0 m-6 relative overflow-hidden  rounded-lg max-w-xs shadow-lg">
        <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
            style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
        </svg>
        <div class="relative pt-10 px-10 flex items-center justify-center">
            
            <img class="relative w-40" src="./images/selection/theiere_vert.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
            <div class="flex justify-between">
                <span class="block font-semibold text-xl">Nom produit</span>
                <span class="block rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">X €</span>
            </div>
        </div>
    </div> -->
    </div></div>
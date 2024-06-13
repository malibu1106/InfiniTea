<?php
// REQUETE AVEC CE QU'IL NOUS FAUT A STOCKER EN $_SESSION SI BESOIN 
$sql = "SELECT * FROM products WHERE category = 'thé noir'";

// PREPARATION DE LA REQUETE
$query = $db->prepare($sql);

//EXECUTION DE LA REQUETE + STOCK DES DONNEES DANS LA VARIABLE
$query->execute();
$thes_noir = $query->fetchAll(PDO::FETCH_ASSOC);

// THE NOIR
if($thes_noir){
    // echo "Affichage thé noir";
 foreach ($thes_noir as $the_noir){
    //  echo '<pre>';
    //     print_r($the_noir);
        // echo '</pre>';
     }
}
else{
    // echo "Aucun thé noir";
}
?>

<div id="noir2"><div class="flex flex-wrap gap-8 justify-center items-center">
<div class="w-full sm:w-1/2 md:w-80 lg:w-80 xl:w-80 min-w-20  mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Éclipse</h3>
    <img src="../images/feuilles/feuilles_noir.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
    <p class="h-7 text-center mb-4">Notes de cacao et de vanille</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-80 lg:w-80 xl:w-80 min-w-20  mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Voie Lactée</h3>
    <img src="../images/feuilles/feuilles_noir.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
    <p class="h-7 text-center mb-4">Touches de noix de coco et d'amande</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-80 lg:w-80 xl:w-80 min-w-20  mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Supernova</h3>
    <img src="../images/feuilles/feuilles_noir.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
    <p class="h-7 text-center mb-4">Arômes canelle et de zestes d'orange</p>
      </div>
      <div class="w-full sm:w-1/2 md:w-80 lg:w-80 xl:w-80 min-w-20  mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Nébuleuse</h3>
    <img src="../images/feuilles/feuilles_noir.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
    <p class="h-7 text-center mb-4">Touches de lavande et de bleuet</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-80 lg:w-80 xl:w-80 min-w-20  mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Galaxie</h3>
    <img src="../images/feuilles/feuilles_noir.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
    <p class="h-7 text-center mb-4">Notes de jasmin et pêche blanche</p>
  </div>
</div></div>
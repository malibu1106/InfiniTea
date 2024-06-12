<?php
// REQUETE AVEC CE QU'IL NOUS FAUT A STOCKER EN $_SESSION SI BESOIN 
$sql = "SELECT * FROM products WHERE category = 'thé vert'";

// PREPARATION DE LA REQUETE
$query = $db->prepare($sql);

//EXECUTION DE LA REQUETE + STOCK DES DONNEES DANS LA VARIABLE
$query->execute();
$thes_vert = $query->fetchAll(PDO::FETCH_ASSOC);

// THE NOIR
if($thes_vert){
    echo "Affichage thé vert";
    foreach ($thes_vert as $the_vert){
        echo '<pre>';
        print_r($the_vert);
        echo '</pre>';
    }
}
else{
    echo "Aucun thé vert";
}
?>

<div id="vert2"><div class="flex flex-wrap gap-8 justify-center items-center">
<div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
      <h3>Deneb</h3>
      <img src="../images/feuilles/feuilles_vert.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">  
      <p class="h-7 text-center mb-4">Notes de menthe poivrée et d'agrumes</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
  <h3>Comète</h3>
  <img src="../images/feuilles/feuilles_vert.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">  
  <p class="h-7 text-center mb-4">Touches de jasmin et d'ananas</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Cygnus</h3>
    <img src="../images/feuilles/feuilles_vert.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">  
    <p class="h-7 text-center mb-4">Arômes de gingembre et de citronelle</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Aurora Boréalis</h3>
    <img src="../images/feuilles/feuilles_vert.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">  
    <p class="h-7 text-center mb-4">Touches de yuzu et de fleurs de cerisier</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Pluton</h3>
    <img src="../images/feuilles/feuilles_vert.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">  
    <p class="h-7 text-center mb-4">Notes de pomme et de cranberry</p>
  </div>
</div></div>
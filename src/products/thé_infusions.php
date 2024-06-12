<?php
// REQUETE AVEC CE QU'IL NOUS FAUT A STOCKER EN $_SESSION SI BESOIN 
$sql = "SELECT * FROM products WHERE category = 'infusions'";

// PREPARATION DE LA REQUETE
$query = $db->prepare($sql);

//EXECUTION DE LA REQUETE + STOCK DES DONNEES DANS LA VARIABLE
$query->execute();
$infusions = $query->fetchAll(PDO::FETCH_ASSOC);

// THE NOIR
if($infusions){
    echo "Affichage infusions";
    foreach ($infusions as $infusion){
        // echo '<pre>';
        // print_r($infusion);
        // echo '</pre>';
    }
}
else{
    // echo "Aucune infusion";
}
?>

<div id="infusions2"><div class="flex flex-wrap gap-8 justify-center items-center">
<div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
      <h3>Encelade</h3>
      <img src="../images/feuilles/feuilles_infusions.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
      <p class="h-7 text-center mb-4">Notes de camomille et de menthe</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
  <h3>Ganymède</h3>
  <img src="../images/feuilles/feuilles_infusions.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
  <p class="h-7 text-center mb-4">Touches de sauge et de romarin</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Dione</h3>
    <img src="../images/feuilles/feuilles_infusions.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
    <p class="h-7 text-center mb-4">Arômes d'échinacée et de réglisse</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Mercure</h3>
    <img src="../images/feuilles/feuilles_infusions.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
    <p class="h-7 text-center mb-4">Touches de menthe et de fenouil</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Sedna</h3>
    <img src="../images/feuilles/feuilles_infusions.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
    <p class="h-7 text-center mb-4">Notes de mélisse et d'orties</p>
  </div>
</div></div>
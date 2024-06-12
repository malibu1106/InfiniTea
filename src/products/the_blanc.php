<?php
// REQUETE AVEC CE QU'IL NOUS FAUT A STOCKER EN $_SESSION SI BESOIN 
$sql = "SELECT * FROM products";

// PREPARATION DE LA REQUETE
$query = $db->prepare($sql);

//EXECUTION DE LA REQUETE + STOCK DES DONNEES DANS LA VARIABLE
$query->execute();
$thes_blanc = $query->fetchAll(PDO::FETCH_ASSOC);

// THE NOIR
if($thes_blanc){
    echo "Affichage thé blanc";
    foreach ($thes_blanc as $the_blanc){
        echo '<pre>';
        // print_r($the_blanc);
        echo '</pre>';
    }
}
else{
    echo "Aucun thé blanc";
}
?>

<div id="blanc2"><div class="flex flex-wrap gap-8 justify-center items-center">
<div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Mimas</h3>
    <img src="../images/feuilles/feuilles_blanc.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
    <p class="h-7 text-center mb-4">Notes de poire et de fleur de sureau</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Vesper</h3>
    <img src="../images/feuilles/feuilles_blanc.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
    <p class="h-7 text-center mb-4">Touches de pamplemousse et jasmin</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Saturne</h3>
    <img src="../images/feuilles/feuilles_blanc.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
    <p class="h-7 text-center mb-4">Arômes de vanille et de lavande</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Météor</h3>
    <img src="../images/feuilles/feuilles_blanc.png" alt="thé blanc Météor" class="w-1/4 h-1/4 mb-2">
    <p class="h-7 text-center mb-4">Touches de citron et de miel</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Thétys</h3>
    <img src="../images/feuilles/feuilles_blanc.png" alt="thé blanc Thétys" class="w-1/4 h-1/4 mb-2">
    <p class="h-7 text-center mb-4">Notes de litchi et de rose</p>
  </div>
</div></div>
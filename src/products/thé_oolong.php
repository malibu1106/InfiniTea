<?php
// REQUETE AVEC CE QU'IL NOUS FAUT A STOCKER EN $_SESSION SI BESOIN 
$sql = "SELECT * FROM products WHERE category = 'thé oolong'";

// PREPARATION DE LA REQUETE
$query = $db->prepare($sql);

//EXECUTION DE LA REQUETE + STOCK DES DONNEES DANS LA VARIABLE
$query->execute();
$thes_oolong = $query->fetchAll(PDO::FETCH_ASSOC);

// THE NOIR
if($thes_oolong){
    echo "Affichage thé oolong";
    foreach ($thes_oolong as $the_oolong){
        // echo '<pre>';
        // print_r($the_oolong);
        // echo '</pre>';
    }
}
else{
    // echo "Aucun thé oolong";
}
?>

<div id="oolong2" class="categoryDiv"><div class="flex flex-wrap gap-8 justify-center items-center">
<div class="w-full sm:w-1/2 md:w-80 lg:w-80 xl:w-80 min-w-20  mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Neptune</h3>
    <img src="../images/feuilles/feuilles_oolong.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
    <p class="h-7 text-center mb-4">Notes de jasmin et d'orchidée</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-80 lg:w-80 xl:w-80 min-w-20  mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Pandore</h3>
    <img src="../images/feuilles/feuilles_oolong.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2"> 
    <p class="h-7 text-center mb-4">Touches de noisette et de caramel</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-80 lg:w-80 xl:w-80 min-w-20  mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Proxima centuri</h3>
    <img src="../images/feuilles/feuilles_oolong.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
    <p class="h-7 text-center mb-4">Arômes de pêche et d'abricot</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-80 lg:w-80 xl:w-80 min-w-20  mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">    
    <h3>Eris</h3>
    <img src="../images/feuilles/feuilles_oolong.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
    <p class="h-7 text-center mb-4">Touches de poire et de fleur d'oranger</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-80 lg:w-80 xl:w-80 min-w-20  mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Cérès</h3>
    <img src="../images/feuilles/feuilles_oolong.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
    <p class="h-7 text-center mb-4">Notes de citronelle et de gingembre</p>
  </div>
</div>
<?php include 'elements/fleche_remonter.html'?>
</div>
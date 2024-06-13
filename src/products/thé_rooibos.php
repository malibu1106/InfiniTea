<?php
// REQUETE AVEC CE QU'IL NOUS FAUT A STOCKER EN $_SESSION SI BESOIN 
$sql = "SELECT * FROM products WHERE category = 'rooibos'";

// PREPARATION DE LA REQUETE
$query = $db->prepare($sql);

//EXECUTION DE LA REQUETE + STOCK DES DONNEES DANS LA VARIABLE
$query->execute();
$thes_rooibos = $query->fetchAll(PDO::FETCH_ASSOC);

// THE NOIR
if($thes_rooibos){
    // echo "Affichage thé rooibos";
    foreach ($thes_rooibos as $the_rooibos){
        // echo '<pre>';
        // print_r($the_rooibos);
        // echo '</pre>';
    }
}
else{
    // echo "Aucun thé rooibos";
}
?>

<div id="rooibos2" class="categoryDiv"><div class="flex flex-wrap gap-8 justify-center items-center">
<div class="w-full sm:w-1/2 md:w-80 lg:w-80 xl:w-80 min-w-20  mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
      <h3>Mars</h3>
      <img src="../images/feuilles/feuilles_rooibos.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
      <p class="h-7 text-center mb-4">Notes de vanille et d'orange sanguine</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-80 lg:w-80 xl:w-80 min-w-20  mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
  <h3>Tempête solaire</h3>
  <img src="../images/feuilles/feuilles_rooibos.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
  <p class="h-7 text-center mb-4">Touches de gingembre et de canelle</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-80 lg:w-80 xl:w-80 min-w-20  mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Crépuscule</h3>
    <img src="../images/feuilles/feuilles_rooibos.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
    <p class="h-7 text-center mb-4">Arômes d'hibiscus et de baies de sureau</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-80 lg:w-80 xl:w-80 min-w-20  mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Pulsar</h3>
    <img src="../images/feuilles/feuilles_rooibos.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
    <p class="h-7 text-center mb-4">Touches d'écorces d'orange et de cardamone</p>
  </div>
  <div class="w-full sm:w-1/2 md:w-80 lg:w-80 xl:w-80 min-w-20  mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">
    <h3>Solstice</h3>
    <img src="../images/feuilles/feuilles_rooibos.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">
    <p class="h-7 text-center mb-4">Notes de baies de goji et de citronelle</p>
  </div>
</div>
<?php include 'elements/fleche_remonter.html'?>
</div>
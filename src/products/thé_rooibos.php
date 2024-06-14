<?php
// REQUETE AVEC CE QU'IL NOUS FAUT A STOCKER EN $_SESSION SI BESOIN 
$sql = "SELECT * FROM products WHERE category = 'thé rooibos'";

// PREPARATION DE LA REQUETE
$query = $db->prepare($sql);

//EXECUTION DE LA REQUETE + STOCK DES DONNEES DANS LA VARIABLE
$query->execute();
$thes_rooibos = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<div id="rooibos2" class="categoryDiv"><div class="flex flex-wrap gap-8 justify-center items-center">
<?php
    foreach ($thes_rooibos as $the_rooibos){
      echo '<a href="../index.php?page=product&id=' . $the_rooibos['id'] . '#main">';
      echo '<div class="hiddenProduct w-full sm:w-1/2 md:w-80 lg:w-80 xl:w-80 min-w-20  mb-4 flex flex-col items-center bg-stone-100 p-4 rounded-lg shadow-md">';
      echo '<h3>'.$the_rooibos['name'].'</h3>';
      echo '<img src="../images/feuilles/feuilles_rooibos.png" alt="feuilles de thé" class="w-1/4 h-1/4 mb-2">';
      echo '<p class="h-7 text-center mb-4">'.$the_rooibos['description_courte'].'</p>';
      echo '</div>';
      echo '</a>';
    }?>
</div>
<?php include 'elements/fleche_remonter.html'?>
</div>
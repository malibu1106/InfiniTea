<?php

// CONNEXION A LA BDD
require_once("elements/open_bdd.php");

// REQUETE AVEC CE QU'IL NOUS FAUT A STOCKER EN $_SESSION SI BESOIN 
$sql = "SELECT * FROM products WHERE highlight = TRUE";

// PREPARATION DE LA REQUETE
$query = $db->prepare($sql);

//EXECUTION DE LA REQUETE + STOCK DES DONNEES DANS LA VARIABLE
$query->execute();
$highlights = $query->fetchAll(PDO::FETCH_ASSOC);

//FERMETURE DE LA CONNEXION A DECOMMENTER APRES LES TESTS P-E
//require_once("elements/close_bdd.php");

// SI DES PRODUITS SONT HIGHLIGHT
if($highlights){
    echo "Affichage des highlights";
    // foreach ($highlights as $highlight){
    //     echo '<pre>';
    //     print_r($highlight);
    //     echo '</pre>';
    // }
}
else{
    echo "Aucun produit highlight";
}
?>
<?php
// REQUETE AVEC CE QU'IL NOUS FAUT A STOCKER EN $_SESSION SI BESOIN 
$sql = "SELECT * FROM products WHERE category = 'accessoires'";

// PREPARATION DE LA REQUETE
$query = $db->prepare($sql);

//EXECUTION DE LA REQUETE + STOCK DES DONNEES DANS LA VARIABLE
$query->execute();
$accessoires = $query->fetchAll(PDO::FETCH_ASSOC);

// THE NOIR
if($accessoires){
    echo "Affichage accessoire";
    foreach ($accessoires as $accessoire){
        echo '<pre>';
        print_r($accessoire);
        echo '</pre>';
    }
}
else{
    echo "Aucun accessoire";
}
?>
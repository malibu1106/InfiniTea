<?php
// REQUETE AVEC CE QU'IL NOUS FAUT A STOCKER EN $_SESSION SI BESOIN 
$sql = "SELECT * FROM products WHERE category = 'coffrets'";

// PREPARATION DE LA REQUETE
$query = $db->prepare($sql);

//EXECUTION DE LA REQUETE + STOCK DES DONNEES DANS LA VARIABLE
$query->execute();
$coffrets = $query->fetchAll(PDO::FETCH_ASSOC);

// COFFRETS
if($coffrets){
    echo "Affichage coffrets";
    foreach ($coffrets as $coffret){
        echo '<pre>';
        print_r($coffret);
        echo '</pre>';
    }
}
else{
    echo "Aucun coffret";
}
?>
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
        echo '<pre>';
        print_r($infusion);
        echo '</pre>';
    }
}
else{
    echo "Aucune infusion";
}
?>
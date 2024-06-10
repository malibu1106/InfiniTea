<?php
// REQUETE AVEC CE QU'IL NOUS FAUT A STOCKER EN $_SESSION SI BESOIN 
$sql = "SELECT * FROM products WHERE category = 'thé noir'";

// PREPARATION DE LA REQUETE
$query = $db->prepare($sql);

//EXECUTION DE LA REQUETE + STOCK DES DONNEES DANS LA VARIABLE
$query->execute();
$thes_noir = $query->fetchAll(PDO::FETCH_ASSOC);

// THE NOIR
if($thes_noir){
    echo "Affichage thé noir";
    foreach ($thes_noir as $the_noir){
        echo '<pre>';
        print_r($the_noir);
        echo '</pre>';
    }
}
else{
    echo "Aucun thé noir";
}
?>
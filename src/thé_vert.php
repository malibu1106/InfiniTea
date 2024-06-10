<?php
// REQUETE AVEC CE QU'IL NOUS FAUT A STOCKER EN $_SESSION SI BESOIN 
$sql = "SELECT * FROM products WHERE category = 'thé vert'";

// PREPARATION DE LA REQUETE
$query = $db->prepare($sql);

//EXECUTION DE LA REQUETE + STOCK DES DONNEES DANS LA VARIABLE
$query->execute();
$thes_vert = $query->fetchAll(PDO::FETCH_ASSOC);

// THE NOIR
if($thes_vert){
    echo "Affichage thé vert";
    foreach ($thes_vert as $the_vert){
        echo '<pre>';
        print_r($the_vert);
        echo '</pre>';
    }
}
else{
    echo "Aucun thé vert";
}
?>
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
        echo '<pre>';
        print_r($the_oolong);
        echo '</pre>';
    }
}
else{
    echo "Aucun thé oolong";
}
?>
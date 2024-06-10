<?php
// REQUETE AVEC CE QU'IL NOUS FAUT A STOCKER EN $_SESSION SI BESOIN 
$sql = "SELECT * FROM products WHERE category = 'thé blanc'";

// PREPARATION DE LA REQUETE
$query = $db->prepare($sql);

//EXECUTION DE LA REQUETE + STOCK DES DONNEES DANS LA VARIABLE
$query->execute();
$thes_blanc = $query->fetchAll(PDO::FETCH_ASSOC);

// THE NOIR
if($thes_blanc){
    echo "Affichage thé blanc";
    foreach ($thes_blanc as $the_blanc){
        echo '<pre>';
        print_r($the_blanc);
        echo '</pre>';
    }
}
else{
    echo "Aucun thé blanc";
}
?>
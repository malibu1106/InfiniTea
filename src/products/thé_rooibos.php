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
    echo "Affichage thé rooibos";
    foreach ($thes_rooibos as $the_rooibos){
        echo '<pre>';
        print_r($the_rooibos);
        echo '</pre>';
    }
}
else{
    echo "Aucun thé rooibos";
}
?>
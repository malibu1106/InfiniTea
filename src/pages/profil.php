<?php 
require_once ('elements/open_bdd.php');
$id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id= :id";
// PREPARATION DE LA REQUETE
$query = $db->prepare($sql);
$query->bindValue(':id', $id);
//EXECUTION DE LA REQUETE + STOCK DES DONNEES DANS LA VARIABLE
$query->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);

require_once ('elements/close_bdd.php');

// echo '<pre>';
// print_r($user);
// echo '</pre>';
?>
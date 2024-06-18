<?php
// ON DEMARRE DIRECTEMENT UNE SESSION POUR GERER LES MESSAGES A AFFICHER EN CAS DE PROBLEME
session_start();
$paid = "true";
$user_id = $_SESSION['user_id'];




require_once ('../elements/open_bdd.php');

$sql = "SELECT id FROM orders WHERE user_id = :user_id ORDER BY id DESC LIMIT 1";
$query = $db->prepare($sql);
$query->bindValue(':user_id', $user_id);
$query->execute(); // Exécute la requête
$order_id = $query->fetch(PDO::FETCH_ASSOC);



$sql ="UPDATE orders SET address = :address, paid = :paid  WHERE id =:order_id ";
$query = $db->prepare($sql);
$query->bindValue(':address', $_POST['adresse']);
$query->bindValue(':paid', $paid);
$query->bindValue(':order_id', $order_id['id']);
$query->execute(); // Exécute la requête

$_SESSION["message"] = "<div id='alert_message'>Commande validée !</div>";
        header('Location: ../index.php?page=commandes#main');
?>

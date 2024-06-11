<?php
// ON DEMARRE DIRECTEMENT UNE SESSION POUR GERER LES MESSAGES A AFFICHER EN CAS DE PROBLEME
session_start();
echo '<pre>';
print_r($_POST);
print_r($_FILES['image_filename']['name']);
echo '</pre>';

//ON VERIFIE POST + QUE LES CHAMPS NE SONT PAS VIDES ET ON RECUPERE LES VALEURS DU FORMULAIRE
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['name'])
&& !empty($_POST['category']) && !empty($_POST['description'])
&& !empty($_POST['composition']) && !empty($_POST['price'])
&& !empty($_POST['weight']) && !empty($_FILES['image_filename'])
){
    // FORMULAIRE BIEN REMPLI DONC ON GERE LES DONNEES OBLIGATOIRES
    $name = strip_tags($_POST['name']);
    $category = strip_tags($_POST['category']);
    $description = strip_tags($_POST['description']);
    $composition = strip_tags($_POST['composition']);
    $weight = strip_tags($_POST['weight']);
    $image_filename = strip_tags($_FILES['image_filename']['name']); // A VERIF POUR L'IMAGE ET SON FILENAME
    // FORMULAIRE BIEN REMPLI DONC ON GERE LES DONNEES OPTIONNELLES
    // ON INITIALISE DES VARIABLES VIDES
    $price_before_reduction = strip_tags($_POST['price_before_reduction']);
    $temperature = strip_tags($_POST['temperature']);
    $temps = strip_tags($_POST['temps']);
    $highlight = strip_tags($_POST['highlight']);

    // ET SI ELLES SONT DEFINIES DANS LE FORMULAIRE ALORS ON RECUPERE LEURS VALEURS
    if($_POST['price_before_reduction']){
        $price_before_reduction = strip_tags($_POST['price_before_reduction']);}
    if($_POST['temperature']){
        $temperature = strip_tags($_POST['temperature']);}
    if($_POST['temps']){
        $temps = strip_tags($_POST['temps']);}
    if($_POST['highlight']){
        $highlight = strip_tags($_POST['highlight']);}
    // FORMULAIRE BIEN REMPLI DONC ON GERE L'ID DE L'ADMIN CONNECTÉ
    $added_by = $_SESSION['user_id'];

     // CONNEXION A LA BDD
     require_once("../elements/open_bdd.php");

     // REQUETE
     $sql = "INSERT INTO products (name, category, description, composition, weight, image_filename, price_before_reduction, temperature, temps, highlight)
    VALUES (:name, :category, :description, :composition, :weight, :image_filename, :price_before_reduction, :temperature, :temps, :highlight)";
 
     // PREPARATION DE LA REQUETE
     $query = $db->prepare($sql);    
         $query->bindValue(':name', $name);
         $query->bindValue(':category', $category);
         $query->bindValue(':description', $description);
         $query->bindValue(':composition', $composition);
         $query->bindValue(':weight', $weight);
         $query->bindValue(':image_filename', $image_filename);
         $query->bindValue(':price_before_reduction', $price_before_reduction);
         $query->bindValue(':temperature', $temperature);
         $query->bindValue(':temps', $temps);
         $query->bindValue(':highlight', $highlight);
     
     // EXECUTION + CLOSE BDD
     $query->execute();

     $_SESSION["message"] = "<div id='alert_message'>Produit ajouté !</div>";
    require_once("../elements/close_bdd.php");
    // header('Location: ../index.php?page=back_office');
    }


else{
    $_SESSION["message"] = "<div id='alert_message'>Erreur de traitement !</div>";
    // header('Location: ../index.php?page=back_office'); // REDIRECTION, CHECK URL PLUS TARD
}



?>
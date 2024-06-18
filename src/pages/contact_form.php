<?php
// ON DEMARRE DIRECTEMENT UNE SESSION POUR GERER LES MESSAGES A AFFICHER EN CAS DE PROBLEME
session_start(); 

// Vérification de l'existence de l'ID utilisateur dans la session
if (!isset($_SESSION['user_id'])) {
    // Redirection vers la page de connexion ou une autre page appropriée
    header('Location: ../login.php');
    exit;
}

$id = $_SESSION['user_id'];

// ON VERIFIE POST + QUE LES CHAMPS OBLIGATOIRES NE SONT PAS VIDES ET ON RECUPERE LES VALEURS DU FORMULAIRE
if ($_SERVER['REQUEST_METHOD'] === 'POST' 
    && !empty($_POST['first_name']) 
    && !empty($_POST['last_name']) 
    && !empty($_POST['email']) 
    && !empty($_POST['message'])) {

    $first_name = strip_tags($_POST['first_name']);
    $last_name = strip_tags($_POST['last_name']);
    $email = strip_tags($_POST['email']);
    $message = strip_tags($_POST['message']);

    // SI LES CHAMPS OPTIONNELS SONT REMPLIS, ALORS ON RECUPERE EGALEMENT LEURS VALEURS
    if (!empty($_POST['gender'])) {
        $gender = strip_tags($_POST['gender']);
    } else {
        $gender = ""; // Valeur par défaut si non fourni
    }

    // CONNEXION A LA BDD
    require_once ('../elements/open_bdd.php');

    // PREPARATION DE LA REQUETE
    $sql = "INSERT INTO contacts (user_id, first_name, last_name, email, message, gender) 
            VALUES (:user_id, :first_name, :last_name, :email, :message, :gender)";
    $query = $db->prepare($sql);
    $query->bindValue(':user_id', $id);
    $query->bindValue(':first_name', $first_name);
    $query->bindValue(':last_name', $last_name);
    $query->bindValue(':email', $email);
    $query->bindValue(':message', $message);
    $query->bindValue(':gender', $gender);

    // EXECUTION + CLOSE BDD
    if ($query->execute()) {
        $_SESSION["message"] = "<div id='alert_message'>Message envoyé !</div>";
    } else {
        $_SESSION["message"] = "<div id='alert_message'>Erreur lors de l'envoi du message.</div>";
    }
    require_once("../elements/close_bdd.php");

    // REDIRECTION
    header('Location: ../index.php?page=profil');
    exit;
} else {
    $_SESSION["message"] = "<div id='alert_message'>Veuillez remplir tous les champs obligatoires.</div>";
    header('Location: ../index.php?page=profil');
    exit;
}
?>
<?php
// Récupération des données depuis $_POST
$data = $_POST;
$user_id = $_POST['user_id'];
$user_address = $_POST['user_address'];
$user_zipcode = $_POST['user_zipcode'];
$user_city = $_POST['user_user_city'];


// Assurez-vous que les données ont été correctement envoyées et qu'elles contiennent ce dont vous avez besoin
if (!isset($data) || empty($data)) {
    echo "Aucune donnée reçue.";
    exit;
}
echo 'Commande de l\'utilisateur ID : '.$user_id.'';
// Boucle pour traiter chaque produit
foreach ($data as $key => $value) {
    // Vérifiez si la clé commence par 'weight'
    if (strpos($key, 'weight') === 0) {
        // Extraction de l'indice numérique à partir de la clé
        $index = substr($key, 6);
        
        // Récupération des autres valeurs associées à ce produit
        $weight = $value;
        $quantity = $data['quantity' . $index];
        $productId = $data['product_id' . $index];
        $productName = $data['product_name' . $index];

        // Affichage des détails du produit dans une structure HTML
        echo '<div class="product">';
        echo '<p>Weight: ' . $weight . ' g</p>';
        echo '<p>Quantity: ' . $quantity . '</p>';
        echo '<p>Product ID: ' . $productId . '</p>';
        echo '<p>Product Name: ' . $productName . '</p>';
        echo '</div>';
    }
}
?>

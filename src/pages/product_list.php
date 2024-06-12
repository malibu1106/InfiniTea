<?php
$userid = $_SESSION['user_id'];
require_once ('elements/open_bdd.php');
if($_SESSION['admin'] === "self"){
    $sql = "SELECT id, name, category FROM products WHERE added_by = $userid";}
else{
    $sql = "SELECT id, name, category FROM products";  
}
// PREPARATION DE LA REQUETE
$query = $db->prepare($sql);
//EXECUTION DE LA REQUETE + STOCK DES DONNEES DANS LA VARIABLE
$query->execute();
$products = $query->fetchAll(PDO::FETCH_ASSOC);
require_once ('elements/close_bdd.php');
?>
<div id="liste_produit" class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b">
            <tr>
                <th scope="col" class="px-2 py-3">
                    Produit
                </th>
                <th scope="col" class="px-2 py-3">
                    Miniature
                </th>
                <th scope="col" class="px-2 py-3">
                    Catégorie
                </th>
                <th scope="col" class="px-2 py-3">
                    Action
                </th>
        
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product){
            
            echo '<tr class="odd:bg-white  even:bg-gray-50 border-b">';
                echo '<th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap ">';
                    echo $product['name'];
                echo '</th>';
                echo '<td class="px-2 py-4">';
                echo $product['category'];
                echo '</td>';
               
                echo '<td class="px-2 py-4">';
                echo '<button class="text-white font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-purple-900 hover:bg-purple-800 my-2"><a href="index.php?page=edit_product&id=' . $product['id'] . '" class="font-medium ">Editer</a></button>';
                echo '<button class="text-white font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-red-700  hover:bg-red-600 my-2"><a href="index.php?page=delete_product&id=' . $product['id'] . '" class="font-medium">Supprimer</a></button>';
                echo '</td>';
                echo '</tr>';
        }?>
            
        </tbody>
    </table>
</div>

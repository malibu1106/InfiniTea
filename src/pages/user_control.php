<?php
$userid = $_SESSION['user_id'];
require_once ('elements/open_bdd.php');
if($_SESSION['admin'] === "full"){
    $sql = "SELECT id, first_name, last_name, email, rights FROM users";}

// PREPARATION DE LA REQUETE
$query = $db->prepare($sql);
//EXECUTION DE LA REQUETE + STOCK DES DONNEES DANS LA VARIABLE
$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);
require_once ('elements/close_bdd.php');
?>
<div id="liste_produit" class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b">
            <tr>
                <th scope="col" class="px-2 py-3">
                    Prénom
                </th>
                <th scope="col" class="px-2 py-3">
                    Nom
                </th>
                <th scope="col" class="px-2 py-3">
                    Email
                </th>
                <th scope="col" class="px-2 py-3">
                    Droits
                </th>
        
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user){
                if($user['email'] !== "superuser@infinitea.com"){
            
            echo '<tr class="odd:bg-white  even:bg-gray-50 border-b">';
                echo '<th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap ">';
                    echo $user['first_name'];
                echo '</th>';
                echo '<td class="px-2 py-4">';
                echo $user['last_name'];
                echo '</td>';
                echo '<th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap ">';
                    echo $user['email'];
                echo '</th>';
                echo '<td class="px-2 py-4">';
                echo $user['rights'];
                echo '</td>';
               
                echo '<td class="px-2 py-4">';
                echo '<button class="text-white font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-purple-900 hover:bg-purple-800 my-2"><a href="index.php?page=edit_user&id=' . $user['id'] . '" class="font-medium ">Editer</a></button>';
                echo '<button class="text-white font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-red-700  hover:bg-red-600 my-2"><a href="index.php?page=delete_user&id=' . $user['id'] . '" class="font-medium">Supprimer</a></button>';
                echo '</td>';
                echo '</tr>';}
        }?>
            
        </tbody>
    </table>
</div>
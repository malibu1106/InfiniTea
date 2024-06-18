<ul class="back_office_menu">
<?php 
         if(!empty($_SESSION['admin'])){            
            echo '<a href="index.php?page=add_product#main"><li>Ajouter un produit</li></a>';
            echo '<a href="index.php?page=product_list#main"><li>Gérer mes produits</li></a>';
            echo '<a href="index.php?page=commandes_control"><li>Voir les commandes</li></a>';
            echo '<a href="index.php?page=contact_control"><li>Voir les messages</li></a>';
                if($_SESSION['admin'] === "full"){
                    echo '<a href="index.php?page=user_control"><li>Gérer les utilisateurs</li></a>';
                    echo '<a href="index.php?page=categories_control"><li>Gérer les catégories</li></a>';
                    
                }
                
            }
?>
</ul>
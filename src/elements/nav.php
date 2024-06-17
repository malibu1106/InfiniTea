<nav>
    <button id="burgerButton">☰</button>
    <ul id="burger">
        <a href="../index.php"><li>Accueil</li></a>
        <?php 
        if(empty($_SESSION['admin'])){
            echo '<a href="../index.php#main"><li>Nos Produits</li></a>';
            echo '<a href="../index.php?page=contact#main"><li>Contact</li></a>';
            
            }
            if(isset($_SESSION["user_id"])){
            echo '<a href="../pages/logout.php"><li>Déconnexion</li></a>';
        }
        else{
            echo '<a href="../index.php?page=connexion#main"><li>Connexion</li></a>';
        }
        
         if(!empty($_SESSION['admin'])){
            

                    echo '<a href="index.php?page=control_panel"><li>Gestion</li></a>';
                    
                }
                

            
        ?>
    </ul>
</nav>
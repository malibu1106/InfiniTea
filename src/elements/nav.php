<nav>
    <button id="burgerButton">☰</button>
    <ul id="burger">
        <a href="../index.php"><li>Accueil</li></a>
        <?php if(isset($_SESSION["user_id"])){
            echo '<a href="../pages/logout.php"><li>Déconnexion</li></a>';
        }
        else{
            echo '<a href="../index.php?page=connexion#main"><li>Connexion</li></a>';
        }?>
        
        <a href="../index.php#produits#main"><li>Nos Produits</li></a>
        <a href="../index.php?page=contact#main"><li>Contact</li></a>
    </ul>
</nav>
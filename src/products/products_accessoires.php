<!-- <?php
// REQUETE AVEC CE QU'IL NOUS FAUT A STOCKER EN $_SESSION SI BESOIN 
$sql = "SELECT * FROM products WHERE category = 'accessoires'";

// PREPARATION DE LA REQUETE
$query = $db->prepare($sql);

//EXECUTION DE LA REQUETE + STOCK DES DONNEES DANS LA VARIABLE
$query->execute();
$accessoires = $query->fetchAll(PDO::FETCH_ASSOC);

// THE NOIR
if($accessoires){
    echo "Affichage accessoire";
    foreach ($accessoires as $accessoire){
        echo '<pre>';
        print_r($accessoire);
        echo '</pre>';
    }
}
else{
    echo "Aucun accessoire";
}
?> -->

<div class="flex flex-col items-center justify-center my-10">
    <div class="accessoires w-full p-8 bg-gray-100 shadow-lg">
      <article class="text-center">
        <h2 class="text-5xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-7xl mb-1">Nos accessoires</h2>
        <p class="text-white">Retrouvez tout ce dont vous avez besoin pour votre tea time !</p>
        <a href="index.php?page=accessoires#main"><button class="my-5 rounded-md bg-purple-700 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-purple-700">
          Découvrez-les
        </button></a>
      </article>
    </div>
</div>

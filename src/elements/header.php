<?php include "elements/nav.php";

 
    if (empty($_SESSION['admin'])){
echo '<header>';
    
   echo '<article><div class="glowing"><h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl xl:text-9xl">
    <a href="../index.php" class="text-8xl sm:text-8xl md:text-8xl lg:text-9xl xl:text-12xl">InfiniTea</a>
</h1>
</div>';
echo '<div class="typewriter">';

 
echo '<h3>';
 echo '<span>Votre</span><span> </span><span>thé,</span><span> </span><span>votre</span><span> </span><span>univers</span>';
echo '</h3>';
echo '</div></article>';

echo '</header>';
}
else{
  echo '<div style="margin-top:40px"></div>';
}

?>
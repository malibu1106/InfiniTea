<?php include "elements/nav.php";

 
    if (empty($_SESSION['admin'])){
echo '<header>';
    
   echo '<article><div class="glowing"><a href="../index.php"><h1>InfiniTea</h1></a></div>';
echo '<div class="typewriter">';
  echo '<h3>';
    echo '<span>Votre</span><span> </span><span>thé,</span><span> </span><span>votre</span><span> </span><span>univers</span>';
  echo '</h3>';
echo '</div></article>';

echo '</header>';
}
?>
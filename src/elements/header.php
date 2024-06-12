<?php include "elements/nav.php";

 
    if (empty($_SESSION['admin'])){
echo '<header>';
    
   echo '<article><div class="glowing"><h1><a href="../index.php">InfiniTea</a></h1></div>';
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
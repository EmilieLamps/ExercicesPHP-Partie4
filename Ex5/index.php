<?php
$page = "Exercice 5"; // Définir la variable pour changer le titre !
$year = 2019;
$string = 'Nous sommes en ';
function concat($number, $text){
  return $string . ' ' . $year;
}
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 5</h2>
 <h3 class="text-center pb-5"></h3>
<?php

?>
<p><?= concat($string , $year); ?></p>
<?php
include '../footer.php';
?>

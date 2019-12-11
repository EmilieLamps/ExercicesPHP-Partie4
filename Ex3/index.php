<?php
$page = "Exercice 3"; // Définir la variable pour changer le titre !
$var1 = 'Hello';
$var2 = 'World';
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 3</h2>
 <h3 class="text-center pb-5">Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines</h3>
<?php
function concat($first, $second){
  // On définit les paramètres par défaut
  return $first . ' ' .$second;
}
?>
<p><?= concat($var1, $var2); ?></p>
<!-- La fonction applique la concaténation sur les variables appelées -->
<?php
include '../footer.php';
?>

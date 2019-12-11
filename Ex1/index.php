<?php
$page = "Exercice 1"; // Définir la variable pour changer le titre !
$isOk = true;
$message = '';
function hi() {
  return true;
}
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 1</h2>
 <h3 class="text-center pb-5">Faire une fonction qui retourne true.</h3>
 <p>Je retourne <?= hi(); ?></p>
<?php
include '../footer.php';
?>

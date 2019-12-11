<?php
$page = "Exercice 2"; // Définir la variable pour changer le titre !
$textString = 'Je suis une chaine de caractères';
$message = '';
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 2</h2>
 <h3 class="text-center pb-5">Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</h3>
<?php
function result($value)
{
  return $value;
// On stocke le résultat de la variable;
}

?>
<p><?= result($textString); ?></p>
<!-- On appelle la fonction dans la variable en lui appliquant en paramètres la valeur que l'on souhaite récupérer -->
<?php
include '../footer.php';
?>

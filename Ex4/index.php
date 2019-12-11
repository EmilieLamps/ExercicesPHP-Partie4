<?php
$page = "Exercice 4"; // Définir la variable pour changer le titre !
$numberOne = 20;
$numberTwo = 5;
function compare($firstVal , $secondVal){
  if ($firstVal > $secondVal){
    return 'Le premier nombre est plus grand';
  }
  elseif ($firstVal < $secondVal) {
    return 'Le premier nombre est plus petit';
  }
  else {
    return 'Les deux nombres sont identiques';
  }
}
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 4</h2>
 <h3 class="text-center pb-5">Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :</h3>

<p><?= compare($numberOne , $numberTwo); ?></p>
<?php
include '../footer.php';
?>

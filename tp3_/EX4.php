<?php

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];


$delta = ($b * $b) - (4 * $a * $c);


if ($delta > 0) {
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    $solution = "Les solutions sont x1 = $x1 et x2 = $x2";
} elseif ($delta == 0) {
    $x = -$b / (2 * $a);
    $solution = "L'équation a une seule solution réelle : x = $x";
} else {
    $solution = "L'équation n'a pas de solution réelle.";
}


echo "<h2>Résultat :</h2>";
echo "<p>$solution</p>";
?>

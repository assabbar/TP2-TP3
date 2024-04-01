<?php

$nombre = rand(100, 999);
echo "Nombre initial généré : $nombre <br>";

$essais = 0;

do {
    $nouveau_nombre = rand(100, 999);
    $essais++; 
} while ($nouveau_nombre != $nombre);


echo "Nombre d'essais réalisés : $essais";

?>

<?php

$nombre = rand(100, 999);
echo "Nombre initial généré : $nombre <br>";

$essais = 0;

for (;;) {
    
    $nouveau_nombre = rand(100, 999);
    $essais++; 

    if ($nouveau_nombre == $nombre) {
        break; 
    }
}

echo "Nombre d'essais réalisés : $essais";

?>

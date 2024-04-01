<?php
for ($nombre = 0; $nombre < 1000; $nombre++) {
    $somme = 0;
    $nombreTemp = $nombre;
    while ($nombreTemp > 0) {
        $chiffre = $nombreTemp % 10;
        $somme += $chiffre * $chiffre * $chiffre;
        $nombreTemp = intval($nombreTemp / 10);
    }
    if ($somme == $nombre) {
        echo "$nombre ";
    }
}
?>

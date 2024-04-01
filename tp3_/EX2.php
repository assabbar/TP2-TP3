<?php

$nombre1 = 0;
$nombre2 = 0;
$nombre3 = 0;


while (true) {
   
    $nombre1 = rand(1, 100);
    $nombre2 = rand(1, 100);
    $nombre3 = rand(1, 100);
    
    
    if ($nombre1 % 2 == 0 && $nombre2 % 2 == 0 && $nombre3 % 2 != 0) {
        break; 
    }
}


echo "Suite obtenue : $nombre1, $nombre2, $nombre3";

?>

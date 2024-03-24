<?php
function media($numero){
    $total = 0;
    for($i = 0; $i <= (count($numero) - 1); $i++){
        $total += $numero[$i];
    }
    $media = $total/count($numero);
    return $media;
}

$lista = array(1,2,3,4,5);

$media = media($lista);
print($media);

$media = (1 + 2 + 3 + 4 + 5)/5;
print($media);
<div class = "titulo"> Desafio Aritmético </div>

<?php

//primeira parte da conta referenciada no terminal
function operação1($primeiroparenteses, $segundoParenteses, $divisãoPosParenteses, $elevaçãoparenteses = 1){
   $primeirocalculo = $primeiroparenteses * $segundoParenteses;
   $fimDentroDoParenteses =  $primeirocalculo / $divisãoPosParenteses;
   return pow($fimDentroDoParenteses, $elevaçãoparenteses);
}

//segunda parte da conta referenciada no terminal
function operação2($parenteses, $numeroDaChave, $elevação, $divisão){
    $primeirocalculo2 = $parenteses * $numeroDaChave;
    $segundoCalculo = pow($primeirocalculo2, $elevação);
    $fimOperação = $segundoCalculo / $divisão;
    return $fimOperação;
}

//junção das duas operações e fim da parte de cima da conta
function penultima($fimoperação1, $fimoperação2, $elevaçãofinal){
    $totalOperação = $fimoperação1 - $fimoperação2;
    return pow($totalOperação, $elevaçãofinal);

}

//finalização da conta
function resultado($total, $ultimaDivisão){
    return $total / $ultimaDivisão;
}


$primeiroParenteses = 1 - 5;
$segundoParenteses = 2-7;
$divisãoPosParenteses = 2;
$elevaçãoParenteses = 2;

$parenteses = 3 + 2;
$numeroDaChave = 6;
$elevação = 2;
$divisão = 3 * 2;

$elevaçãoFinal = 3;

$fimOperação1 = operação1($primeiroParenteses, $segundoParenteses, $divisãoPosParenteses, $elevaçãoParenteses);
$fimOperação2 = operação2($parenteses, $numeroDaChave, $elevação, $divisão);

$ultimaDivisão = pow(10,3);

$total = penultima($fimOperação2, $fimOperação1, $elevaçãoFinal);
$resultado = resultado($total, $ultimaDivisão);

?> 
    <img src = "assets\images\a.png">
<?php
print("<br>");
print("Resultado = $resultado"); 
?>

<?php

$nota1 = 10;
$nota2 = 6;
$nota3 = 2;
$media = ($nota1 + $nota2 + $nota3)/3;

if($media < 5){
    print_r("nota 1 = $nota1<br>nota 2 = $nota2<br>nota 3 = $nota3<br>O aluno esta Reprovado <br> NOTA MEDIA: $media");
}
elseif($media >= 5 && $media < 7){
    print_r("nota 1 = $nota1<br>nota 2 = $nota2<br>nota 3 = $nota3<br>O aluno esta em Recuperação <br> NOTA MEDIA: $media");
}
else{
    print_r("nota 1 = $nota1<br>nota 2 = $nota2<br>nota 3 = $nota3<br>O aluno esta Aprovado <br> NOTA MEDIA: $media");
}
 //echo basename(__FILE__); 
 ?>

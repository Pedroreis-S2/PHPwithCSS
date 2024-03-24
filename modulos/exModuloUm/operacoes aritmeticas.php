<div class = "titulo"> Operações aritméticas </div>

<?php
function soma($a, $b){
    return $a + $b;
}
function sub($a, $b){
    return $a - $b;
}
function multi($a, $b){
    return $a * $b;
}
function div($a, $b){
     return $a / $b;
}
function modulo($a, $b){
     return $a % $b;
}

$mensagem = "Faça um codigo em php que recebe duas variaveis com valor 3 e 2 respectivamente. <br>A partir disso faça a operação aritmética dentro do comando echo e imprima o resultado das operações conforme o modelo abaixo";

$a = 3;
$b = 2;

print("$mensagem <br> <br> <br>" );

print("a soma vale: ".soma($a,$b));
print("<br>a subtração vale: ".sub($a,$b));
print("<br>a multiplicação vale: ".multi($a,$b));
print("<br>a divisão vale: ".div($a,$b));
print("<br>o modulo vale: ".modulo($a,$b));


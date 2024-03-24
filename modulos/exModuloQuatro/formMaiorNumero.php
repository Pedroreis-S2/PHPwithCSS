<div class = "titulo"> Form - five numbers</div>

<form class = # method = "post" >
    Digite um numero <input type = "number" name = "Num"/><br>
    Digite o segundo numero <input type = "number" name = "Number2" /><br>
    Digite o terceiro numero <input type = "number" name = "Number3" /> <br>
    Digite o quarto numero <input type = "number" name = "Number4" /> <br>
    Digite o quinto numero <input type = "number" name = "Number5" /> <br>

    <input type = "Submit" name = "submit" value = "Enviar"/><br>
</form>

<?php
$number1 = $_POST["Num"];
$number2 = $_POST["Number2"];
$number3 = $_POST["Number3"];
$number4 = $_POST["Number4"];
$number5 = $_POST["Number5"];

$listNumber = array($number1, $number2, $number3, $number4, $number5);
$soma = array_sum($listNumber);
$maiorNumero = maiorNumero($listNumber);
$media = media($listNumber);


print("A soma dos 5 numeros é: $soma");
print("<br>");
print("O maior numero dos 5 é: $maiorNumero");
print("<br>");
print("A media dos 5 numeros é: $media");

function maiorNumero($numero = array()){
    $maiorNumero = -20000000;
    for($i = 0; $i <= (count($numero) - 1); $i++){
        if($numero[$i] > $maiorNumero){
            $maiorNumero = $numero[$i];
        }
    }
    return $maiorNumero;
}
function media($numero){
    $total = null;
    for($i = 0; $i <= (count($numero) - 1); $i++){
        $total += $numero[$i];
    }
    //descobri um jeito mais facil e melhor doq o for para somar todos indices da lista
    //$numero_sum() nn sei se é exatamente assim mas soma todos os indices
    return $total/count($numero);
}
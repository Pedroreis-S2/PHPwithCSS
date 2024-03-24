<div class = "titulo" > IMC </div>

<?php
echo 'informe a sua altura na url e informaremos seu peso ideal <br><br>';
    $altura = $_GET ["altura"];
    $imc = (72.7*$altura) - 58;

echo "O peso ideal para $altura Metros de altura, é $imc";
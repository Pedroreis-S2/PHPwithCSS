<div class = "titulo" > Salario</div>
<?php
    $salarioHora = $_GET ["S"];
    $horasTrabalhadas = $_GET["H"];

    echo "Informe na Url o valor do salario recebido por hora <br>";
    echo "Informe na url as horas trabalhadas <br><br>";

    $totalSalario = $salarioHora * $horasTrabalhadas;

    echo "O salario total desse usuario é de $totalSalario R$";
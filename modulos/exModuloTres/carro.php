<div class = "titulo"> MapOf Carro </div>

<?php
$carro = array(
    "Marca" => "BMW",
    "Rodas" => 4,
    "Modelo" => "hatch com teto solar",
    "Velocidade max" => 300,
    "Blindagem" => false
);

print_r("Marca do carro: ". $carro["Marca"]."<br>");
print_r("Total de rodas: ". $carro["Rodas"]. "<br>");
print_r("Modelo: ". $carro["Modelo"]. "<br>");
print_r("Velocidade maxima: ". $carro["Velocidade max"]. "<br>");
print_r("Blindagem: ". $carro["Blindagem"]);
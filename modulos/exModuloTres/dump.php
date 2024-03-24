<div class = "titulo"> aposentadoria </div>

<?php

$sexoo = "maScuLiNo";
$sexo = strtolower($sexoo);
$idade = 60;

switch($sexo){
    case "masculino":
    print("Sexo: $sexo <br>");
        $idade >= 65? print("Pode se aposentar ja que sua idade é: $idade "): print("terá que trabalhar mais um pouco ja que sua idade é $idade");
    break;

    case "feminino":
        print("Sexo: $sexo <br>");
        $idade >= 60? print("pode se aposentar ja que sua idade é: $idade"): print("Terá que trabalhar mais um pouco já que sua idade é $idade");
    break;

    default:
    print("Sexo invalido");
}
var_dump(1 === 1); // comparacao estrita, tipo e valor da variavel
var_dump(2 == "Dois");
var_dump("Dois" !== 2); //compara se o valor e o tipo da variavel são diferentes
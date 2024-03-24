<div class = "titulo" > Tinta por metro </div>

<?php 
    echo "Digite na Url quantos metros você deseja pintar <br>";
    $pintar = $_GET ["P"];
    $litros = $pintar / 3;

    $tinta = $litros / $pintar;
    
    if($tinta < 1){
        echo "você tera que comprar $litros L de tinta pórem é menos que uma lata de tinta ja que ela tem 18 Litros";
    }
    else{
        echo "Você tera que comprar $tinta latas de tinta utilizando $litros L";
    }
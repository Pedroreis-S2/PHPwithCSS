<div class = "titulo" > De M para CM</div>

<?php
    echo "Digite na URl a quantidade de metros que vc deseja converter para centimetros <br>";
    $metros = $_GET["M"];
    $centimetros = $metros * 100;

echo "$metros metros é igual a $centimetros centimetros";

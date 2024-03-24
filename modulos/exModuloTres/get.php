<div class = "titulo"> Get </div>
<?php
    $celsius = $_GET ["C"];

    $fahren = ($celsius*5/9) + 32;
    
    echo "$celsius °C é igual a $fahren °F"; 
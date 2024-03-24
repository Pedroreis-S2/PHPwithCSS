<div class = "titulo"> Post Exercicio 1 </div>
    <form action = "#" method = "post">
        insira uma nota: <input type = "number" name = "nota"/> <br>
        <input type = "Submit" name = "submit" value = "Inserir"/><br>
</form>

<?php
$nota = $_POST["nota"];
        if($nota < 0 OR $nota > 10){
            echo "Insira uma nota valida de 0 a 10";
        }
        else{
            echo "Nota Inserida com sucesso!!!";
        }
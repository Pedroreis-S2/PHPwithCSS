<div class = "titulo"> POST - Operadores Lógicos</div>

<form action = "#" method = "post">
    <div>
        <label for = "D1" >Digite o seu nome: </label>
        <input type = "text" name = "nome">
        <br>
        
    </div>

    <div>
        <label for = "D2" >Digite o seu numero: </label>
        <input type = "num" name = "telefone">
        <br>
        
    </div>

    <div>
        <label for = "D3" >Digite o seu endereço: </label>
        <input type = "text" name = "endereco">
        <br>
        
    </div>

    <div>
        <label for = "D4" >Digite o sua idade: </label>
        <input type = "num" name = "idade">
        <br>
        
    </div>

    <button> Enviar </button>

<style>
    button, select {
        font-size: 20px;
    }

</style>

  




    <div>
        //isso é um formulario em html
        <label for = "t1"> Trabalho 1 (Terça):</label>
        <select name = "t1" id = "t1">
            <option value = "1"> Executado</option>
            <option value = "0"> Não Executado </option>

</select>
</div>

<div> 
    <label for = "t2"> Trabalho 2 (Quinta): </label>
    <select name= "t2" id = "t2">
        <option value = "1"> Executado </option>
        <option value = "0"> Não Executado </option>
</select>
</div>

<button> Executar </button>
</form>

<style>
    button, select {
        font-size: 20px;
    }

    </style>

    <?php
if (isset($_POST['t1']) && isset($_POST['t2'])){
    $t1 = $_POST['t1'] === '1'; // se receber 1 é vdd
    $t2 = !! $_POST['t2'];//ele recebe de fato o vaalor inserido
    //!! simbolo de diferença
    $tv = '';
    $sorvete = false;
}

if ($t1 && $t2){ // isso so acontece se o trabalho de terça e quinta aconteceram
$tv = '50"';
}

else if ($t1 xor $t2){// xor é ou exclusivo
    $tv = '32"';
}  

if($t1 || $t2){
    $sorvete= true;// so vai tomar sorvete se fizer um trabalho
}
if($tv){
    $resultado = "Vamos comprar uma TV de $tv";
} else {
    $resultado = "Sem tv dessa vez ;(";
}

$saudavel = !$sorvete;


if($saudavel){
    $resultado .= '<br> Estamos mais saudáveis';
} else{
    $resultado .= '<br> Sorvete liberado';

}
echo "$resultado";
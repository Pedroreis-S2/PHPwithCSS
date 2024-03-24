<div class = "titulo"> Post exercicio2 </div>

<form action = "#" method = "post">
        Login: <input type = "text" name = "Login" /> <br>
        Senha: <input type = "password" name = "Password" /> <br>
        Confirme sua senha: <input type = "password" name = "Repassword" /> <br>

        <input type = "Submit" name = "Submit" value = "Validar" />
</form>

<?php

$login = $_POST["Login"];
$password = $_POST["Password"];
$repassword = $_POST["Repassword"];

if($login = ! $password || $password == $repassword){
    echo "Login feito com sucesso";
}
else{
    echo "Houve algum erro com o seu cadastro <br>Tente novamente";
}
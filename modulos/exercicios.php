<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel='stylesheet'>
    <link rel="stylesheet" href="resources\index.CSS">
    <link rel="stylesheet" href="resources\telaExercicios.CSS">
    <title>Exercicios</title>
</head>

<body class = "corpo">
    <header class="cabecalho">
        <h1>Exercicio</h1>
        <h2>visualização do exercicio</h2>
    </header>
    
    <nav class = "navegacao">
     <a href = "index.php" class = "vermelho" >  voltar </a>
    </nav>

    <main class="principal">
        <div class="content">
        <?php
            include(__DIR__."/{$_GET['dir']}/{$_GET['file']}.php");
        ?>
        </div>

    </main>
    <footer class="rodape">
       DTEC PHP <?php echo date('Y'); ?>
    </footer>


</body>

</html>
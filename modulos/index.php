<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel='stylesheet'>
    <link rel="stylesheet" href="resources\index.CSS">
    <title>Aula PHP</title>
</head>


<body>
    <header class="cabecalho">
        <h1>Dev Saver</h1>
        <h2>Pedro Nascimento</h2>
    </header>


    <main class="principal">
        <div class="content">
            <nav class="modulos">
                <div class="modulo um">
                    <h3> Módulo 1</h3>
                    <ul>
                        <li><a href= "exercicios.php?dir=exModuloUm&file=helloWorld"> Hello PHP </a></li>
                        <li><a href= "exercicios.php?dir=exModuloUm&file=aprovadoreprovado"> Aprovado Reprovado</a></li>
                        <li><a href="exercicios.php?dir=exModuloUm&file=operacoes aritmeticas"> Operações aritmeticas</a></li>
                    </ul>
                </div>


                <div class="modulo dois">
                    <h3> Módulo 2</h3>
                    <ul>
                        <li><a href = "exercicios.php?dir=exModuloDois&file=desafioAritmetico"> Desafio Aritmético</a></li>
                        <li><a href = "exercicios.php?dir=exModuloDois&file=atribuicao"> Atribuicao</a></li>
                        <li><a href = "exercicios.php?dir=exModuloDois&file=date"> Date</a></li>
                    </ul>
                </div>


                <div class="modulo tres">
                    <h3> Módulo 3</h3>
                    <ul>
                        <li><a href = "exercicios.php?dir=exModuloTres&file=dump"> Dump</a></li>
                        <li><a href = "exercicios.php?dir=exModuloTres&file=carro"> Carro/lista</a></li>
                        <li><a href = "exercicios.php?dir=exModuloTres&file=get"> Get</a></li>
                    </ul>
                </div>


                <div class="modulo quatro">
                    <h3> Módulo 4</h3>
                    <ul>
                        <li><a href = "exercicios.php?dir=exModuloQuatro&file=postEx"> Exercicio 1</a></li>
                        <li><a href = "exercicios.php?dir=exModuloQuatro&file=postEx2"> Exercicio 2</a></li>
                        <li><a href = "exercicios.php?dir=exBolsa&file=ex031803"> Exercicio 3</a></li>
                    </ul>
                </div>


                <div class="modulo cinco">
                    <h3> Módulo 5</h3>
                    <ul>
                        <li><a href  "a"> Exercicio A</a></li>
                        <li><a href  "a"> Exercicio B</a></li>
                        <li><a href  "a"> Exercicio C</a></li>
                    </ul>
                </div>


                <div class="modulo seis">
                    <h3> Módulo 6 </h3>
                    <ul>
                        <li><a href "a"> Exercicio A</a></li>
                        <li><a href "a"> Exercicio B</a></li>
                        <li><a href "a"> Exercicio C</a></li>
                    </ul>
                </div>


                <div class="modulo sete">
                    <h3> Módulo 7 </h3>
                    <ul>
                        <li><a href "a"> Exercicio A</a></li>
                        <li><a href "a"> Exercicio B</a></li>
                        <li><a href "a"> Exercicio C</a></li>
                    </ul>
                </div>


                <div class="modulo oito">
                    <h3> Módulo 8 </h3>
                    <ul>
                        <li><a href "a"> Exercicio A</a></li>
                        <li><a href "a"> Exercicio B</a></li>
                        <li><a href "a"> Exercicio C</a></li>
                    </ul>
                </div>


                <div class="modulo nove">
                    <h3> Módulo 9 </h3>
                    <ul>
                        <li><a href "a"> Exercicio A</a></li>
                        <li><a href "a"> Exercicio B</a></li>
                        <li><a href "a"> Exercicio C</a></li>
                    </ul>
                </div>
            </nav>
        </div>

    </main>
    <footer class="rodape">
       DTEC PHP <?php echo date('Y'); ?>
    </footer>


</body>

</html>
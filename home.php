<?php
session_start();
include('./assets/php/verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="./assets/imgs/logoInveste.png">
    <title>INVESTE! | HOME</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="./assets/css/padrao.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/home/home.css">

    <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
</head>

<body>

<header class="cabecalho">
        <a href="index.php" class="cabecalho__logo">
            <div class="logo__site" alt="logo investe"></div>
        </a>

        <div class="menu-secao" data-menu-secao>
            <div class="menu-juncao" data-menu-jucao>
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </div>
            <nav class="cabecalho__nav-bar">
                <ul class="cabelho__items">
                    <a class="cabecalho__item-redirecionamento" href="home.php">
                        <li class="cabecalho__item">HOME</li>
                    </a>
                    <a class="cabecalho__item-redirecionamento" href="cursos.php">
                        <li class="cabecalho__item">CURSOS</li>
                    </a>
                    <a class="cabecalho__item-redirecionamento" href="noticias.php">
                        <li class="cabecalho__item">NOTÍCIAS</li>
                    </a>
                    <a class="cabecalho__item-redirecionamento" href="login.php">
                        <li class="cabecalho__item">ENTRAR</li>
                    </a>
                </ul>
            </nav>
        </div>
    </header>


    <main class="principal">
        <section class="cursos__iniciados">
            <h2 class="cursos__iniciados-titulo titulo">Cursos Iniciados</h2>

            <a href="index.php" class="cursos__iniciados-item">
                <div class="img-teste"></div>Educação financeira
            </a>
            <a href="index.php" class="cursos__iniciados-item">
                <div class="img-teste"></div>Tripé Macroeconômico
            </a>
        </section>

        <section class="cursos__melhores-avaliados">
            <h2 class="cursos__melhores-avaliados-titulo titulo">Cursos melhores avaliados</h2>
            <a class="cursos__melhores-avaliados-item">
                
                <img class="img-avaliados" src="./assets/imgs/educacaoFinanceira.png" alt="gráfico, mostrando como funcionam ativos" />
                
                <h3 class="cursos__melhores-avaliados-titulos">Educação financeira</h3>
                
                <p class="cursos__melhores-avaliados-texto">Como criar o hábito de ministrar o dinheiro com sabedoria, deixando de lado coisas
                    superfolas.</p>
            </a>
            <a class="cursos__melhores-avaliados-item">
                
                <img class="img-avaliados" src="./assets/imgs/educacaoFinanceira.png" alt="gráfico, mostrando como funcionam ativos" />
                
                <h3 class="cursos__melhores-avaliados-titulos">Educação financeira</h3>
                
                <p class="cursos__melhores-avaliados-texto">Como criar o hábito de ministrar o dinheiro com sabedoria, deixando de lado coisas
                    superfolas.</p>
            </a>
        </section>

        <section class="noticias">
            <h2 class="noticias__titulo titulo">Notícias de investimentos</h2>
            <div class="noticias__items">
                <div class="noticias__item-conteudo">
                    <img class="noticias__item-imagem" src="./assets/imgs/dolar.jpeg" alt="caindo valor do bitcoin" />
                    <h3 class="noticias__item-titulo">Bitcoin caindo</h3>
                    <p class="noticias__item-texto">O bitcoin nos últimos meses apresentam uma queda significativa do seu valor, perdendo ao todo
                        metade do maior valor alcançado nos últimos 6 meses, e está estabilizado no valor de 100mil
                        reais durante os
                        últimos meses podendo ser o seu equilibrio.</p>
                </div>
                <div class="noticias__item-conteudo">
                    <img class="noticias__item-imagem" src="./assets/imgs/dolar.jpeg" alt="caindo valor do bitcoin" />
                    <h3 class="noticias__item-titulo">Bitcoin caindo</h3>
                    <p class="noticias__item-texto">O bitcoin nos últimos meses apresentam uma queda significativa do seu valor, perdendo ao todo
                        metade do maior valor alcançado nos últimos 6 meses, e está estabilizado no valor de 100mil
                        reais durante os
                        últimos meses podendo ser o seu equilibrio.</p>
                </div>
                <div class="noticias__item-conteudo">
                    <img class="noticias__item-imagem" src="./assets/imgs/dolar.jpeg" alt="caindo valor do bitcoin" />
                    <h3 class="noticias__item-titulo">Bitcoin caindo</h3>
                    <p class="noticias__item-texto">O bitcoin nos últimos meses apresentam uma queda significativa do seu valor, perdendo ao todo
                        metade do maior valor alcançado nos últimos 6 meses, e está estabilizado no valor de 100mil
                        reais durante os
                        últimos meses podendo ser o seu equilibrio.</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="rodape">

        <a href="index.php">
            <div class="logo__site" alt="logo investe"></div>
        </a>

        <section class="redes-sociais">

            <div class="redes-sociais__imagens facebook" alt="facebook"></div>
            <div class="redes-sociais__imagens twitter" alt="twitter"></div>
            <div class="redes-sociais__imagens instagram" alt="instragram"></div>

            <p class="redes-sociais__direitos">INVESTE! ® 2022 | TODOS OS DIREITOS RESERVADOS</p>

        </section>

        <nav class="informacoes">
            <a class="informacoes_item" href="http://investsite.infinityfreeapp.com/about.php">SOBRE NÓS </a>
            <a class="informacoes_item">CONTATO</a>
        </nav>

    </footer>

</body>

</html>
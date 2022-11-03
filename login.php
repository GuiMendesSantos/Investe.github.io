<?php
session_start();
include('./assets/php/verifica_logout.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="./assets/imgs/logoInveste.png">
    <title>INVESTE! | Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="./assets/css/padrao.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/login/login.css">

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

        <div class="container">

            <h2 class="titulo">Entrar</h2>

            <form id="singin" action="logar.php" method="POST">

                <input type="email" name="email" name="text" placeholder="Email">
                <i class="fas fa-envelope iEmail"></i>

                <input name="senha" type="password" placeholder="Sua senha">
                <i class="fas fa-lock iPassword"></i>

                <button type="submit" class="button">Entrar</button>
                <?php
                if (isset($_SESSION['nao_autenticado'])) :
                ?>
                <div class="error">
                    <p style="color:red">Usuário ou senha inválidos.</p>
                </div>
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>

            </form>
            <p class="redi">Não possui cadastro? <a href="cadastro.php">Cadastre-se</a></p>
        </div>

    </main>

    <footer class="rodape">

        <a href="index.php"><div class="logo__site" alt="logo investe"></div></a>

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
<script src="https://www.gstatic.com/firebasejs/3.6.5/firebase.js"></script>
<script src="cadas.js"></script>


</html>
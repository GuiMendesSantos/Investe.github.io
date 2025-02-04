<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="./assets/imgs/logoInveste.png">
    <title>INVESTE! | CONHECENDO</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="./assets/css/padrao.css">
    <link rel="stylesheet" href="./assets/css/conhecendo/particulas.css">
    <link rel="stylesheet" href="./assets/css/sobrenos/sobrenos.css">
    <link rel="stylesheet" href="./assets/css/sobrenos/carroussel.css">
    <link rel="stylesheet" href="./assets/css/conhecendo/ondas.css">
    <link rel="stylesheet" href="./assets/css/conhecendo/Responsivo.css">

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

    <main>
        <div class="page-wrapper">
        </div>
        <div class="animation-wrapper">
            <div class="particle particle-1"></div>
            <div class="particle particle-2"></div>
            <div class="particle particle-3"></div>
            <div class="particle particle-4"></div>
        </div>
        
        <h2 class="titulo">Sobre <b>Nós!</b></h2>
        
        <section>
        <div class="card-carousel">
        <div class="card" id="1">
                    <div class="image-container"></div>
                    <p class="funcaocarrousel">SCRUM MASTER</p>
                    <p class="nomecarrousel">NICHOLAS</p>
                    <p class="descricaocarrousel">Olá sou Nicholas Scrum Master do INVESTE!</p>         		
	      	</div>			          		
      	        </div>	
                    </div>  
        <div class="card" id="2">
                    <div class="image-container"></div>
                    <p class="funcaocarrousel">BACK-END</p>
                    <p class="nomecarrousel">RAI</p>
                    <p class="descricaocarrousel">Olá sou Rai desenvolvedor do INVESTE!</p>         		
	      	</div>			          		
      	        </div>	
                    </div>  
            
            <div class="card" id="3">
                    <div class="image-container"></div>
                    <p class="funcaocarrousel">P.O</p>
                    <p class="nomecarrousel">TAINÁ</p>
                    <p class="descricaocarrousel">Olá sou Tainá P.O do INVESTE!</p>          		
	      	</div>			          		
      	        </div>	
                    </div>  

                    <div class="card" id="4">
                    <div class="image-container"></div>
                    <p class="funcaocarrousel">FRONT-END</p>
                    <p class="nomecarrousel">JESSICA</p>
                    <p class="descricaocarrousel">Olá sou Jessica desenvolvedora do INVESTE!</p>		          		
	      	</div>			          		
      	        </div>	
                    </div>  

                <div class="card" id="5">
                    <div class="image-container"></div>
                    <p class="funcaocarrousel">FRONT-END</p>
                    <p class="nomecarrousel">GUILHERME</p>
                    <p class="descricaocarrousel">Olá sou Guilherme desenvolvedor do INVESTE!</p> 		
	      	</div>			          		
      	        </div>	
                    </div>  

        </section>
        <hr class="quebra__linha">
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
            <a class="informacoes_item" href="sobrenos.php">SOBRE NÓS </a>
            <a class="informacoes_item">CONTATO</a>
        </nav>

    </footer>

</body>

<script type="module" src="./assets/js/sobrenos/carrousselscript.js"></script>
<script type="module" src="./assets/js/padrao.js"></script>
<script src="./assets/js/sobrenos/modal.js" defer></script>

</html>
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
    <link rel="stylesheet" href="./assets/css/conhecendo/conhecendo.css">
    <link rel="stylesheet" href="./assets/css/conhecendo/carrosel.css">
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


        <h2 class="titulo">Seja bem-vindo ao <b>INVESTE!</b></h2>

        <section class="metodologias">

            <div class="aprendendo__container container">
                <h2 class="containers__titulo"><b>Aprender</b> e <b>Investir!</b></h2>
                <p class="containers__texto">Do <b>básico ao avançado</b> para pessoas que estão <b>começando</b>
                    agora, para quem quer se <b>aprofundar em conhecimentos mais técnicos</b>,
                    além de ensinar gestão financeira básica para sobrar aquela
                    graninha no fim do mês!</p>
            </div>
            <div class="perfil__container container">
                <h2 class="containers__titulo">Perfil de <b>Investimento!</b></h2>
                <p class="containers__texto"> Ainda <b>não sabe seu perfil de investidor?</b> Vamos te ajudar a
                    <b>criar com base nas analises das suas características</b> e assim,
                    indicar investimentos e cursos da própria plataforma.

                </p>
            </div>
        </section>

        <hr class="quebra__linha">

        <section id="sobre">
            <h2 class="titulo">Sobre o Curso</h2>

            <div class="card-carousel">
                <div class="card" id="1">
                    <img src="./assets/imgs/perfilInvestidor.png" class="image-container" alt=""></img>
                    <h3 class="sobre__items-titulos">Perfil</h3>
                    <p class="sobre__items-texto"> Ao realizar seu <b>cadastro</b>, de acordo com suas respostas, será
                        mostrado <b>notícias</b> e <b>cursos</b> para seu <b>perfil de investidor</b> tornando mais
                        fácil seu <b>aprendizado</b>.
                    </p>
                </div>
                <div class="card" id="2">
                    <img src="./assets/imgs/aulas.png" class="image-container" alt=""></img>
                    <h3 class="sobre__items-titulos">Aulas</h3>
                    <p class="sobre__items-texto"> No cursos as aulas serão <b>online</b> e <b>gravadas</b>, com
                        profissionais e professores <b>certificados</b>
                        e com experiência no ramo do investimento e finanças, além disso serão disponibilizadas
                        apostilas e materiais
                        exclusivos para alunos <b>INVESTE!</b>, tem alguma dúvida? Temos a aba da <b>fórum</b> onde
                        alunos e professores possam te ajudar!
                    </p>
                </div>
                <div class="card" id="3">
                    <img src="./assets/imgs/modulo.png" class="image-container" alt=""></img>
                    <h3 class="sobre__items-titulos">Módulos</h3>
                    <p class="sobre__items-texto"><B>Do zero ao avançado!</B> Irá te ajudar a tomar os primeiros passos
                        na área de investimentos e ensinar a não só como administrar o seu dinheirinho precioso,
                        como mostrar os melhores investimentos para a sua situação, pois quem não quer que sobre uma
                        graninha no fim do mês para investir?</p>
                </div>
                <div class="card" id="4">
                    <img src="./assets/imgs/simplicidade.png" class="image-container" alt=""></img>
                    <h3 class="sobre__items-titulos">Simplicidade</h3>
                    <p class="sobre__items-texto">Você conhece o <b>metódo Feyman</b>?
                        Esse método é uma forma de ensinar com simplicidade sem usar conceitos técnicos para
                        que qualquer pessoa possa aprender a príncipio, assim tornando o conhecimento mais acessível
                        para todos!
                    </p>
                </div>
                <div class="card" id="5">
                    <img src="./assets/imgs/noticias.png" class="image-container" alt=""></img>
                    <h3 class="sobre__items-titulos">Notícias</h3>
                    <p class="sobre__items-texto">
                        Na plataforma você terá <b>notícias</b> e <b>atualizações diárias</b> em relação ao mercado do
                        investimento e financeiro,
                        bolsa de valores, criptomoedas e muito mais, tudo em um clique!</p>

        </section>

        <hr class="quebra__linha">

        <section class="compre">

            <h2 class="titulo">Compre o curso</h2>


            <div class="compre__item">
                <h3 class="compre__item-titulo"> Investidor Consciente</h3>



                <ul class="compre__item-lista">

                    <li class="compre__item-beneficios">
                        <p class="compre__item-texto">ACESSO AOS CURSOS</p><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                    </li>
                    <li class="compre__item-beneficios">
                        <p class="compre__item-texto">ACESSO À NOTÍCIAS</p><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                    </li>
                    <li class="compre__item-beneficios">
                        <p class="compre__item-texto">ACESSO AO FÓRUM</p><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                    </li>
                    <li class="compre__item-beneficios">
                        <p class="compre__item-texto">PROPOR CONTEÚDOS</p><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                    </li>
                    <li class="compre__item-beneficios">
                        <p class="compre__item-texto">CONTATO COM PROFESSORES</p><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                        </svg>
                    </li>



                </ul>
                <p class="compre__valor">49,99</p>
                <a class="compre__comprar-link">
                    <div class="compre__comprar">Comprar</div>
                </a>
            </div>


            <div class="compre__item">
                <h3 class="compre__item-titulo">Investidor Intenso </h3>
                <ul class="compre__item-lista">
                    <li class="compre__item-beneficios">
                        <p class="compre__item-texto">ACESSO AOS CURSOS</p><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                    </li>
                    <li class="compre__item-beneficios">
                        <p class="compre__item-texto">ACESSO À NOTÍCIAS</p><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                    </li>
                    <li class="compre__item-beneficios">
                        <p class="compre__item-texto">ACESSO AO FÓRUM</p><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                    </li>
                    <li class="compre__item-beneficios">
                        <p class="compre__item-texto">PROPOR CONTEÚDOS</p><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                    </li>
                    <li class="compre__item-beneficios">
                        <p class="compre__item-texto">CONTATO COM PROFESSORES</p><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                    </li>
                </ul>
                <p class="compre__valor">59,99</p>
                <a class="compre__comprar-link">
                    <div class="compre__comprar">Comprar</div>
                </a>

            </div>

            <div class="compre__item">
                <h3 class="compre__item-titulo">Investidor Poupador</h3>
                <ul class="compre__item-lista">
                    <li class="compre__item-beneficios">
                        <p class="compre__item-texto">ACESSO AOS CURSOS</p><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                    </li>
                    <li class="compre__item-beneficios">
                        <p class="compre__item-texto">ACESSO À NOTÍCIAS</p><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                    </li>
                    <li class="compre__item-beneficios">
                        <p class="compre__item-texto">ACESSO AO FÓRUM</p><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                    </li>
                    <li class="compre__item-beneficios">
                        <p class="compre__item-texto">PROPOR CONTEÚDOS</p><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                        </svg>
                    </li>
                    <li class="compre__item-beneficios">
                        <p class="compre__item-texto">CONTATO COM PROFESSORES</p><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                        </svg>
                    </li>
                </ul>
                <p class="compre__valor">39,99</p>
                <a class="compre__comprar-link">
                    <div class="compre__comprar">Comprar</div>
                </a>

            </div>

        </section>

        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        </div>

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

<script type="module" src="./assets/js/conhecendo/carrosel.js"></script>
<script type="module" src="./assets/js/padrao.js"></script>

</html>
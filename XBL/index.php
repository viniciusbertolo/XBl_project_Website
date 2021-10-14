<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"href="img/icon.png">
    <!-- TELA min-width: 820px -->
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <!-- TELA max-width: 480px -->
    <link rel="stylesheet" href="css/estiloMobile.css" type="text/css">
    <!-- TELA min-width: 481px and max-width: 820px -->
    <link rel="stylesheet" href="css/estiloTablet.css" type="text/css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script  src="js/scriptMenuMobile.js"></script>

    

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">

    
    <title>Xbl - Consultorias e Treinamentos</title>
    <script>
        //<! [CDATA[]
        $(window).on('load',function(){
            $('#home').hide().delay(500).fadeIn(3500);
        });
        //]]>
    </script>
</head>
<body id="voltarTudoMobile">
    <div id="voltarTudo"></div>
    
    <!-- BOTÃO VOLTAR -->
        <div id="botaoVoltar">
            <a href="#voltarTudoMobile" class="linkMenuJs"><span class="bi bi-arrow-up-short"></span></a>
        </div>
    <!-- BOTÃO VOLTAR -->
    <!-- CABEÇALHO E MENU -->
    <header class="header">
        <!-- MENU DESKTOP -->
        <nav id="menu">
            <ul id="top-menu">
                <li><a class="linkMenuJs" href="#voltarTudo">Home</a></li>
                <li><a class="linkMenuJs" href="#diferenciais">Diferencial</a></li>
                <li><a class="linkMenuJs" href="#temas">Temas</a></li>
                <li><a href="paginas/agenda.php">Agenda de Eventos</a></li>
                <li><a class="linkMenuJs" href="#contatos">Contatos</a></li>
            </ul>
        </nav>
        <!-- FIM MENU DESKTOP -->
        <!-- MENU MOBILE -->
        <div id="menuMobile">
            <header class="headerMobile">
                <button class="btn-nav-container open-menu" disabled>
                    <div class="btn-nav"></div>
                </button>	
            </header>

            <div class="float-nav">
                <div class="bg1"></div>
                <div class="bg2"></div>
                <div class="container">
                    <ul class="main-nav">
                        <li><a class="linkMenu linkMenuJs" href="#voltarTudo">Home</a></li>
                        <li><a class="linkMenu linkMenuJs" href="#diferenciais">Diferencial</a></li>
                        <li><a class="linkMenu linkMenuJs" href="#temas">Temas</a></li>
                        <li><a class="linkMenu" href="paginas/agenda.php">Agenda de Eventos</a></li>
                        <li><a class="linkMenu linkMenuJs" href="#contatos">Contatos</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
        <!-- FIM MENU MOBILE -->
        <a href="index.php"><img class="imgLogo" src="img/logoXBL.png"></a>
    </header>
    <!-- FIM MENU -->
    <!-- COMEÇO SITE CONTEUDO -->
    <div class="conteudoSite">
        <!-- FOTO MESA -->
        <div class="mesaReuniao">
            <img class="mesaDesk" src="img/mesaMadeira.jpg">
        </div>
        <div class="mesaReuniaoMobile">
            <img class="mesaMobile" src="img/mesaReuniaoMobile.jpg">
        </div>
        <!-- FIM MESA         -->
        <!-- FRASE INICIAL -->
        <div id="home">
            <h2>
                SOLUÇÕES INOVADORAS E <strong>DIFERENCIADAS</strong> PARA TRANSFORMAR  DE FORMA SUSTENTÁVEL A CULTURA E OS RESULTADOS DE <strong>EMPRESAS E PROFISSIONAIS</strong>
            </h2>
        </div>
        <!-- FIM FRASE -->
        <!-- APRESENTAÇÃO -->
        <div id="teste2" class="apresentacao">
            <img class="apreMobile" src="img/apresentacaoXBLMobile3.jpg">
            <img class="apreDesk" src="img/apresentacaoXBLteste.jpg">
            <img class="apreTablet" src="img/apreTablet.jpg">
        </div>
        

        </div>
        <!-- FIM APRESENTAÇÃO -->
        <!-- DIFERENCIAIS -->
        <div id="diferenciais">
            <br>

            <h2 class="tituloDiferencial">DIFERENCIAIS</h2>
            <br>
            <div class="container">
            <div class="card">
                <div class="box">
                    <div class="content">
                        <h2>01</h2>
                        <h3></h3>
                        <p>Temas únicos e exclusivos, especificamente desenvolvidos para cada cliente!</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <div class="content">
                        <h2>02</h2>
                        <h3></h3>
                        <p>Usamos um algoritmo próprio para fazermos a leitura precisa das reais necessidades dos nossos clientes!</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <div class="content">
                        <h2>03</h2>
                        <h3></h3>
                        <p>Laboratório de Ideias em parceria com os maiores centros mundiais de pesquisas humanas e comportamentais!</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <div class="content">
                        <h2>04</h2>
                        <h3></h3>
                        <p>Mais de 300 empresas atendidas em 23 países!</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <div class="content">
                        <h2>05</h2>
                        <h3></h3>
                        <p>Conteúdos e conceitos totalmente voltados para a prática!</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <div class="content">
                        <h2>06</h2>
                        <h3></h3>
                        <p>Utilizamos o Método Storyumn e gatilhos mentais, gerando maior retenção, efetividade e CONSISTÊNCIA.</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <div class="content">
                        <h2>07</h2>
                        <h3></h3>
                        <p>9,92 nos índices de satisfação dos clientes!</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <div class="content">
                        <h2>08</h2>
                        <h3></h3>
                        <p>Key Assessement Tool Uma ferramenta exclusiva para acompanhamento e mensuração dos resultados!</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <div class="content">
                        <h2>09</h2>
                        <h3></h3>
                        <p> Estúdio próprio para produção de vídeos e apostilas personalizadas para cada cliente!</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- FIM DIFERENCIAIS -->

        <!-- COMEÇO TEMAS -->
        <div id="temas">

            <h2 class="tituloDiferencial2">Temas</h2>

            <?php

                include ("paginas/temasVanilla.php");
            ?>
        </div>

        <!-- FIM TEMAS -->
        
        <!-- INICIO FOOTER -->
        <div id="contatos" class="footer">
            <footer>
                <div class="social">
                    <a href="https://www.facebook.com/xblcorp" class="link facebook" target="_blank"><span class="bi bi-facebook"></span></a>
                    <a href="https://www.instagram.com/xblconsultoria/" class="link instagram" target="_blank"><span class="bi bi-instagram"></span></a>
                    <a href="#" class="link whats" target="_blank"><span class="bi bi-whatsapp"></span></a>
                    <a href="#" class="link linkedin" target="_blank"><span class="bi bi-linkedin"></span></a>
                    
                </div>

                <div class="textoRod">
                    <p class="primeiroP">XBL CONSULTORIA E TREINAMENTOS</p>
                    <p>Matriz: Rua alberto Lanzoni-445-São Carlos/SP</p>
                    <p>Escritório Central: Avenida Paulista-1374-SP</p>
                    <p>(11)98401-8598/(16)3415-1619</p>
                    <p>contato@xbl.com.br</p><br>
                    <p><small>&copy;2021 - XBL - Todos os diretos reservados</small></p>
                </div>
                
            </footer>
        </div>

        <!-- FIM FOOTER -->
    </div>





<!-- SCRIPT DESCER -->
<script type="text/javascript" src="js/descerSuave.js"></script>
<!-- FIM SCRIPT DESCER -->
</body>
</html>
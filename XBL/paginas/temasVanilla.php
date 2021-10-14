<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cssTemasVanilla.css">
    <title>Document</title>
</head>
<body>
<div class="containerTemas">
        <div class="boxTemas">
            <div class="imgBx">
                <img class="imgTemas" src="img/palestra.png">
            </div>
            <a href="paginas/palestras.php">
                <div class="contentBx">
                    <h2>Palestras</h2>
                    <p>Nossas palestras são altamente
                        transformadoras, com uma
                        metodologia que torna a fixação
                        das informações mais efetivas e
                        duradouras, em conteúdos
                        apresentados de formas práticas,
                        dinâmicas e baseadas em dados
                        atuais do mercado, gerando grande
                        atenção dos participantes para os
                        temas centrais apresentados.</p>
                </div>
            </a>
        </div>

        <div class="boxTemas">
            <div class="imgBx">
                <img class="imgTemas" src="img/treinamento.jpg">
            </div>
            <a href="paginas/treinamentos.php">
                <div class="contentBx">
                    <h2>Treinamentos</h2>
                    <p>Nossos treinamentos
                        foram desenvolvidos dentro
                        dos conceitos de
                        neuroaprendizagem e estudos do
                        comportamento humano, para que
                        a assimilação seja rápida, prática e
                        consistente. Os conceitos são
                        retidos por longos períodos e
                        facilmente colocados em prática.</p>
                </div>
            </a>
        </div>
    </div>
    <script type="text/javascript" src="js/vanillaTemas.js"></script>
    <script type="text/javascript">
        VanillaTilt.init(document.querySelectorAll(".boxTemas"), {
            max: 25,
            speed: 400
        });
        
    </script>
</body>
</html>
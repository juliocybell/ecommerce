<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Print Photo</title>

    <link href="/res/site/img/favicon.png" type="/images/x-icon" rel="shortcut icon">
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/res/site/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/res/site/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/res/site/css/owl.carousel.css">
    <link rel="stylesheet" href="/res/site/css/style.css">
    <link rel="stylesheet" href="/res/site/css/responsive.css">

    <script type="text/javascript" src="/res/site/slider/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/res/site/slider/js/jssor.slider.mini.js"></script>

    <!-- BOOTSTRAP CSS  -->
    <link href="/res/site/assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- CUSTOM STYLE CSS-->
    <link href="/res/site/assets/css/style.css" rel="stylesheet">
    <link href="/res/site/assets/css/shortcodes/shortcodes.css" rel="stylesheet">

    <!-- CSS FOR COLOR SWITCHER -->
    <link rel="stylesheet" href="/res/site/assets/css/switcher/switcher.css">
    <link rel="stylesheet" href="/res/site/assets/css/switcher/style1.css" id="colors">

    <!-- OWL CAROUSEL -->
    <link href="/res/site/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="/res/site/assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
    <!-- MAGNIFIC POPUP-->
    <link href="/res/site/assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <!--CUSTOM FONTS-->
    <link href="/res/site/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/res/site/assets/plugins/line-icons/line-icons.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="js/canvas-to-blob.min.js"></script>
    <script src="js/resize.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <script type="text/javascript">

        // Iniciando biblioteca
        var resize = new window.resize();
        resize.init();

        // Declarando variáveis
        var imagens;
        var imagem_atual;

        // Quando carregado a página
        $(function ($) {

            // Quando selecionado as imagens
            $('#imagem').on('change', function () {
                enviar();
            });

        });

        /*
         Envia os arquivos selecionados
         */
         function enviar()
         {
            // Verificando se o navegador tem suporte aos recursos para redimensionamento
            if (!window.File || !window.FileReader || !window.FileList || !window.Blob) {
                alert('O navegador não suporta os recursos utilizados pelo aplicativo');
                return;
            }

            // Alocando imagens selecionadas
            imagens = $('#imagem')[0].files;

            // Se selecionado pelo menos uma imagem
            if (imagens.length > 0)
            {
                // Definindo progresso de carregamento
                $('#progresso').attr('aria-valuenow', 0).css('width', '0%');

                // Escondendo campo de imagem
                $('#imagem').hide();

                // Iniciando redimensionamento
                imagem_atual = 0;
                redimensionar();
            }
        }

        /*
         Redimensiona uma imagem e passa para a próxima recursivamente
         */
         function redimensionar()
         {
            // Se redimensionado todas as imagens
            if (imagem_atual > imagens.length)
            {
                // Definindo progresso de finalizado
                $('#progresso').html('Imagen(s) enviada(s) com sucesso');

                // Limpando imagens
                limpar();

                // Exibindo campo de imagem
                $('#imagem').show();

                // Finalizando
                return;
            }

            // Se não for um arquivo válido
            if ((typeof imagens[imagem_atual] !== 'object') || (imagens[imagem_atual] == null))
            {
                // Passa para a próxima imagem
                imagem_atual++;
                redimensionar();
                return;
            }

            // Redimensionando
            resize.photo(imagens[imagem_atual], 2500, 'dataURL', function (imagem) {

                // Salvando imagem no servidor
                $.post('ajax/salvar.php', {imagem: imagem}, function() {

                    // Definindo porcentagem
                    var porcentagem = (imagem_atual + 1) / imagens.length * 100;

                    // Atualizando barra de progresso
                    $('#progresso').text(Math.round(porcentagem) + '%').attr('aria-valuenow', porcentagem).css('width', porcentagem + '%');

                    // Aplica delay de 1 segundo
                    // Apenas para evitar sobrecarga de requisições
                    // e ficar visualmente melhor o progresso
                    setTimeout(function () {
                        // Passa para a próxima imagem
                        imagem_atual++;
                        redimensionar();
                    }, 1000);

                });

            });
        }

        /*
         Limpa os arquivos selecionados
         */
         function limpar()
         {
            var input = $("#imagem");
            input.replaceWith(input.val('').clone(true));
        }
    </script>
</head>
<body>    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <a href="/"><img src="/res/site/img/logo.png"><img src="/res/site/img/logo1.png" style="margin-top: -105px; margin-left: 250px;"></a>
                    </div>
                </div>                
                <div class="col-sm-6">
                    <div class="shopping-item ">
                        <a href="/login"> Login </a>
                    </div>
                    <div class="shopping-item ">
                        <a href="/profile">Minha Conta</a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/sobre">Sobre</a></li>
                        <li><a href="/vendas">Produtos</a></li>
                        <li><a href="/servicos">Serviços</a></li>
                        <li><a href="/contato">Contato</a></li>
                        <li><a href="/login">Login</a></li>                        
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
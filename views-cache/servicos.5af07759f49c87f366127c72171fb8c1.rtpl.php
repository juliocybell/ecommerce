<?php if(!class_exists('Rain\Tpl')){exit;}?><html>
<head>
	<meta charset="utf-8" />
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Print Photo</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.css" />
	<link href="assets/css/lib.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css">
	<link rel="stylesheet" href="assets/css/rtl.css">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/core.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	<link href="assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">    
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/shortcodes/shortcodes.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/switcher/switcher.css">
	<link rel="stylesheet" href="assets/css/switcher/style1.css" id="colors">
	<link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
	<link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
	<link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
	<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="assets/plugins/line-icons/line-icons.css" rel="stylesheet">

  <link href="res/site/img/favicon.png" type="/images/x-icon" rel="shortcut icon">
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="res/site/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="res/site/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="res/site/css/owl.carousel.css">
    <link rel="stylesheet" href="res/site/css/style.css">
    <link rel="stylesheet" href="res/site/css/responsive.css">

    <script type="text/javascript" src="res/site/slider/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="res/site/slider/js/jssor.slider.mini.js"></script>

    <!-- BOOTSTRAP CSS  -->
    <link href="res/site/assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- CUSTOM STYLE CSS-->
    <link href="res/site/assets/css/style.css" rel="stylesheet">
    <link href="res/site/assets/css/shortcodes/shortcodes.css" rel="stylesheet">

    <!-- CSS FOR COLOR SWITCHER -->
    <link rel="stylesheet" href="res/site/assets/css/switcher/switcher.css">
    <link rel="stylesheet" href="res/site/assets/css/switcher/style1.css" id="colors">

    <!-- OWL CAROUSEL -->
    <link href="res/site/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="res/site/assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
    <!-- MAGNIFIC POPUP-->
    <link href="res/site/assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <!--CUSTOM FONTS-->
    <link href="res/site/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="res/site/assets/plugins/line-icons/line-icons.css" rel="stylesheet">

	<script type="text/javascript" src="js/jssor.slider.min.js"></script>
	<script>
		jssor_1_slider_init = function() {
			var jssor_1_options = {
				$AutoPlay: true,
				$ArrowNavigatorOptions: {
					$Class: $JssorArrowNavigator$
				},
				$ThumbnailNavigatorOptions: {
					$Class: $JssorThumbnailNavigator$,
					$Cols: 9,
					$SpacingX: 3,
					$SpacingY: 3,
					$Align: 260
				}
			};
			var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

			function ScaleSlider() {
				var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
				if (refSize) {
					refSize = Math.min(refSize, 500);
					jssor_1_slider.$ScaleWidth(refSize);
				}
				else {
					window.setTimeout(ScaleSlider, 30);
				}
			}
			ScaleSlider();
			$Jssor$.$AddEvent(window, "load", ScaleSlider);
			$Jssor$.$AddEvent(window, "resize", ScaleSlider);
			$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
			
		};
	</script>
	<style>

		.jssora02l, .jssora02r {
			display: block;
			position: absolute;
			
			width: 55px;
			height: 55px;
			cursor: pointer;
			background: url('res/site/slider/img/a02.png') no-repeat;
			overflow: hidden;
		}
		.jssora02l { background-position: -3px -33px; }
		.jssora02r { background-position: -63px -33px; }
		.jssora02l:hover { background-position: -123px -33px; }
		.jssora02r:hover { background-position: -183px -33px; }
		.jssora02l.jssora02ldn { background-position: -3px -33px; }
		.jssora02r.jssora02rdn { background-position: -63px -33px; }        

		.jssort03 .p {
			position: absolute;
			top: 0;
			left: 0;
			width: 62px;
			height: 32px;
		}
		
		.jssort03 .t {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			border: none;
		}
		
		.jssort03 .w, .jssort03 .pav:hover .w {
			position: absolute;
			width: 60px;
			height: 30px;
			border: white 1px dashed;
			box-sizing: content-box;
		}
		
		.jssort03 .pdn .w, .jssort03 .pav .w {
			border-style: solid;
		}
		
		.jssort03 .c {
			position: absolute;
			top: 0;
			left: 0;
			width: 62px;
			height: 32px;
			background-color: #000;

			filter: alpha(opacity=45);
			opacity: .45;
			transition: opacity .6s;
			-moz-transition: opacity .6s;
			-webkit-transition: opacity .6s;
			-o-transition: opacity .6s;
		}
		
		.jssort03 .p:hover .c, .jssort03 .pav .c {
			filter: alpha(opacity=0);
			opacity: 0;
		}
		
		.jssort03 .p:hover .c {
			transition: none;
			-moz-transition: none;
			-webkit-transition: none;
			-o-transition: none;
		}
		
		* html .jssort03 .w {
			width /**/: 62px;
			height /**/: 32px;
		}
		
	</style>

</head>

<body>    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <a href="/"><img src="res/site/img/logo.png"><img src="/res/site/img/logo1.png" style="margin-top: -105px; margin-left: 250px;"></a>
                    </div>
                </div>                
                <div class="col-sm-6">
                    <div class="shopping-item ">
                        <a href="/cart"> Login </a>
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
                
         <nav class="navbar sticky-top navbar-expand-sm navbar-dark">
    
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="/">Home</a>
            </li>
            <li class="nav-item">
                 <a href="/sobre">Sobre</a>
            </li>
            <li class="nav-item">
                <a href="/vendas">Produtos</a>
            </li>
                 <li class="nav-item">
               <a href="/servicos">Serviços</a>
            </li>
                 <li class="nav-item">
                <a href="/cart">Contato</a>
            </li>
                 <li class="nav-item">
               <a href="/cart">Login</a>   
            </li>
        </ul>
    </nav>
                   
                        
                       
                       
                        
                        
                                           
                
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->

<div class="container" style="margin-top: 50px;">
	<div class="row">
		<div class="col-md-6">
			<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; visibility: hidden;">
				<!-- Loading Screen -->
				<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
					<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
					<div style="position:absolute;display:block;background:url('/res/site/slider/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
				</div>
				<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
					<div data-p="112.50" style="display: none;">
						<img data-u="image" src="res/site/img/003.jpg" />
						<img data-u="thumb" src="res/site/img/thumb-003.jpg" />
					</div>
					<div data-p="112.50" style="display: none;">
						<img data-u="image" src="res/site/img/004.jpg" />
						<img data-u="thumb" src="res/site/img/thumb-004.jpg" />
					</div>
					<div data-p="112.50" style="display: none;">
						<img data-u="image" src="res/site/img/005.jpg" />
						<img data-u="thumb" src="res/site/img/thumb-005.jpg" />
					</div>
					<div data-p="112.50" style="display: none;">
						<img data-u="image" src="res/site/img/006.jpg" />
						<img data-u="thumb" src="res/site/img/thumb-006.jpg" />
					</div>
					<div data-p="112.50" style="display: none;">
						<img data-u="image" src="res/site/img/007.jpg" />
						<img data-u="thumb" src="res/site/img/thumb-007.jpg" />
					</div>
					<div data-p="112.50" style="display: none;">
						<img data-u="image" src="res/site/img/008.jpg" />
						<img data-u="thumb" src="res/site/img/008.jpg" />
					</div>
				</div>
				<div u="thumbnavigator" class="jssort03" style="position:absolute;left:0px;bottom:0px;width:600px;height:60px;" data-autocenter="1">
					<div style="position: absolute; top: 0; left: 0; width: 100%; height:100%; background-color: #000; filter:alpha(opacity=30.0); opacity:0.3;"></div>
					<div u="slides" style="cursor: default;">
						<div u="prototype" class="p">
							<div class="w">
								<div u="thumbnailtemplate" class="t"></div>
							</div>
							<div class="c"></div>
						</div>
					</div>
				</div>
				<span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
				<span data-u="arrowright" class="jssora02r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>				
			</div>
		</div>
		<div class="col-md-6" align="center">
			<a href="" class="art"><br><br></a>
			<h4>Cartão de visita</h4>
			<p >Criação de cartões de visita totalmente personalizados e criação de logo marcas. Montamos seu cartão, você define todas as artes e em seguida seu cartão é impresso numa gráfica profissional. </p>
		</div>
		<div class="col-md-6">
			<div id="works-grid" style="margin-top: 20px;">
				<article class="work-item design">
					<div class="work-wrapper">
						<div class="work-thumbnail"> <img src="res/site/img/B6.jpg"> </div>	
						<a class="work-popup image-popup" href="res/site/img/B6.jpg"><i class="fa fa-expand"></i></a> 
					</div>
				</article>
				<div class="d-none d-md-block">							
					<article class="work-item design">
						<div class="work-wrapper">
							<div class="work-thumbnail"> <img src="res/site/img/B7.jpg"> </div>	
							<a class="work-popup image-popup" href="res/site/img/B7.jpg"><i class="fa fa-expand"></i></a> 
						</div>
					</article>
					<article class="work-item design">
						<div class="work-wrapper">
							<div class="work-thumbnail"> <img src="res/site/img/B8.jpg"> </div>	
							<a class="work-popup image-popup" href="res/site/img/B8.jpg"><i class="fa fa-expand"></i></a> 
						</div>
					</article>
					<article class="work-item design">
						<div class="work-wrapper">
							<div class="work-thumbnail"> <img src="res/site/img/B9.jpg"> </div>	
							<a class="work-popup image-popup" href="res/site/img/B9.jpg"><i class="fa fa-expand"></i></a> 
						</div>
					</article>
				</div>
			</div>			
		</div>
		<div class="col-md-6" align="center">
			<a href="" class="art"><br><br></a>
			<h4>Folder</h4>
			<p >Criação de banners totalmente personalizados. Montamos seu folder, você define todas as artes e em seguida seu folder é impresso numa gráfica profissional ou é impresso em papel fotográfico. </p>		
		</div>
		<div class="col-md-6">
			<div id="works-grid" style="margin-top: 20px;">
				<div class="row" style="margin-top: 40px;">
					<article class="col align-self-start work-item design">
						<div class="work-wrapper">
							<div class="work-thumbnail"> <img src="res/site/img/Modelo-1.jpg"> </div>	
							<a class="work-popup image-popup" href="res/site/img/Modelo-1.jpg"><i class="fa fa-expand"></i></a> 
						</div>
					</article>										
					<article class="col align-self-center work-item design">
						<div class="work-wrapper">
							<div class="work-thumbnail"> <img src="res/site/img/Modelo-2.jpg"> </div>	
							<a class="work-popup image-popup" href="res/site/img/Modelo-2.jpg"><i class="fa fa-expand"></i></a> 
						</div>
					</article>				
			
				</div>
			</div>			
		</div>
		<div class="col-md-6" align="center">
			<a href="" class="art"><br><br></a>
			<h4>Convites</h4>
			<p >Criação de convites totalmente personalizados para casamentos, aniversários, batizados, etc. Montamos seu convite, você define todas as artes e em seguida seu convite é impresso numa gráfica profissional ou é impresso em papel fotográfico.  </p>
		</div>		
		<div class="col-md-6">
			<div id="works-grid" style="margin-top: 20px;">
				<div class="row">
					<article class="col align-items-center work-item design">
						<div class="work-wrapper">
							<div class="work-thumbnail"> <img src="res/site/img/rest.jpg"> </div>	
							<a class="work-popup image-popup" href="res/site/img/rest.jpg"><i class="fa fa-expand"></i></a> 
						</div>
					</article>					
				</div>
			</div>			
		</div>
		<div class="col-md-6 align-self-center" align="center">			
			<h4>Restauração de imagens</h4>
			<p >  </p>
		</div>
		<div class="col-md-6">
			<div id="works-grid" style="margin-top: 20px;">
				<div class="row">
					<article class="col work-item design">
						<div class="work-wrapper">
							<div class="work-thumbnail" style="width: 300px; height: 300px;"> <img src="res/site/img/retoques_gr.jpg" style="margin-left: 110px;"> </div>	
							<a class="work-popup image-popup" href="res/site/img/retoques_gr.jpg"><i class="fa fa-expand"></i></a> 
						</div>
					</article>					
				</div>
			</div>			
		</div>
		<div class="col-md-6 align-self-center" align="center">			
			<h4>Tratamento de imagens</h4>
			<p > Tratamento profissional de imagens, correção de imperfeições e marcas de expressão, suavisação na pele e tratamentos diversos.   </p>
		</div>
		<div class="col-md-6">
			<div id="works-grid" style="margin-top: 20px;">
				<div class="row" style="margin-top: 40px;">
					<article class="col align-self-start work-item design">
						<div class="work-wrapper">
							<div class="work-thumbnail"> <img src="res/site/img/c6.jpg"> </div>	
							<a class="work-popup image-popup" href="res/site/img/c6.jpg"><i class="fa fa-expand"></i></a> 
						</div>
					</article>										
					<article class="col align-self-center work-item design">
						<div class="work-wrapper">
							<div class="work-thumbnail"> <img src="res/site/img/c7.jpg"> </div>	
							<a class="work-popup image-popup" href="res/site/img/c7.jpg"><i class="fa fa-expand"></i></a> 
						</div>
					</article>				
					<article class="col align-self-end work-item design">
						<div class="work-wrapper">
							<div class="work-thumbnail"> <img src="res/site/img/c8.jpg"> </div>	
							<a class="work-popup image-popup" href="res/site/img/c8.jpg"><i class="fa fa-expand"></i></a> 
						</div>
					</article>				
				</div>
			</div>			
		</div>
		<div class="col-md-6 align-self-center" align="center">			
			<h4>Montagens diversas</h4>
			<p >  </p>
		</div>
		<div class="col-md-6">
			<div id="works-grid" style="margin-top: 20px;">
				<div class="row" style="margin-top: 40px;">
					<article class="col align-self-start work-item design">
						<div class="work-wrapper">
							<div class="work-thumbnail"> <img src="res/site/img/ed.png"> </div>	
							<a class="work-popup image-popup" href="res/site/img/ed.png"><i class="fa fa-expand"></i></a> 
						</div>
					</article>										
					<article class="col align-self-center work-item design">
						<div class="work-wrapper">
							<div class="work-thumbnail"> <img src="res/site/img/ed.jpg"> </div>	
							<a class="work-popup image-popup" href="res/site/img/ed.jpg"><i class="fa fa-expand"></i></a> 
						</div>
					</article>										
				</div>
			</div>			
		</div>
		<div class="col-md-6 align-self-center" align="center">			
			<h4>Edição de vídeo</h4>
			<p > Edição profissional de vídeo. Editamos desde vídeos simples e curtos para redes sociais até DVDs completos com menu e submenus. </p>
		</div>
		<div class="col-md-6">
			<div id="works-grid" style="margin-top: 20px;">
				<div class="row" style="margin-top: 40px;">
					<article class="col align-self-start work-item design">
						<div class="work-wrapper">
							<div class="work-thumbnail"> <img src="res/site/img/a1.jpg"> </div>	
							<a class="work-popup image-popup" href="res/site/img/a1.jpg"><i class="fa fa-expand"></i></a> 
						</div>
					</article>										
					<article class="col align-self-center work-item design">
						<div class="work-wrapper">
							<div class="work-thumbnail"> <img src="res/site/img/a2.jpg"> </div>	
							<a class="work-popup image-popup" href="res/site/img/a2.jpg"><i class="fa fa-expand"></i></a> 
						</div>
					</article>
					<article class="col align-self-center work-item design">
						<div class="work-wrapper">
							<div class="work-thumbnail"> <img src="res/site/img/a3.jpg"> </div>	
							<a class="work-popup image-popup" href="res/site/img/a3.jpg"><i class="fa fa-expand"></i></a> 
						</div>
					</article>											
				</div>
			</div>			
		</div>
		<div class="col-md-6 align-self-center" align="center">			
			<h4>Diagramação</h4>
			<p > Diagramação e montagem de álbuns, livros, revistas, cardápios, etc. </p>
		</div>
		<div class="col-md-12 align-self-center" align="center">	<br>	<br>	<br>		
			<p>Entre em contato e faça seu orçamento</p>
			<h3>contato@queroimprimirfotos.com.br</h3><br>
			<a href="https://api.whatsapp.com/send?phone=5547996258219&text=Oi.%20Entre%20entre%20em%20contato,%20por%20favor"><h3>(47) 9 9625 8219 <img src="res/site/img/whatsapp.png" width="40" height="40" alt=""></h3></a>
		</div>
	</div>
</div>
<br>     


	<footer>
		<div class="container">
			<div class="row justify-content-between">		
				<div class="col-md-4">					
					<a href=""><img src="res/site/img/facebook.png" width="47" height="47" style="margin-right: 50px;"></a>				
					<a href="https://api.whatsapp.com/send?phone=5547996258219&text=Oi.%20Entre%20entre%20em%20contato,%20por%20favor"><img src="res/site/img/whatsapp.png" style="margin-right: 50px;"></a>					
					<a href=""><img src="res/site/img/logo.png" width="112"></a>
				</div>					
			</div>
		</div>
	</footer>

	<script src="js/vendor/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.nivo.slider.pack.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery.magnific-popup.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/animated-headlines.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.collapse.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
	<script src="assets/js/jquery-1.12.4.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/lib.js"></script>
	<script type="text/javascript" src="assets/slick/slick.min.js"></script>
	<script src="assets/js/functions.js"></script>
	<script>
		jssor_1_slider_init();
	</script>
	<script src="assets/js/jquery.js"></script> 
	<script type="text/javascript" src="assets/plugins/counter/waypoints.min.js"></script> 
	<script type="text/javascript" src="assets/plugins/isotope/isotope.pkgd.min.js"></script> 
	<script type="text/javascript" src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script> 
	<script type="text/javascript" src="assets/plugins/imagesloaded/imagesloaded.pkgd.js"></script> 
	<script src="assets/js/custom.js"></script> 

	    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="res/site/js/owl.carousel.min.js"></script>
    <script src="res/site/js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="res/site/js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="res/site/js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="res/site/js/bxslider.min.js"></script>
	<script type="text/javascript" src="res/site/js/script.slider.js"></script>

        <script src="res/site/assets/js/jquery.js"></script> 
    <script type="text/javascript" src="res/site/assets/plugins/counter/waypoints.min.js"></script> 
    <script type="text/javascript" src="res/site/assets/plugins/isotope/isotope.pkgd.min.js"></script> 
    <script type="text/javascript" src="res/site/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script> 
    <script type="text/javascript" src="res/site/assets/plugins/imagesloaded/imagesloaded.pkgd.js"></script> 
    <script src="res/site/assets/js/custom.js"></script> 

  </body>
</html>

</body>
</html>
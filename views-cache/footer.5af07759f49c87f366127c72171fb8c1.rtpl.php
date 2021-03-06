<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="footer-top-area">

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-about-us">
                    <h2>Print Photo</h2>
                    <p>Trabalhamos com a impressão de fotografias e confecção de foto produtos profissionais. Faça seus pedidos pela internet e receba no conforto de sua casa em até duas semanas. Entre em contato para saber mais. Entrega grátis em Indaial e cidades vizinhas.</p>      
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">Navegação </h2>
                    <ul>                            
                        <li><a href="/vendas">Produtos</a></li>
                        <li><a href="/servicos">Serviços</a></li>
                        <li><a href="/contato">Contatos</a></li>
                    </ul>                        
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">Categorias</h2>
                    <ul>
                        <?php require $this->checkTemplate("categories-menu");?>

                    </ul>                        
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-newsletter">
                    <h2 class="footer-wid-title">Newsletter</h2>
                    <p>Cadastre seu e-mail para receber informações, novidades e promoções.</p>
                    <div class="newsletter-form">
                        <form action="#">
                            <input type="email" placeholder="Digite seu e-mail">
                            <input type="submit" value="Subescrever">
                        </form>
                    </div>
                </div>
            </div>

            <div class="row" align="center">       
                <div class="col-md-4">                  
                   <br><br><a href="#"><img src="/res/site/img/facebook.png" width="47" height="47" style="margin-right: 50px;"></a>               
                   <a href="https://api.whatsapp.com/send?phone=5547996258219&text=Oi.%20Entre%20entre%20em%20contato,%20por%20favor"><img src="/res/site/img/whatsapp.png" style="margin-right: 50px;"></a>                  
                   <a href=""><img src="/res/site/img/logo.png" width="90"></a>
               </div>                  
           </div>
       </div>
   </div>
</div> <!-- End footer top area -->

<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="/res/site/js/owl.carousel.min.js"></script>
<script src="/res/site/js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="/res/site/js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="/res/site/js/main.js"></script>

<!-- Slider -->
<script type="text/javascript" src="/res/site/js/bxslider.min.js"></script>
<script type="text/javascript" src="/res/site/js/script.slider.js"></script>

<script src="/res/site/assets/js/jquery.js"></script> 
<script type="text/javascript" src="/res/site/assets/plugins/counter/waypoints.min.js"></script> 
<script type="text/javascript" src="/res/site/assets/plugins/isotope/isotope.pkgd.min.js"></script> 
<script type="text/javascript" src="/res/site/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script> 
<script type="text/javascript" src="/res/site/assets/plugins/imagesloaded/imagesloaded.pkgd.js"></script> 
<script src="/res/site/assets/js/custom.js"></script> 

</body>
</html>
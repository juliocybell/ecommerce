<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Minha Conta</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            <div class="col-md-3">
                <?php require $this->checkTemplate("profile-menu");?>

            </div>
            <div class="col-md-9">                
                <div class="cart-collaterals">
                    <h2>Enviar Fotos</h2>
                </div>
                <form method="post" action="#" role="form">         
                    <div class="progress">
                        <div id="progresso" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-12">
                            <input id="imagem" type="file" accept="image/*" multiple/>
                        </div>
                    </div>
                </form>
                <small class="text-danger">Atenção! Aguarde o término de envio das imagens, irá mostrar a mensagem da na barra de carregamento. O site tem suporte para o envio ilimtado de imagens, porém poderá demorar alguns minutos. Recomendamdos que enviem as imagens alternadamente, no máximo 50 imagens por vez; caso seja necessário use interent via wi-fi. Não esqueça de preencher as informações abaixo.</small>
            </div>
        </div><br>
        <div class="container">
            <div class="row">                      
                <form method="post" action="/res/site/ajax/salvar1.php">
                    <div class="form-group">
                        <label for="desperson">Nome completo</label>
                        <input type="text" class="form-control" id="desperson" name="desperson" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="background-color: grey">
                    </div>
                    <div class="form-group">
                        <label for="desemail">E-mail</label>
                        <input type="email" class="form-control" id="desemail" name="desemail" placeholder="Digite o e-mail aqui" value="<?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="background-color: grey">
                    </div>                 
                    <div class="form-group">
                        <label for="product">Confirme o produto que deseja adquirir</label>
                        <input type="text" class="form-control" id="product" name="product" placeholder="Digite aqui" style="background-color: grey">
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="observation">Digite abaixo as observações necessárias para seu pedido</label>
                        <textarea class="form-control rounded" placeholder="Detalhes do seu pedido" rows="5" name="observation" id="observation"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Confirmar seu pedido</button>
                </form>
            </div>
        </div>
    </div><br><br><br><br>

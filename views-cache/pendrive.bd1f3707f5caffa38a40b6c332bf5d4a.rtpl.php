<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Pen Drive e Pen Card</h2>
                </div>
            </div>
        </div>
    </div>
</div><br><br>
 <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 600px; overflow: hidden; visibility: hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
      <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
      <div style="position:absolute;display:block;background:url('/images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
    </div>
    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 600px; overflow: hidden;">
      <div data-p="112.50" style="display: none;">
        <img data-u="image" src="/res/site/img/products/256.jpg" />        
      </div>
      <div data-p="112.50" style="display: none;">
        <img data-u="image" src="/res/site/img/products/259.jpg" />           
      </div>
      <div data-p="112.50" style="display: none;">
        <img data-u="image" src="/res/site/img/products/262.jpg" />            
      </div>
      <div data-p="112.50" style="display: none;">
        <img data-u="image" src="/res/site/img/products/PenCard2.jpg" />           
      </div>
      <div data-p="112.50" style="display: none;">
        <img data-u="image" src="/res/site/img/products/PenCard3.jpg" />            
      </div>
      <div data-p="112.50" style="display: none;">
        <img data-u="image" src="/res/site/img/products/PenCard4.jpg" />            
      </div>
      <div data-p="112.50" style="display: none;">
        <img data-u="image" src="/res/site/img/products/PenCardMadeira1.jpg" />            
      </div>    
      <div data-p="112.50" style="display: none;">
        <img data-u="image" src="/res/site/img/products/PenCardMadeira3.jpg" />            
      </div>
      <div data-p="112.50" style="display: none;">
        <img data-u="image" src="/res/site/img/products/PenCardMadeira4.jpg" />            
      </div>
      <div data-p="112.50" style="display: none;">
        <img data-u="image" src="/res/site/img/products/PenDriveMadeira1.jpg" />            
      </div>    
      <div data-p="112.50" style="display: none;">
        <img data-u="image" src="/res/site/img/products/PenDriveMadeira3.jpg" />            
      </div>
      <div data-p="112.50" style="display: none;">
        <img data-u="image" src="/res/site/img/products/PenDriveMadeira4.jpg" />            
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
<div class="container mt-5">
  <div class="row pt-2 justify-content-center">    
      <div class="box-body no-padding">
              <table class="table table-striped">
                <thead>
                  <tr>                    
                    <th>Produto</th> 
                    <th></th>                   
                    <th>Preço</th> 
                    <th></th>                                    
                    <th style="width: 140px">&nbsp;</th>                    
                  </tr>
                </thead>
                <tbody>
                  <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>
                  <tr>                    
                    <td><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>   
                    <td></td>                   
                    <td class="text-danger" style="font-size: 22px;">R$ <?php echo formatPrice($value1["vlprice"]); ?></td>   
                    <td></td>                   
                    <td>
                      <div class="product-option-shop">
                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/cart/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/add">Comprar</a>
                    </div> 
                    </td>                   
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>   
  </div>
<br><br><br><br>
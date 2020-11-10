<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Lâminas para Álbuns</h2>
                </div>
            </div>
        </div>
    </div>
</div><br>
<div class="container mt-5">
  <div class="row pt-2 justify-content-center">      
    <div class="box-body no-padding">
              <table class="table table-striped">
                <thead>
                  <tr>                    
                    <th>Produto</th> 
                    <th></th>                                      
                    <th>Descrição</th>
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
                    <td style="font-size: 12px;"><?php echo htmlspecialchars( $value1["vlheight"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td> 
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
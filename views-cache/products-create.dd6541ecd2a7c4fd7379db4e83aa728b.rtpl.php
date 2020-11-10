<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Produtos
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/categories">Categorias</a></li>
    <li class="active"><a href="/admin/categories/create">Cadastrar</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Novo Produto</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/products/create" method="post">
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label for="desproduct">Nome do produto</label>
              <input type="text" class="form-control" id="desproduct" name="desproduct" placeholder="Digite o nome do produto">
            </div>
            <div class="form-group">
              <label for="vlprice">Preço de Venda</label>
              <input type="text" class="form-control" id="vlprice" name="vlprice" placeholder="0.00">
            </div>
            <div class="form-group">
              <label for="vlwidth">Preço de Custo</label>
              <input type="text" class="form-control" id="vlwidth" name="vlwidth" placeholder="0.00">
            </div>
            <div class="form-group">
              <label for="vlheight">Descrição Curta</label>
              <input type="text" class="form-control" id="vlheight" name="vlheight" placeholder="Descrição">
            </div>
            <div class="form-group">
              <label for="vllength">Descrição Completa</label>            
            <textarea class="form-control rounded" placeholder="Descrição" rows="5" id="vllength" name="vllength" ></textarea> 
            </div>          
            <div class="form-group">
              <label for="desurl">URL</label>
              <input type="text" class="form-control" id="desurl" name="desurl">
            </div>
            <div class="form-group">
              <label for="vlweight"></label>
              <input type="number" class="form-control" id="vlweight" name="vlweight" step="0.01" placeholder="0.00">
            </div>
          </div>
          <!-- /.box-body -->
          
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
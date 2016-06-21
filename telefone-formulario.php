<?php 
include("cabecalho.php");
include("banco-categoria.php");
include("conecta.php");
include("logica-usuario.php");
?>


<div id="main" class="container-fluid">
 <h3 class="page-header">Adicionar Contato</h3>
<form action="adicionar-telefone.php" method="get" accept-charset="utf-8">
<div class="row">
 <div class="form-group col-md-4">
   <label>Contato</label>
<input class="form-control" type="text" name="contato">
 </div>
 
 <div class="form-group col-md-4">
   <label>Descrição</label>
<input class="form-control" type="text" name="descricaotel">
 </div>
 
 <div class="form-group col-md-4">
   <label>Telefone</label>
<input class="form-control" type="numb" name="telefone"> </div>
</div>
  <hr />
  <div id="actions" class="row">
    <div class="col-md-12">
      <input class="btn btn-success" type="submit" value"Enviar">
    </div>

  </div>
</form>


<?php 
include("rodape.php");
 ?>


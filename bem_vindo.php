
<?php 
include("cabecalho.php");
include("logica-usuario.php");
?>


<div id="main" class="container-fluid">
 <h3 class="page-header">Adicionar Item</h3>
<form action="index.html">
<div class="row">
 <div class="form-group col-md-4">
   <label for="campo1">Campo Um</label>
   <input type="text" class="form-control" id="campo1">
 </div>
 
 <div class="form-group col-md-4">
   <label for="campo2">Campo Dois</label>
   <input type="text" class="form-control" id="campo3">
 </div>
 
 <div class="form-group col-md-4">
   <label for="campo3">Campo Três</label>
   <input type="text" class="form-control" id="campo3">
 </div>
</div>
  <hr />
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.html" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>


<?php 
include("rodape.php");
 ?>
<?php 
include("cabecalho.php");
include("banco-categoria.php");
include("conecta.php");
include("logica-usuario.php");
$produto = array("nome" => "", "preco" => "", "descricao" =>"");
	$usado = "";

verificaUsuario();

 $categorias = listarCategorias($conexao);


?>



<div id="main" class="container-fluid">
 <h3 class="page-header">Adicionar Item</h3>
<form action="adiciona-produto.php" method="post" accept-charset="utf-8">
	<?php include("produto-formulario-base.php"); ?>
	<br>
</form>


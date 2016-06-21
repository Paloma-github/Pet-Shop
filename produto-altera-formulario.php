<?php include("cabecalho.php");
		include("banco-categoria.php");
		include("conecta.php");
		include("banco-produtos.php");

 $id = $_GET['id'];
 $produto = buscaProdutos($id, $conexao);
 $categorias = listarCategorias($conexao);
 $usado  = $produto['usado'] ? "checked='checked'" : "";

?>
	<h1>Alterar produto</h1>
	<form action="altera-produto.php" method="post" accept-charset="utf-8">
		<input type="hidden" name="id" value="<?=$produto['id']?>">
		<table class="table">
		<?php include("produto-formulario-base.php"); ?>
			<tr>
				<td><input class="btn btn-primary" type="submit" value"Enviar"></td>
			</tr>
		</table>
	</form>
<?php include("rodape.php") ?>
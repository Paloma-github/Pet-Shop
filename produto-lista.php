<?php 
include("cabecalho.php");
 include("conecta.php");
 include("banco-produtos.php");
include("logica-usuario.php");
  ?>

<?php if(isset($_SESSION["success"])){ ?>
	<p class="alert-success"><?=$_SESSION["success"]?></p>
<?php
	unset($_SESSION["success"]);
} ?>

<h4>Lista De Itens Adicionados</h4>

<table class="table table-striped table-bordered">
<tr id="titulo">
	<td>Produtos Cadastrados</td>
	<td>Tipo</td>
	<td>Preço</td>
	<td>Descrição</td>
	<td>Alterar</td>
	<td>Excluir</td>

</tr>	
<?php
	$produtos = listaProdutos($conexao);
	foreach ($produtos as $produto) {
	?>


		<tr>
			<td><?=$produto['nome'];?></td>
			<td><?=$produto['categoria_id'];?></td>
			<td><?=$produto['preco'];?></td>
			<td ><?=substr($produto['descricao'], 0, 40);?></td>
			<td><a href="produto-altera-formulario.php?id=<?=$produto['id'];?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></a></td>
			<td>
				<form action="remove-produto.php" method="post">
					<input type="hidden" name="id" value="<?=$produto['id']?>">
					<button class="btn btn-danger"><span class=" glyphicon glyphicon-trash"></span></button>
				</form>
			</td>
		</tr>
	<?php
	}
	?>
</table>
<?php include("rodape.php"); ?>
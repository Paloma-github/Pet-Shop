<?php include("cabecalho.php");
include("conecta.php");
include("banco-telefone.php"); ?>

<?php
if (array_key_exists("removido", $_GET) && $_GET['removido']==true) {
	?>		<p class="alert-success">Produto apagado com sucesso.</p>
	<?php

}

?>


<?php
if (array_key_exists("alterado", $_GET) && $_GET['alterado']==true) {
	?>		<p class="alert-success">Produto ALTERADO com sucesso.</p>
	<?php

}

?>
<table class="table table-striped table-bordered">
	<tr id="titulo">
		<td>Nome</td>
		<td>Contato</td>
		<td>Descrição</td>
		<td>Alterar</td>
		<td>Excluir</td>
	</tr>	
	<?php
	$telefones = listaTelefones($conexao);
	foreach ($telefones as $telefone) {
		?>
		<tr>
			<td><?=$telefone['contato'];?></td>
			<td><?=$telefone['telefone'];?></td>
			<td><?=$telefone['descricaotel'];?></td>
			<td>
				<form action="remove-telefone.php" method="post" >
					<input type="hidden" name="id_tel" value="<?=$telefone['id_tel']?>">
					<button type="submit" class="btn btn-danger">
						<span class="glyphicon glyphicon-trash"></span>
					</button>
				</form>

			</td>
			<td>
				<form action="form_alterar.php" method="post" >
					<input type="hidden" name="id_tel" value="<?= $telefone['id_tel']?>">
					<button class="btn btn-warning">
						<span class="glyphicon glyphicon-edit"></span>
					</button>			
				</form>
			</td>
		</tr>
		<?php
	}
	?>
</table>
<?php include("rodape.php"); ?>
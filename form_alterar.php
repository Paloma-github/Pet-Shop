<?php 
include("cabecalho.php"); 
include("banco-telefone.php");
include("conecta.php"); ?>

<?php
	$telefones = listaTelefones($conexao);
	foreach ($telefones as $telefone) {
	if ($telefone['id_tel']==$_POST['id_tel'])
	{
?>

<form action="editar-telefone.php" method="get" accept-charset="utf-8">
	<input type="hidden" name="id_tel" value="<?= $telefone['id_tel']; ?>">
		<table class="table">
			<tr>
				<td>Contato:</td><td><input class="form-control" type="text" name="contato" value="<?= $telefone['contato']; ?>"></td>
			</tr>
			<tr>
				<td>Telefone:</td><td><input class="form-control" type="numb" name="telefone" value="<?= $telefone['telefone']; ?>"></td>
			</tr>
			<td>Descrição:</td><td><input class="form-control" type="text" name="descricaotel" value="<?= $telefone['descricaotel']; ?>"></td>
			</tr>
			<tr>
				<td><input class="btn btn-success" type="submit" value"Enviar"></td>
			</tr>
		</table>
	</form>
<?php
		}
	}
?>

<?php include("rodape.php"); ?>



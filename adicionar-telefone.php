<?php include("cabecalho.php");
 include("conecta.php");
 include("banco-telefone.php");

$contato = $_GET['contato'];
$telefone = $_GET['telefone'];
$descricaotel = $_GET['descricaotel'];

if (insereTelefone($conexao, $contato, $telefone, $descricaotel)) { ?>
	<p class="text-success">O TELEFONE <?=$contato; ?>, <?=$telefone; ?>, <?=$descricaotel; ?> foi adicionado.</p>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O TELEFONE <?=$contato; ?> , <?=$telefone; ?>, <?=$descricaotel; ?> não foi adicionado: <?=$msg ?></p>
<?php }
?>
<?php include("rodape.php") ?>

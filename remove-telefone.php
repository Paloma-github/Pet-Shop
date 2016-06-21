<?php include("cabecalho.php");
 include("conecta.php");
 include("banco-telefone.php"); 

$id_tel = $_POST['id_tel'];

removeTelefone($conexao, $id_tel);
header("Location: telefone-lista.php?removido=true");
die();
 ?>

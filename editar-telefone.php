<?php include("cabecalho.php");
 include("conecta.php");
 include("banco-telefone.php"); 


$id_tel = $_POST['id_tel'];
$contato =  $_POST['contato'];
$telefone =  $_POST['telefone'];
$descricaotel =  $_POST['descricaotel'];


alteraTelefone($conexao, $id_tel, $telefone, $contato, $descricaotel);
header("Location: telefone-lista.php?alterado=true");
die();
 ?>




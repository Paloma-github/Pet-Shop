<?php

function listaTelefones($conexao){
	$telefones = array();
	$resultado = mysqli_query($conexao, "select * from telefones");
	while ($telefone = mysqli_fetch_assoc($resultado)) {
		array_push($telefones, $telefone);
	}
	return $telefones;
}

function insereTelefone($conexao, $contato, $telefone, $descricaotel){
	$query = "INSERT INTO telefones (contato, telefone, descricaotel) VALUES('{$contato}', '{$telefone}', '{$descricaotel}')";
	return mysqli_query($conexao, $query);
}

function removeTelefone($conexao, $id_tel){
	$query = "delete from telefones where id_tel = {$id_tel}";
	return mysqli_query($conexao, $query);
}


function alteraTelefone($conexao, $id_tel, $contato, $telefone,  $descricaotel){
	$query = "UPDATE telefones SET  contato = '$contato', telefone = '$telefone' , descricaotel = '$descricaotel' where id ='{$id_tel}'";
	return mysqli_query($conexao, $query); 
}


//UPDATE `telefones` SET `id_tel`=[value-1],`contato`=[value-2],`telefone`=[value-3],`descricaotel`=[value-4] WHERE 1


?>
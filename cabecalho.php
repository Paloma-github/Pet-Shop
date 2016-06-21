<?php
error_reporting(E_ALL ^ E_NOTICE);
include("mostra-alerta.php");
mostrarAlerta("success");
?>
<!DOCTYPE html>
<html>
<head>
	<title>HeyPet</title>
	<meta charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/loja.css">
	<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
</head>
<body background="./view/"> 
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container1">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">HeyPet</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="produto-formulario.php">Cadastrar Produtos</a></li>
					<li><a href="produto-lista.php" title="">Produtos Inseridos</a></li>
					<li><a href="telefone-formulario.php" title="">Contatos</a></li>
					<li><a href="telefone-lista.php" title="">Ver contatos</a></li>
					<li></li>
					<li></li>
					</ul>
			</div>
		</div>
		</div>
	<div class="container">
		<div class="principal">
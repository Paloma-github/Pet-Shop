<?php 
include("cabecalho.php");
include("logica-usuario.php");
include("view/fotos_view.php"); ?>

<div class="principal">
	<div class="row">
		<div class="page-header">
			<h3>HeyPet! Acesse aqui em sua Área de Login</h3>
		</div>
		<div class="col-md-4 col-md-offset-4">
<?php
mostrarAlerta("success");
mostrarAlerta("danger");
?>
			<?php if(usuarioEstaLogado()) {?>
			<p class="text-success">Usuário: <?=usuarioLogado()?>.
			<span class="glyphicon glyphicon-off"></span>
				<a href="logout.php"><b>Sair...</b></a></p>
				<br> Para mais informações ligue no telefone
				<span class="glyphicon glyphicon-phone-alt"></span> 61 8898-9888
				<?php }
				else{ ?>
				<form action="login.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="email" placeholder="Insira o e-mail cadastrado" required>
						<span><i class="fa fa-envelope-o"></i></span>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="senha" placeholder="Senha" required>
						<span><i class="fa fa-lock"></i></span>
					</div>

					<button type="submit" name="entrar" class="btn btn-success">
						Entrar...
					</button>
				</div>
			</div>
		</div>
	</div>
</form>
<?php } ?>





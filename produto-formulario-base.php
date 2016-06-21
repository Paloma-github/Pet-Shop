<?php 
?>
<div class="row">
	<div class="form-group col-md-4">
		<label>Nome</label>
		<input class="form-control" type="text" name="nome" value="<?=$produto['nome'];?>"  >
	</div>
	<div class="form-group col-md-4">
		<label>Preço</label>
		<input class="form-control" type="numb" name="preco" value="<?=$produto['preco'];?>" >
	</div>
	<div class="form-group col-md-4">
		<label>Descrição</label>
		<textarea class="form-control" name="descricao"><?=$produto['descricao'];?></textarea>
	</div>
	<div class="form-group col-md-4">
		<label>Categoria</label>
		<select class="form-control" name="categoria_id">
			<?php foreach ($categorias as $categoria) : 
			$essaEhaCategoria = $produto['categoria_id'] == $categoria['id'];
			$selecao = $essaEhaCategoria ? "selected='selected'" : "";
			?>
			<option value="<?=$categoria['id'] ?>" 
				<?=$selecao?>>
				<?=$categoria['nome']?><br>
			</option>
		<?php endforeach?>
	</div>
	<div class="form-group col-md-4">
		<input type="checkbox" <?=$usado?> name="usado" value="true"><label>Usado</label>
	</div>

	<div id="actions" class="row">
    <div class="col-md-12">
      <input class="btn btn-success" type="submit" value"Enviar">
    </div>
</div>
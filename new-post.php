<?php require('init.php'); ?>
<?php require('templates/header.php'); ?>
<form action="" method="post">
		<label for="title">Título (requerido)</label>
		<input type="text" name="title" id="title" value="">

		<label for="excerpt">Extracto</label>
		<input type="text" name="excerpt" id="excerpt" value="">

		<label for="content">Contenido (Requerido)</label>
		<textarea name="content" id="content" cols="30" rows="30"></textarea>

		<p>
			<input type="submit" name="submit-new-post" value="Nuevo post">
		</p>
	</form>
<?php require('templates/footer.php'); ?>
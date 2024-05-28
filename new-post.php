<?php require('init.php'); ?>
<?php require('templates/header.php'); ?>

<?php 
	$error = false;
	$title = '';
	$excerpt = '';
	$content = '';
	// Se ha enviado el formulario?

	if (isset($_POST['submit-new-post'])) {
		// si se ha enviado
		$title = $_POST['title']; // Recordar que los nombres vienen del nombre del formulario
		$excerpt = $_POST['excerpt'];
		$content = $_POST['content'];

		// Comprobar si el titulo esta vacio
		if(empty($title) || empty($content)){
			$error = true;
		}else{
			$new_post = [
				'id' => 0,
				'title' => $title,
				'excerpt' => $excerpt,
				'content' => $content,
				'published_on' => date(' Y-m-d H:i:s')
			];
	
			var_dump($new_post);
			die('Formulario enviado');
		}	
	}
?>

<h2>Crear nuevo Post</h2>

<?php 
	if($error): ?>
		<div class="error"> Error en el formulario </div>
	<?php endif ?>

<form action="" method="post">
		<label for="title">Título (requerido)</label>
		<input type="text" name="title" id="title" value="<?php echo $title?>">

		<label for="excerpt">Extracto</label>
		<input type="text" name="excerpt" id="excerpt" value="<?php echo $excerpt ?>">

		<label for="content">Contenido (Requerido)</label>
		<textarea name="content" id="content" cols="30" rows="30"> <?php echo $content ?></textarea>

		<p>
			<input type="submit" name="submit-new-post" value="Nuevo post">
		</p>
	</form>
<?php require('templates/footer.php'); ?>
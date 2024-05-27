<?php 
	$post_1_titulo = 'lorem ipsum dolor sit amet';
	$post_1_contenido = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto perferendis sed maiores hic earum mollitia, aspernatur necessitatibus, optio pariatur repellat modi adipisci sunt quia repellendus officiis obcaecati soluta unde laudantium!';

	$post_2_titulo = 'Lorem ipsum sit amet dolor';
	$post_2_contenido = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat earum animi totam enim doloribus nulla, necessitatibus consectetur magnam, facilis in voluptatum dicta ut nam debitis odio, suscipit voluptas sed dolorem?';

	function get_post_1_titulo(){
		$post_1_titulo = 'lorem ipsum dolor sit amet';
		return $post_1_titulo;
	}

	function get_post_2_titulo(){
		$post_2_titulo = 'Lorem ipsum sit amet dolor';
		return $post_2_titulo;
	}

	function get_post_1_contenido(){
		$post_1_contenido = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto perferendis sed maiores hic earum mollitia, aspernatur necessitatibus, optio pariatur repellat modi adipisci sunt quia repellendus officiis obcaecati soluta unde laudantium!';
		return $post_1_contenido;
	}

	function get_post_2_contenido(){
		$post_2_contenido = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat earum animi totam enim doloribus nulla, necessitatibus consectetur magnam, facilis in voluptatum dicta ut nam debitis odio, suscipit voluptas sed dolorem?';
		return $post_2_contenido;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Micro CMS</title>
	<link rel="stylesheet" href="assets/style.css"></head>
<body>

<nav id="site-navigation" role="navigation" class="row row-center">
	<div class="column">
		<h1>
			<a href="index.php">Micro CMS</a>
		</h1>
		<ul class="main-menu column clearfix">
		</ul>
	</div>
</nav>

<div id="content">
	<div class="posts">
		<div>
			<h2><?php echo get_post_1_titulo(); ?></h2>
			<div><?php echo get_post_1_contenido(); ?></div>
		</div>
		<div>
			<h2><?php echo get_post_2_titulo(); ?></h2>
			<div><?php echo get_post_2_contenido(); ?></div>
		</div>
	</div>
</div>

<footer id="footer">
	<div id="inner-footer">
		Curso de Introducción a PHP en Domestika
	</div>
</footer>
</body>
</html>

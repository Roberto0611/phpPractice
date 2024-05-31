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
			<li><a href="index.php">Blog</a></li>
			<li><a href="new-post.php">Nueva Entrada</a></li>
			<?php if(is_logged_in()): ?>
				<li><a href="?logout=true">LogOut</a></li>
			<?php else: ?>
				<li><a href="login.php">Login</a></li>
			<?php endif; ?>
		</ul>
	</div>
</nav>

<div id="content" >	
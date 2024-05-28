<?php 
	require('init.php');

	$host = "localhost";
	$user = "root";
	$password = "Roberto0611#";
	$database = "microcms";
	$port = "3307";

	$app_db = mysqli_connect($host, $user, $password, $database, $port);

	if($app_db === false){
		die('Error al conectarse a la base de datos');
	}


	$result = mysqli_query($app_db, "SELECT * FROM posts");
	$all_posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	$post_found = false;

	if(isset($_GET['view'])){
		$query = "SELECT * FROM posts WHERE id = " . $_GET['view'];
		$result = mysqli_query($app_db, $query);
		if ($result) {
			$post_found = mysqli_fetch_assoc($result);
			$all_posts = [$post_found];
		}
	}
?>

<?php require('templates/header.php'); ?>

	<div class="posts">
		<?php foreach ( $all_posts as $post ): ?>
			<article class="post">
				<header>
					<h2 class="post-title">
						<a href="?view=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a>
					</h2>
				</header>
				<div class="post-content">
					<?php if ( $post_found ): 
						// Si encontramos el post encontramos los posts
						echo $post['content']; ?>
					<?php else: 
						// Si no solo mostramos la vista previa de nustros blogs
						 echo $post['excerpt']; ?>
					<?php endif; ?>
				</div>
				<footer>
					<span class="post-date">
						Publicada en:
						<?php	echo strftime( '%d %b %Y', strtotime( $post['published_on'] ) );	?>
					</span>
				</footer>
			</article>
		<?php endforeach; ?>
	</div>

<?php require('templates/footer.php'); ?>

<?php
$error = false;
$title = '';
$excerpt = '';
$content = '';

// Se ha enviado el formulario?
if (isset($_POST['submit-new-post'])) {
    // si se ha enviado
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING); // Recordar que los nombres vienen del nombre del formulario
    $excerpt = filter_input(INPUT_POST, 'excerpt', FILTER_SANITIZE_STRING);
    $content = strip_tags($_POST['content'], '<br><p><a><img><div>');

    // Comprobar si el titulo esta vacio
    if(empty($title) || empty($content)){
        $error = true;
    }else{
        insert_post($title,$excerpt,$content);
        //Redirigir al blog
        redirect_to("admin/index.php?action=list-posts&success=true");
    }	
}

?>

<?php require __DIR__ . '/../../templates/header.php'; ?>
<form action="" method="post">
    <label for="title">Título (requerido)</label>
    <input type="text" name="title" id="title" value="<?php echo htmlspecialchars($title, ENT_QUOTES); ?>">

    <label for="excerpt">Extracto</label>
    <input type="text" name="excerpt" id="excerpt" value="<?php echo htmlspecialchars($excerpt, ENT_QUOTES); ?>">

    <label for="content">Contenido (Requerido)</label>
    <textarea name="content" id="content" cols="30" rows="30"> <?php echo htmlspecialchars($content, ENT_QUOTES); ?></textarea>

    <p>
        <input type="submit" name="submit-new-post" value="Nuevo post">
    </p>
</form>
<?php require __DIR__ . '/../../templates/footer.php'; ?>

<?php 
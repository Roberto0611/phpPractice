<?php
if (isset($_GET['delete-post'])) {

$id = $_GET['delete-post'];

if ( !checkHash('delete-post-' . $id, $_GET['hash'])){
    die("Hackeando no?");
}
delete_post($id);
redirect_to('admin?action=list-posts');
die();
}

$all_posts = get_all_posts();
?>

<?php require __DIR__ . '/../../templates/header.php'; ?>

<table>
<?php foreach ( $all_posts as $post ): ?>
    <tr>
        <td><?php echo $post['title']; ?></td>
        <td><a href="<?php echo SITE_URL . '/admin?action=list-posts&delete-post=' . $post['id'] ?>&hash=<?php echo generate_hash( 'delete-post-' . $post['id'] ); ?>">Delete</a></td>
    </tr>
<?php endforeach; ?>
</table>
<?php require __DIR__ . '/../../templates/footer.php'; ?>


<?php 
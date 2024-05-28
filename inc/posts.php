<?php
function get_all_posts(){
	global $app_db;
    $result = mysqli_query($app_db, "SELECT * FROM posts");
	if (! $result) {
		die(mysqli_error($app_db));
	}
	return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function get_post($post_id){
    global $app_db;
	$query = "SELECT * FROM posts WHERE id = " . $_GET['view'];
	$result = mysqli_query($app_db, $query);
	if (! $result) {
		die(mysqli_error($app_db));
	}
	return mysqli_fetch_assoc($result);
}

function insert_post($title,$excerpt,$content){
	global $app_db;
	$published_on =  date(' Y-m-d H:i:s');
	$query = "INSERT INTO posts 
	(title, excerpt, content, published_on)
	VALUES ('$title','$excerpt','$content','$published_on')";

	$result = mysqli_query($app_db, $query);
	if(! $result){
		die(mysqli_error($app_db));
	}
}
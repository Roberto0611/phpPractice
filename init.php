<?php
require('config.php');

if (!file_exists('config.php')) {
	die('Error no existe config.php');
}

session_start();

setlocale(LC_TIME, SITE_LANG);
date_default_timezone_set(SITE_TIMEZONE);

$app_db = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT );

if($app_db === false){
	die('Error al conectarse a la base de datos');
}

require('inc/posts.php');
require('inc/helper.php');

// Log-Out
if (isset($_GET['logout'])) {
	logout();
}
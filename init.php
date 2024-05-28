<?php

setlocale(LC_TIME, 'es', 'spa', 'es_ES');
date_default_timezone_set("America/Tijuana");

// Conexion a la base de datos
$host = "localhost";
$user = "root";
$password = "Roberto0611#";
$database = "microcms";
$port = "3307";

$app_db = mysqli_connect($host, $user, $password, $database, $port);

if($app_db === false){
	die('Error al conectarse a la base de datos');
}


require('inc/posts.php');
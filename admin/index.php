<?php
require('../init.php');

if (!is_logged_in()) {
    redirect_to('login.php');
}

$action = '';

if(isset($_GET['action'])){
    $action = $_GET['action'];
}

switch ($action) {
    case 'new-post':{
        require 'templates/newpost.php';
        break;
    }
    case 'list-posts':{
        require 'templates/listpost.php';
        break;
    }

    default: {
        require 'templates/admin.php'; 
    }
}
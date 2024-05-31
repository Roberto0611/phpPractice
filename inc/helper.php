<?php 
    function redirect_to($path){
        header('location:' . SITE_URL . $path);
    }

    function generate_hash($action){
        return md5($action);
    }

    function checkHash($action, $hash){
        if(generate_hash($action) === $hash) {
            return true;
        }
        return false;
    }

    function is_logged_in(){
        $is_user_logged_in = isset($_SESSION['user']) && $_SESSION['user'] === ADMINE_USER;
        return $is_user_logged_in;
    }

    function login($username, $password){
        if($_POST['username'] === ADMINE_USER && $_POST['password'] === ADMIN_PASS){
            $_SESSION['user'] = ADMINE_USER;
            return true;
        }
        return false;
    }

    function logout(){
        unset($_SESSION['user']);
	    redirect_to('index.php');
        session_destroy();
    }
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
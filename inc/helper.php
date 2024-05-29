<?php 
    function redirect_to($path){
        header('location:' . SITE_URL . $path);
    }
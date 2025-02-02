<?php 

function checkRequestMethod($method) {
    if ($_SERVER['REQUEST_METHOD'] == $method){
        return true;
    }
    return false;
}

function checkPostInput($input){
    if(isset($_POST[$input])){
        return true;
    }
    return false;
}

function sanitizeInput($input){
    return trim(htmlspecialchars(htmlentities($input)));
}

function emailVal($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return false;
    }
    return true;
}

function redirect($path){
    header("Location:$path");
}
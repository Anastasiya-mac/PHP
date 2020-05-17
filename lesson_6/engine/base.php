<?php
function redirect(string $url): void
{
    header("Location: {$url}");
    exit;
}

function get(string $name) {
    if (empty($_GET[$name])) {
       $result = 0; 
    }
    else {
        $result = $_GET[$name]; 
    }
    return $result;
}

function post($name) {

}
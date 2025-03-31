<?php 

function redirect($location) {
    header("Location: $location");
}

function post($name) {
    return $_POST[$name];
}

?>
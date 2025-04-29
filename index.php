<?php 
// php -S localhost:8000

$url = parse_url( $_SERVER["REQUEST_URI"], PHP_URL_PATH );

if ($url == "/tasks") {
    require "controllers/tasks.php";
}
else if ($url == "/tasks/details") {
    require "controllers/tasks-details.php";
}
else if ($url == "/tasks/save") {
    require "controllers/save-task.php";
}
else if ($url == "/home") {
    require "controllers/home.php";
}

?>
 
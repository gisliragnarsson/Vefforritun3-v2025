<?php 

$url = parse_url( $_SERVER["REQUEST_URI"], PHP_URL_PATH );

if ($url == "/tasks") {
    require "tasks.php";
}
else if ($url == "/tasks/save") {
    require "save-task.php";
}

?>
 
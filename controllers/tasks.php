<?php 

require "database.php";

$query = $pdo->query("SELECT * FROM tasks");
$tasks = $query->fetchAll();

require "views/tasks-view.php";

?>
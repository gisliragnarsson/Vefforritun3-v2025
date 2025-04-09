<?php 

require "database.php";

$query = $pdo->query("SELECT * FROM tasks");
$tasks = $query->fetchAll();

require "tasks-view.php";

?>
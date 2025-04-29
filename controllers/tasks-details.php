<?php

require "database.php";
require "functions.php";

$id = get('task_id');

$data = [$id];

$query = $pdo->prepare("SELECT * FROM tasks WHERE id = ?");
$query->execute($data);

$task = $query->fetch();

require "views/task-details-view.php";

?>
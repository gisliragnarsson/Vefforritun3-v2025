<?php

require "database.php";
require "functions.php";

$description = post("description");

$data = [null, $description, 0];
$pdo->prepare("INSERT INTO tasks VALUES (?,?,?)")->execute($data);

redirect("/tasks");

?>
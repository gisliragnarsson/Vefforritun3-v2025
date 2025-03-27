<?php
require "database.php";

$description = $_POST['description'];
$data = [null, $description, 0];
$pdo->prepare("INSERT INTO tasks VALUES (?,?,?)")->execute($data);

header("Location: index.php");
?>
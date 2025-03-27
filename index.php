<?php 
require "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <?php   
        $query = $pdo->query("SELECT * FROM tasks");
        $tasks = $query->fetchAll();
    ?>

    <h1>Tasks</h1>

    <form action="save-task.php" method="post">
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description">
        </div>
        <button type="submit">Save task</button>
    </form>

    <?php foreach($tasks as $task): ?>
        <p>
            <?php echo $task["description"]; ?>
        </p>    
    <?php endforeach; ?>

</body>
</html>
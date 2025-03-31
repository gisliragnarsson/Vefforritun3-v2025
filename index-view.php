<?php require "header-view.php"; ?>

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

<?php require "footer-view.php"; ?>
<?php require "header-view.php"; ?>

    <h1>Tasks</h1>

    <form action="/tasks/save" method="post">
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description">
        </div>

        <button type="submit">Save task</button>
    </form>

    <?php foreach($tasks as $task): ?>
        <a href="/tasks/details?task_id=<?php echo $task["id"]; ?>">
            <?php echo $task["description"]; ?>
        </p>    
    <?php endforeach; ?>

<?php require "footer-view.php"; ?>
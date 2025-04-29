<?php require "header-view.php"; ?>

    <h1>Details about <?php echo $task["description"]; ?></h1>

    <p>This task id is <?php echo $task["id"]; ?></p>

    <?php if($task["finished"]): ?>
        <p>This task is finished</p>
    <?php else: ?>
        <p>This task is not finished</p>
    <?php endif; ?>

<?php require "footer-view.php"; ?>
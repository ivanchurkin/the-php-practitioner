<?php require('partials/head.php'); ?>

    <h1>Home</h1>

    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <s><?= $task->description; ?></s>
                <?php else : ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <? endforeach; ?>
    </ul>

    <form method="post" action="/names">
        <input type="text" name="name">
        <button>Send</button>
    </form>

<?php require('partials/footer.php'); ?>